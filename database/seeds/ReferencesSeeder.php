<?php

use Illuminate\Database\Seeder;

class ReferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $references = [
            ['servicio social', 'Programa Educativo'],
            ['Jovenes Contruyendo ', 'Programa Federal'],
            ['Practicas Escolares', 'Programa Educativo'],
        ];

        foreach ($references as $reference){
            App\Models\References::create([
                'name' => $reference[0],
                'reference' => $reference[1],
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }
    }
}
