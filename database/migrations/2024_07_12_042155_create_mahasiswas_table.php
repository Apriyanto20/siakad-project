<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jk');
            $table->string('dusun');
            $table->string('rtrw');
            $table->string('keluarahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('kode_pos');
            $table->integer('no_hp');
            $table->string('pendidikan_terakhir');
            $table->string('asal_sekolah');
            $table->string('jurusan_sekolah');
            $table->integer('tahun_lulus');
            $table->integer('kode_kelas');
            $table->integer('tahun_angkatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};