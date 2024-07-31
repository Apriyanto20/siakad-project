<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahAPIController extends Controller
{
    public function get_all()
    {
        $matkul = MataKuliah::with(['semester'])->get();
        return response()->json([
            'matkul' => $matkul,
        ]);
    }
}