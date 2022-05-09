<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table project
        DB::table('projects')->insert([
            ['project_name' => 'HR System',
            'description' => 'Membuat Web & Aplikasi Desktop dengan VB.Net',
        	'client' => 'Cindy Group',
        	'from' => '2019-07-01',
        	'to' => '2019-12-31',
            'link' => 'https://apps.cindy.co.id/'],

        	['project_name' => 'Pexpress',
            'description' => 'Membuat Web & RestAPI Aplikasi Customer dengan Laravel',
        	'client' => 'PT. Rantai Sinergi Logistik',
        	'from' => '2022-01-01',
        	'to' => '2022-03-01',
            'link' => 'https://pexdemo.pexpress.id'],

            ['project_name' => 'Rencana Anggaran Biaya',
            'description' => 'Membuat Web Rencana Anggaran Biaya dengan Codeigniter',
        	'client' => 'PT. Mandala Mega Makmur',
        	'from' => '2021-03-01',
        	'to' => '2021-04-30',
            'link' => 'http://mandala.majapahit.id'],

            ['project_name' => 'PreMan',
            'description' => 'Aplikasi Market Place Asuransi',
        	'client' => 'PT. Mentari Teknologi Bermartabat',
        	'from' => '2021-04-01',
        	'to' => '2021-06-30',
            'link' => 'https://play.google.com/store/apps/details?id=id.preman'],

            ['project_name' => 'Honda Power ID - Toko',
            'description' => 'Aplikasi CRM untuk Dealer/Toko Honda Power Product Indonesia',
        	'client' => 'PT. Honda Power Product Indonesia',
        	'from' => '2021-07-01',
        	'to' => '2021-12-31',
            'link' => 'https://play.google.com/store/apps/details?id=id.co.hondapowerproducts.toko'],

            ['project_name' => 'Honda Power ID',
            'description' => 'Aplikasi CRM untuk Customer Honda Power Product Indonesia',
        	'client' => 'PT. Honda Power Product Indonesia',
        	'from' => '2021-07-01',
        	'to' => '2021-12-31',
            'link' => 'https://play.google.com/store/apps/details?id=id.co.hondapowerproducts.customer'],

            ['project_name' => 'SP DNIA Mobile',
            'description' => 'Aplikasi Serikat Pekerja Denso Indonesia Group',
        	'client' => 'PT. Denso Indonesia',
        	'from' => '2022-03-01',
        	'to' => '2022-04-30',
            'link' => 'https://play.google.com/store/apps/details?id=id.denso.spdnia'],
        ]);
    }
}
