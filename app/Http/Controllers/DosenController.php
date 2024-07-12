<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $kode_dosen = Dosen::createDosen();
        return view('pages.dosen.index', compact('kode_dosen'));
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
            'kode_dosen'    => $request->input('kode_dosen'),
            'nama_dosen'    => $request->input('nama_dosen'),
            'email'         => $request->input('email'),
            'no_hp'         => $request->input('no_hp')
        ];
        Dosen::create($data);
        return redirect()->route('dosen.index');
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
            'kode_dosen'    => $request->input('kode_dosen'),
            'nama_dosen'    => $request->input('nama_dosen'),
            'email'         => $request->input('email'),
            'no_hp'         => $request->input('no_hp')
        ];
        $status = Dosen::findOrFail($id);
            $status->update($data);
            return redirect()
                ->route('dosen.index')
                ->with('message', 'Data Status Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}