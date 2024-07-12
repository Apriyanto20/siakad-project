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
        Schema::create('jadwal_pelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jadwal');
            $table->string('kode_sesi');
            $table->string('kode_detail_kurikulum');
            $table->string('kode_ruang');
            $table->string('kode_dosen');
            $table->string('kode_kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pelajarans');
    }
};