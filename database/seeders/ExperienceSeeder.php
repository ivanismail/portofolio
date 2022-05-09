<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // insert data ke table exp
         DB::table('experiences')->insert([
        	['title' => 'Web & VB.Net Developer',
            'company' => 'Cindy Group',
            'address' => 'Jakarta',
        	'from' => '2011-06-30',
        	'to' => '2021-03-01',
            'description' => 'Membuat dan maintenance aplikasi sesuai kebutuhan perusahaan'],

            ['title' => 'Mobile Flutter Developer',
            'company' => 'PT. Majapahit Teknologi Nusantara',
            'address' => 'Jakarta',
        	'from' => '2021-03-01',
        	'to' => '2022-05-31',
            'description' => 'Membuat dan maintenance aplikasi sesuai kebutuhan client']
        ]);
    }
}
