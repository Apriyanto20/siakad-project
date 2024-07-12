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
        Schema::create('detail_kurikulums', function (Blueprint $table) {
            $table->id();
            $table->string('kode_detail_kurikulum');
            $table->string('kode_kurikulum');
            $table->string('kode_mata_kuliah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kurikulums');
    }
};