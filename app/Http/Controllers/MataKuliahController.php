<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Models\Semester;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matkul = MataKuliah::createMatkul();
        $semester = Semester::all();
        return view('pages.admin.matkul.index', compact('matkul'))->with([
            'semester'   =>  $semester
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
            'kode_mata_kuliah'  => $request->input('kode_mata_kuliah'),
            'mata_kuliah'       => $request->input('mata_kuliah'),
            'sks'               => $request->input('sks'),
            'kode_semester'     => $request->input('semester'),
            'ebook'             => $request->input('ebook')
        ];

        MataKuliah::create($data);
        return redirect()->route('matkul.index');
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
            'kode_mata_kuliah'  => $request->input('kode_mata_kuliah'),
            'mata_kuliah'       => $request->input('mata_kuliah'),
            'sks'               => $request->input('sks'),
            'kode_semester'     => $request->input('semester'),
            'ebook'             => $request->input('ebook')
        ];
        MataKuliah::create($data);
        return redirect()->route('matkul.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mata_kuliah = MataKuliah::findOrFail($id);
        $mata_kuliah->delete();
        return back()->with('message_delete', 'Data Mata Kuliah Sudah dihapus');
    }
}