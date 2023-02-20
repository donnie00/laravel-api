<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $last3 = $request->input('last3');
        $order = $request->input('order');

        if ($last3) {
            $projects = Project::with('type', 'technologies')->orderBy('created_at', 'DESC')->limit(3)->get();
        } elseif ($order === 'oldest') {
            $projects = Project::with('type', 'technologies')->orderBy('created_at', 'ASC')->get();
        } elseif ($order === 'latest') {
            $projects = Project::with('type', 'technologies')->orderBy('created_at', 'DESC')->get();
        } else {
            $projects = Project::with('type', 'technologies')->get();
        }

        return response()->json($projects);
    }

    public function show(Project $project)
    {

        $project->load('type', 'technologies');

        return response()->json($project);
    }
}
