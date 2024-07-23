<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            'kode_kelas'        => 'K00001',
            'kode_jurusan'      => 'Manajemen Informatika',
            'kelas'             => 'MI23A',
        ]);
        DB::table('kelas')->insert([
            'kode_kelas'        => 'K00002',
            'kode_jurusan'      => 'Manajemen Informatika',
            'kelas'             => 'MI23B',
        ]);
        DB::table('kelas')->insert([
            'kode_kelas'        => 'K00003',
            'kode_jurusan'      => 'Manajemen Keuangan Perbankan',
            'kelas'             => 'MKP04',
        ]);
        DB::table('kelas')->insert([
            'kode_kelas'        => 'K00004',
            'kode_jurusan'      => 'Manajemen Pemasaran',
            'kelas'             => 'MP04',
        ]);
        DB::table('kelas')->insert([
            'kode_kelas'        => 'K00005',
            'kode_jurusan'      => 'Administrasi Bisnis',
            'kelas'             => 'AB17A',
        ]);
        DB::table('kelas')->insert([
            'kode_kelas'        => 'K00006',
            'kode_jurusan'      => 'Administrasi Bisnis',
            'kelas'             => 'AB17B',
        ]);
        DB::table('kelas')->insert([
            'kode_kelas'        => 'K00007',
            'kode_jurusan'      => 'Teknik Otomotif',
            'kelas'             => 'TO23',
        ]);
    }
}
