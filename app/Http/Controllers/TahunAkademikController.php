<?php

namespace App\Http\Controllers;

use App\Models\TahunAkademik;
use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_tahun_akademik = TahunAkademik::createTahunAkademik();
        return view('pages.admin.tahunAK.index', compact('kode_tahun_akademik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'kode_tahun_akademik'      => $request->input('kode_tahun_akademik'),
            'tahun_akademik'           => $request->input('tahun_akademik')
        ];

        TahunAkademik::create($data);
        return redirect()->route('akademik.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
