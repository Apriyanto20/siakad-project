<?php

use App\Http\Controllers\API\DosenAPIController;
use App\Http\Controllers\API\JurusanAPIController;
use App\Http\Controllers\API\KelasAPIController as APIKelasAPIController;
use App\Http\Controllers\API\keteranganAPIController;
use App\Http\Controllers\API\keteranganteranganAPIController;
use App\Http\Controllers\API\KonfigurasiAPIController;
use App\Http\Controllers\API\KurikulumAPIController;
use App\Http\Controllers\API\MahasiswaAPIController;
use App\Http\Controllers\API\MataKuliahAPIController;
use App\Http\Controllers\API\RuangAPIController;
use App\Http\Controllers\API\SemesterAPIController;
use App\Http\Controllers\API\TahunAkademikAPIController;
use App\Http\Controllers\KelasAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ruang', [RuangAPIController::class, 'get_all'])->name('ruang.get');
Route::get('/kelas', [APIKelasAPIController::class, 'get_all'])->name('kelas.get');
Route::get('/jurusan', [JurusanAPIController::class, 'get_all'])->name('jurusan.get');
Route::get('/dosen', [DosenAPIController::class, 'get_all'])->name('dosen.get');
Route::get('/mahasiswa', [MahasiswaAPIController::class, 'get_all'])->name('mahasiswa.get');
Route::get('/akademik', [TahunAkademikAPIController::class, 'get_all'])->name('akademik.get');
Route::get('/keterangan', [keteranganAPIController::class, 'get_all'])->name('keterangan.get');
Route::get('/kurikulum', [KurikulumAPIController::class, 'get_all'])->name('kurikulum.get');
Route::get('/konfigurasi', [KonfigurasiAPIController::class, 'get_all'])->name('konfigurasi.get');
Route::get('/semester', [SemesterAPIController::class, 'get_all'])->name('semester.get');
Route::get('/matkul', [MataKuliahAPIController::class, 'get_all'])->name('matkul.get');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');