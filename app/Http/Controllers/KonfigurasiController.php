<?php

namespace App\Http\Controllers;

use App\Models\Keterangan;
use App\Models\Konfigurasi;
use App\Models\Kurikulum;
use App\Models\TahunAkademik;
use Illuminate\Http\Request;

class KonfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_konfigurasi = Konfigurasi::createKonfigurasi();
        $tahunAkademik = TahunAkademik::all();
        $keterangan = Keterangan::all();
        $kurikulum = Kurikulum::all();
        $tahunAkademik = TahunAkademik::all();
        return view('pages.admin.konfigurasi.index', compact('kode_konfigurasi'))->with([
            'tahunAkademik'   =>  $tahunAkademik,
            'keterangan'   =>  $keterangan,
            'kurikulum'   =>  $kurikulum,
        ]);
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
            'kode_konfigurasi'          => $request->input('kode_konfigurasi'),
            'kode_tahun_akademik'       => $request->input('akademik'),
            'kode_keterangan'           => $request->input('keterangan'),
            'kode_kurikulum'            => $request->input('kurikulum'),
        ];

        Konfigurasi::create($data);
        return redirect()->route('konfigurasi.index');
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