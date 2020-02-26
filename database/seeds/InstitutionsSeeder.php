<?php

use Illuminate\Database\Seeder;

class InstitutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institutions = [
            ['Centro de Salud Tulancingo', 'San José Caltengo', '7757531106','43624','3'],
            ['Centro de Salud Nicolás Bravo', 'Consitución 141', '7757425456','43689','3'],

        ];

        foreach ($institutions as $institution){
            App\Models\Institutions::create([
                'name' => $institution[0],
                'address' => $institution[1],
                'phone' => $institution[2],
                'postal_code' => $institution[3],
                'sector_id' => $institution[4],
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }
    }
}
