<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;

class KonfigurasiAPIController extends Controller
{
    public function get_all()
    {
        $konfigurasi = Konfigurasi::with(['tahunAkademik', 'keterangan', 'kurikulum'])->get();
        return response()->json([
            'konfigurasi' => $konfigurasi,
        ]);
    }
}