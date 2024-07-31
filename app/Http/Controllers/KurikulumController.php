<?php
namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode_kurikulum = Kurikulum::createkurikulum();
        return view('pages.admin.kurikulum.index', compact('kode_kurikulum'));
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
            'kode_kurikulum'      => $request->input('kode_kurikulum'),
            'kurikulum'           => $request->input('kurikulum'),
            'tahun'               => $request->input('tahun')
        ];

        Kurikulum::create($data);
        return redirect()->route('kurikulum.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.admin.kurikulum.detail');
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
            'kode_kurikulum'      => $request->input('kode_kurikulum'),
            'kurikulum'           => $request->input('kurikulum'),
            'tahun'               => $request->input('tahun')
        ];
        $status = Kurikulum::findOrFail($id);
        $status->update($data);
        return redirect()
            ->route('kurikulum.index')
            ->with('message', 'Data Status Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->delete();
        return back()->with('message_delete', 'Data kurikulum Sudah dihapus');
    }
}