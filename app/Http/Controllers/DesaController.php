<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desas = Desa::all();
        return view ('Desa.masterDesa', compact('desas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $desas = Desa::all();
        return view ('Desa.createDesa', compact('desas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ambil informasi yang diiupload
        $foto = $request->file('foto');

        // rename
        $nama_foto = time() . "_" . $foto->getClientOriginalName();

        // proses upload
        $up_foto = './Template/img';
        $foto->move($up_foto, $nama_foto);

        Desa::create([
            'nama_desa' => $request->nama_desa,
            'nama_kecamatan' => $request->nama_kecamatan,
            'nama_kabupaten' => $request->nama_kabupaten,
            'foto' => $nama_foto,
        ]);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Desa $desa)
    {
        return view('Desa.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desa $desa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Desa $desa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desa $desa)
    {
        //
    }
}
