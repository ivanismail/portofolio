<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table education
        DB::table('education')->insert([
        	['degree' => 'D3',
            'program_study' => 'Management Informatika',
        	'university' => 'Bina Sarana Informatika',
            'address' => 'Jatiwarigin, Jakarta',
        	'from' => '2013-01-01',
        	'to' => '2015-12-01',
            'description' => ''],

            ['degree' => 'S1',
            'program_study' => 'Sistem Informatika',
        	'university' => 'STIKOM Cipta Karya Infromatika',
            'address' => 'Jakarta',
        	'from' => '2016-01-01',
        	'to' => '2017-12-01',
            'description' => '']
        ]);
    }
}
