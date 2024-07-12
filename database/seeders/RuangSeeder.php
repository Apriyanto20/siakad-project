<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00001',
            'ruang'         => '201',
        ]);
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00002',
            'ruang'         => '202',
        ]);
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00003',
            'ruang'         => '203',
        ]);
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00004',
            'ruang'         => 'Aula',
        ]);
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00005',
            'ruang'         => 'LAB 1',
        ]);
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00006',
            'ruang'         => 'LAB 2',
        ]);
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00007',
            'ruang'         => 'LAB 3',
        ]);
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00008',
            'ruang'         => '301',
        ]);
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00009',
            'ruang'         => '302',
        ]);
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00010',
            'ruang'         => '303',
        ]);
        DB::table('ruangs')->insert([
            'kode_ruang'    => 'R00011',
            'ruang'         => '304',
        ]);
    }
}