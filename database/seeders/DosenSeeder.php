<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            'kode_dosen'        => 'DSN00001',
            'nama_dosen'        => 'Muhamad Aripin',
            'email'             => 'emailpakaripin@gmail.com',
            'no_hp'             => '088312386838'
        ]);
        DB::table('dosens')->insert([
            'kode_dosen'        => 'DSN00002',
            'nama_dosen'        => 'M. Rigai Kamaludin',
            'email'             => 'muhammadrigai@gmail.com',
            'no_hp'             => '088312382123'
        ]);
        DB::table('dosens')->insert([
            'kode_dosen'        => 'DSN00003',
            'nama_dosen'        => 'Muhamad Farihin',
            'email'             => 'muhamadfarihin@gmail.com',
            'no_hp'             => '088312386832'
        ]);
        DB::table('dosens')->insert([
            'kode_dosen'        => 'DSN00004',
            'nama_dosen'        => 'Nabila Azzahra',
            'email'             => 'nabilaazzahra@gmail.com',
            'no_hp'             => '088312386843'
        ]);
        DB::table('dosens')->insert([
            'kode_dosen'        => 'DSN00005',
            'nama_dosen'        => 'Uyu Wachyu Ruchiyat',
            'email'             => 'uyuwahyu@gmail.com',
            'no_hp'             => '088312386893'
        ]);
        DB::table('dosens')->insert([
            'kode_dosen'        => 'DSN00006',
            'nama_dosen'        => 'Asep Alamsyah',
            'email'             => 'alamsyahasep69@gmail.com',
            'no_hp'             => '088312386893'
        ]);
        DB::table('dosens')->insert([
            'kode_dosen'        => 'DSN00007',
            'nama_dosen'        => 'Indah Permatasari',
            'email'             => 'indahpermata@gmail.com',
            'no_hp'             => '088312386893'
        ]);
    }
}