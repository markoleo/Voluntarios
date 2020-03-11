<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = File::get("database/data/projects.json");
        $projects = json_decode($data);
        foreach ($projects as $project) {
            App\Models\Project::create([
                'name' => $project->name,
                'short_name' => $project->short_name,
                'Project_Type' => $project->Project_Type,
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }


    }
}
