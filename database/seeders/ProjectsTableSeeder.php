<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {


            $project = new Project();

            $project->name = $faker->name();
            $project->description = $faker->text();
            $project->cover_img = null;
            $project->github_link = $faker->url();

            $project->save();
        }
    }
}
