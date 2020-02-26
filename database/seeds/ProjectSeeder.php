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
        $project = [
            ['Información en el Contexto Comunitario', 'ICC', 'Sensibilización'],
            ['Información en el Contexto Escolar', 'ICE', 'Sensibilización'],
            ['Información en el Contexto Laboral', 'ICE', 'Sensibilización'],
            ['Información en el Contexto de Salud', 'ICS', 'Sensibilización'],
            ['Orientación Preventiva Temprana', 'OPT', 'Habilidades para la vida'],
            ['Orientación Preventiva Infantil', 'OPI', 'Habilidades para la vida'],
            ['Orientación Familiar Preventiva', 'OFP', 'Habilidades para la vida'],
        ];

        foreach ($project as $projects){
            App\Models\Project::create([
                'name' => $projects[0],
                'short_name' => $projects[1],
                'Project_Type' => $projects[2],
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }
    }
}
