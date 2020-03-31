<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SectorSeeder::class);
        $this->call(ReferencesSeeder::class);
        $this->call(InstitutionsSeeder::class);
        $this->call(VolunteersSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(WeeksSeeder::class);
        $this->call(LowVolunteersSeeder::class);

    }
}
