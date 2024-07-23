<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_kelas = Kelas::createKelas();
        $jurusan = Jurusan::all();
        return view('pages.admin.kelas.index', compact('kode_kelas'))->with([
            'jurusan'   =>  $jurusan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kelas.index', compact('kode_kelas'), [
            'jurusan'         => Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'kode_kelas' => $request->input('kode_kelas'),
            'kode_jurusan' => $request->input('jurusan'),
            'kelas' => $request->input('kelas')
        ];

        Kelas::create($data);
        return redirect()->route('kelas.index');
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
          'kode_kelas'      => $request->input('kode_kelas'),
          'kelas'           => $request->input('kelas'),
          'jurusan'         => Jurusan::all()
        ];
        $status = Kelas::findOrFail($id);
            $status->update($data);
            return redirect()
                ->route('kelas.index')
                ->with('message', 'Data Status Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return back()->with('message_delete','Data Kelas Sudah dihapus');
    }
}