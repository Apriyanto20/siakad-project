<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Keterangan;
use App\Models\keteranganterangan;
use Illuminate\Http\Request;

class keteranganAPIController extends Controller
{
    public function get_all()
    {
        $keterangan = Keterangan::all();
        return response()->json([
            'keterangan' => $keterangan,
        ]);
    }
}