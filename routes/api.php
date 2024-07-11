<?php

use App\Http\Controllers\API\KelasAPIController as APIKelasAPIController;
use App\Http\Controllers\API\RuangAPIController;
use App\Http\Controllers\KelasAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ruang', [RuangAPIController::class, 'get_all'])->name('ruang.get');
Route::get('/kelas', [APIKelasAPIController::class, 'get_all'])->name('kelas.get');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');