<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 4; $i++){
 
    	      // insert data ke table skill menggunakan Faker
    		DB::table('skills')->insert([
    			'skill_name' => $faker->jobTitle,
    			'percent' => $faker->numberBetween(60,85),
    		]);
 
    	}
    }
}
