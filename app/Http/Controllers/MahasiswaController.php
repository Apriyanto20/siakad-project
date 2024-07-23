<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('pages.admin.mahasiswa.index', [
            'kelas' => $kelas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.mahasiswa.index', compact('nim'), [
            'kelas'         => Kelas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nim'                   => $request->input('nim'),
            'nik'                   => $request->input('nik'),
            'tempat_lahir'          => $request->input('tempat_lahir'),
            'tanggal_lahir'         => $request->input('tanggal_lahir'),
            'jk'                    => $request->input('jk'),
            'dusun'                 => $request->input('dusun'),
            'rtrw'                  => $request->input('rtrw'),
            'kelurahan'             => $request->input('kelurahan'),
            'kecamatan'             => $request->input('kecamatan'),
            'kota'                  => $request->input('kota'),
            'kode_pos'              => $request->input('kode_pos'),
            'no_hp'                 => $request->input('no_hp'),
            'pendidikan_terakhir'   => $request->input('pendidikan_terakhir'),
            'asal_sekolah'          => $request->input('asal_sekolah'),
            'jurusan_sekolah'       => $request->input('jurusan_sekolah'),
            'tahun_lulus'           => $request->input('tahun_lulus'),
            'kode_kelas'            => $request->input('sts'),
            'tahun_angkatan'        => $request->input('tahun_angkatan')
        ];

        Mahasiswa::create($data);
        return redirect()->route('mahasiswa.index');
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