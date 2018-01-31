<?php

use App\TechCampYear;
use Illuminate\Database\Seeder;

class TechCampYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years = [
            [
                'year' => 2013
            ],

            [
                'year' => 2014
            ],

            [
                'year' => 2015
            ],

            [
                'year' => 2016
            ],

            [
                'year' => 2017
            ],

            [
                'year' => 2018
            ]
        ];

        foreach ($years as $year){
            TechCampYear::create($year);
        }
    }
}
