<?php

use Illuminate\Database\Seeder;

class VolunteersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $volunteers = [
            ['07V2000031', 'Marco', 'Leon', 'Gonzalez', 'Col.Guadalupe','7751865109','2'],
            ['07V2000024', 'Reyna', 'Melo', 'Gonzalez', 'Col. Metilatla','7752562238','2'],
            ['07V2000032', 'Valeria Arely', 'García', 'López', 'Col.San jose','7712755211','2'],
            ['07V2000034', 'Jenifer', 'Andrade', 'Cazarez', 'Col. La Cañada','7757512250','2'],
            ['07V2000041', 'Mariela', 'Hernandez', 'Melo', 'Col.San Rafael','7757565879','2'],
            ['07V2000035', 'Oscar Moctezuma', 'Cabrera', 'Eulogio', 'Col.Guadalupe','7755935012','2'],
        ];

        foreach ($volunteers as $volunteer){
            App\Models\Volunteers::create([
                'key' => $volunteer[0],
                'name' => $volunteer[1],
                'last_name' => $volunteer[2],
                'second_name' => $volunteer[3],
                'address' => $volunteer[4],
                'phone' => $volunteer[5],
                'references_id' => $volunteer[6],
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }
    }
}
