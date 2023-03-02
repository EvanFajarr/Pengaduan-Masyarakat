<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LokasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasi_15467')->insert([
            'kecamatan'=>'pandak',
        ]);
        DB::table('lokasi_15467')->insert([
            'kecamatan'=>'bantul',
        ]);
        DB::table('lokasi_15467')->insert([
            'kecamatan'=>'srandakan',
        ]);
        DB::table('lokasi_15467')->insert([
            'kecamatan'=>'sewon',
        ]);
        DB::table('lokasi_15467')->insert([
            'kecamatan'=>'pajangan',
        ]);
        DB::table('lokasi_15467')->insert([
            'kecamatan'=>'bambanglipuro',
        ]);
        DB::table('lokasi_15467')->insert([
            'kecamatan'=>'imogiri',
        ]);
        DB::table('lokasi_15467')->insert([
            'kecamatan'=>'sanden',
        ]);
    }
}
