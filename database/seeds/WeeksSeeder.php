<?php

use Illuminate\Database\Seeder;

class WeeksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weeks = [

            ['30 diciembre 2019-5 enero 2020'],
            ['6 enero 2020-12 enero 2020'],
            ['13 enero 2020-19 enero 2020'],
            ['20 enero 2020-26 enero 2020'],
            ['27 enero 2020-2 febrero 2020'],
            ['3 febrero 2020-9 febrero 2020'],
            ['10 febrero 2020-16 febrero 202'],
            ['17 febrero 2020-23 febrero 2020'],
            ['24 febrero 2020-1 marzo 2020'],
            ['2 marzo 2020-8 marzo 2020'],
            ['9 marzo 2020-15 marzo 2020'],
            ['16 marzo 2020-22 marzo 2020'],
            ['23 marzo 2020-29 marzo 2020'],
            ['30 marzo 2020-5 abril 2020'],
            ['6 abril 2020-12 abril 2020'],
            ['13 abril 2020-19 abril 2020'],
            ['20 abril 2020-26 abril 2020'],
            ['27 abril 2020-3 mayo 2020'],
            [ '4 mayo 2020-10 mayo 2020'],
            [ '11 mayo 2020-17 mayo 2020'],
            [ '18 mayo 2020-24 mayo 2020'],
            [ '25 mayo 2020-31 mayo 2020'],
            [ '1 junio 2020-7 junio 2020'],
            [ '8 junio 2020-14 junio 2020'],
            [ '15 junio 2020-21 junio 2020'],
            [ '22 junio 2020-28 junio 2020'],
            [ '29 junio 2020-5 julio 2020'],
            [ '6 julio 2020-12 julio 2020'],
            [ '13 julio 2020-19 julio 2020'],
            [ '20 julio 2020-26 julio 2020'],
            [ '27 julio 2020-2 agosto 2020'],
            [ '3 agosto 2020-9 agosto 2020'],
            [ '10 agosto 2020-16 agosto 2020'],
            [ '17 agosto 2020-23 agosto 2020'],
            [ '24 agosto 2020-30 agosto 2020'],
            [ '31 agosto 2020-6 septiembre 2020'],
            [ '7 septiembre 2020-13 septiembre 2020'],
            [ '14 septiembre 2020-20 septiembre 2020'],
            [ '21 septiembre 2020-27 septiembre 2020'],
            [ '28 septiembre 2020-4 octubre 2020'],
            [ '5 octubre 2020-11 octubre 2020'],
            [ '12 octubre 2020-18 octubre 2020'],
            [ '19 octubre 2020-25 octubre 2020'],
            [ '26 octubre 2020-1 noviembre 2020'],
            [ '2 noviembre 2020-8 noviembre 2020'],
            [ '9 noviembre 2020-15 noviembre 2020'],
            [ '16 noviembre 2020-22 noviembre 2020'],
            [ '23 noviembre 2020-29 noviembre 2020'],
            [ '30 noviembre 2020-6 diciembre 2020'],
            [ '7 diciembre 2020-13 diciembre 2020'],
            [ '14 diciembre 2020-20 diciembre 2020'],
            [ '21 diciembre 2020-27 diciembre 2020'],
            [ '28 diciembre 2020-3 enero 2021'],
        ];

        foreach ($weeks as $week){
            App\Models\Week::create([
                'week' => $week[0]
            ]);
        }
    }
}
