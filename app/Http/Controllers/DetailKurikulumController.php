<?php

namespace App\Http\Controllers;

use App\Models\DetailKurikulum;
use App\Models\DetailPresensi;
use Illuminate\Http\Request;

class DetailKurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_detail_kurikulum = DetailKurikulum::createkurikulum();
        return view('pages.admin.kurikulum.detail', compact('kode_detail_kurikulum'));
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
            'kode_detail_kurikulum'    => $request->input('kode_detail_kurikulum'),
            'kode_kurikulum'           => $request->input('kode_kurikulum'),
            'kode_mata_kuliah'         => $request->input('kode_mata_kuliah')
        ];

        DetailKurikulum::create($data);
        return redirect()->route('kurikulum.detail');
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
        $data = [
            'kode_detail_kurikulum'    => $request->input('kode_detail_kurikulum'),
            'kode_kurikulum'           => $request->input('kode_kurikulum'),
            'kode_mata_kuliah'         => $request->input('kode_mata_kuliah')
        ];
        $status = DetailKurikulum::findOrFail($id);
        $status->update($data);
        return redirect()
            ->route('kurikulum.detail')
            ->with('message', 'Data Status Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail_kurikulum = DetailKurikulum::findOrFail($id);
        $detail_kurikulum->delete();
        return back()->with('message_delete', 'Data Detail Kurikulum Sudah dihapus');
    }
}