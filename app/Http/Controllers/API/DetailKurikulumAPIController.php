<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kurikulum;
use Illuminate\Http\Request;

class DetailKurikulumAPIController extends Controller
{
    public function get_all()
    {
        $kurikulum = Kurikulum::with(['semester'])->get();
        return response()->json([
            'kurikulum' => $kurikulum,
        ]);
    }
}