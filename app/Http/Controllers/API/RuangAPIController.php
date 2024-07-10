<?php

namespace App\Http\Controllers\API;

use App\Models\Ruang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuangAPIController extends Controller
{
    public function get_all()
    {
        $ruang = Ruang::all();
        return response()->json([
            'ruang' => $ruang,
        ]);
    }
}