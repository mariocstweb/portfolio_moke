<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = config('projects');


        foreach ($projects as $project) {
            $new_project = new Project();
            $new_project->title = $project['title'];
            $new_project->user_id = $project['user_id'];
            $new_project->description = $project['description'];
            $new_project->image = $project['image'];
            $new_project->address = $project['address'];
            $new_project->is_published = $project['is_published'];
            $new_project->latitude = $project['latitude'];
            $new_project->longitude = $project['longitude'];
            $new_project->save();
        }
    }
}
