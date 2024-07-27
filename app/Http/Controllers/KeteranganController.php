<?php

namespace App\Http\Controllers;

use App\Models\Keterangan;
use Illuminate\Http\Request;

class KeteranganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_keterangan = Keterangan::createketerangan();
        return view('pages.admin.keterangan.index', compact('kode_keterangan'));
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
            'kode_keterangan'      => $request->input('kode_keterangan'),
            'keterangan'           => $request->input('keterangan'),
        ];

        Keterangan::create($data);
        return redirect()->route('keterangan.index');
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
            'kode_keterangan'      => $request->input('kode_keterangan'),
            'keterangan'           => $request->input('keterangan'),
        ];
        $status = Keterangan::findOrFail($id);
        $status->update($data);
        return redirect()
            ->route('keterangan.index')
            ->with('message', 'Data Status Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keterangan = Keterangan::findOrFail($id);
        $keterangan->delete();
        return back()->with('message_delete', 'Data keterangan Sudah dihapus');
    }
}
