<?php

namespace App\Http\Controllers;

use App\Models\Keterangan;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_semester = Semester::createSemester();
        $keterangan = Keterangan::all();
        return view('pages.admin.semester.index', compact('kode_semester'))->with([
            'keterangan'   =>  $keterangan
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
            'kode_semester'     => $request->input('kode_semester'),
            'semester'          => $request->input('semester'),
            'kode_keterangan'   => $request->input('keterangan')
        ];

        Semester::create($data);
        return redirect()->route('semester.index');
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
            'kode_semester'      => $request->input('kode_semester'),
            'semester'           => $request->input('semester'),
            'kode_keterangan'    => $request->input('kode_keterangan'),
        ];
        $status = Semester::findOrFail($id);
        $status->update($data);
        return redirect()
            ->route('semester.index')
            ->with('message', 'Data Status Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $semester = Semester::findOrFail($id);
        $semester->delete();
        return back()->with('message_delete', 'Data Semester Sudah dihapus');
    }
}