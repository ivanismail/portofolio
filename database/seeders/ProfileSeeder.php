<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table profile
        DB::table('profiles')->insert([
        	'name' => 'Ivan Ismail',
        	'phone_number' => '+62 8211-303-2503',
        	'email' => 'ivanismail2@gmail.com',
        	'city' => 'Bekasi',
            'province' => 'Jawa Barat',
            'photo' => '',
            'twitter' => 'https://twitter.com/ivanismail2',
            'facebook' => 'https://www.facebook.com/ivanismailrespect',
            'linked' => 'https://www.linkedin.com/in/ivan-ismail-163840200/',
            'instagram' => 'https://www.instagram.com/ivanismail2/',
            'start_experience' => 2017
        ]);
    }
}
