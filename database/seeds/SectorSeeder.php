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
        $data = File::get("database/data/Sectors.json");
        $sectors = json_decode($data);
        foreach ($sectors as $sector) {
            App\Models\Sector::create([
                'name' => $sector->name,
                'category' => $sector->category,
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }
    }
}
