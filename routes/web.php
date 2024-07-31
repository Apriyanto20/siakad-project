<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KeteranganController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\TahunAkademikController;
use App\Models\Kelas;
use App\Models\Konfigurasi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('ruang', RuangController::class)->middleware(['auth']);
Route::resource('kelas', KelasController::class)->middleware(['auth']);
Route::resource('jurusan', JurusanController::class)->middleware(['auth']);
Route::resource('dosen', DosenController::class)->middleware(['auth']);
Route::resource('mahasiswa', MahasiswaController::class)->middleware(['auth']);
Route::resource('akademik', TahunAkademikController::class)->middleware(['auth']);
Route::resource('keterangan', KeteranganController::class)->middleware(['auth']);
Route::resource('kurikulum', KurikulumController::class)->middleware(['auth']);
Route::resource('konfigurasi', KonfigurasiController::class)->middleware(['auth']);
Route::resource('semester', SemesterController::class)->middleware(['auth']);
Route::resource('matkul', MataKuliahController::class)->middleware(['auth']);

require __DIR__.'/auth.php';