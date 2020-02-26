<?php

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectors = [
            ['Escuela Publica', 'Publico'],
            ['Escuela Privada', 'Privada'],
            ['Centro de Salud', 'Publica'],
            ['Clinica Publica', 'Publico'],
            ['Clinica Privada', 'Privada'],
        ];

        foreach ($sectors as $sector){
            App\Models\Sector::create([
                'name' => $sector[0],
                'category' => $sector[1],
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }
    }
}
