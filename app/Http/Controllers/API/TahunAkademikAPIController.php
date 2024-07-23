<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TahunAkademik;
use Illuminate\Http\Request;

class TahunAkademikAPIController extends Controller
{
    public function get_all()
    {
        $akademik = TahunAkademik::all();
        return response()->json([
            'akademik' => $akademik,
        ]);
    }
}