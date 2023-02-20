<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'object' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $newContact = Contact::create($data);

        return response()->json($newContact);
    }
}
