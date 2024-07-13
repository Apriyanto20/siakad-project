<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaAPIController extends Controller
{
    public function get_all()
    {
        $nim = Mahasiswa::with(['kelas'])->get();
        return response()->json([
            'nim' => $nim,
        ]);
    }
}