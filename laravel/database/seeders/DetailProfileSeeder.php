<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '085123456789',
            'ttl' => '2003-11-26',
            'foto' => 'picture.png'
        ]);
    }
}
?>