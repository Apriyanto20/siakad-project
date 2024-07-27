<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumAPIController extends Controller
{
    public function get_all()
    {
        $kurikulum = Kurikulum::all();
        return response()->json([
            'kurikulum' => $kurikulum,
        ]);
    }
}