<?php

namespace Database\Seeders;

use Psy\Util\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jurusans')->insert([
            'kode_jurusan' => 'J00001',
            'jurusan' => 'Manajemen Informatika',
        ]);
        DB::table('jurusans')->insert([
            'kode_jurusan' => 'J00002',
            'jurusan' => 'Manajemen Keuangan Perbankan',
        ]);
        DB::table('jurusans')->insert([
            'kode_jurusan' => 'J00003',
            'jurusan' => 'Administrasi Bisnis',
        ]);
        DB::table('jurusans')->insert([
            'kode_jurusan' => 'J00004',
            'jurusan' => 'Manajemen Pemasaran',
        ]);
        DB::table('jurusans')->insert([
            'kode_jurusan' => 'J00005',
            'jurusan' => 'Teknik Otomotif'
        ]);
    }
}