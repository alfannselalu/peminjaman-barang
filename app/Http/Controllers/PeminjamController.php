<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use App\Models\alatBahan;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjams = Peminjam::with('alatBahan')->get();

        return view('peminjam.index', compact('peminjams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peminjam.create', [
            'peminjams' => Peminjam::all(),
            'alatBahans' => alatBahan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'peminjam' => 'required|string',
            'alatBahan_id' => 'required',
            'kondisi' => 'required|string',
            'jml_barang' => 'required|numeric',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date',
        ]);

        Peminjam::create($validatedData);

        return redirect('/peminjaman')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjam $peminjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $peminjam = Peminjam::findOrFail($id);
    $alatBahans = alatBahan::all();

    return view('peminjam.edit', compact('peminjam', 'alatBahans'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'peminjam' => 'required|string',
            'alatBahan_id' => 'required',
            'kondisi' => 'required|string',
            'jml_barang' => 'required|numeric',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date',
        ]);

        $peminjam = Peminjam::findOrFail($id);
        $peminjam->update($validatedData);

        return redirect('/peminjaman')->with('success', 'Peminjam berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjam $peminjam, $id)
    {
        $peminjam = Peminjam::findOrFail($id);
        $peminjam->delete();

        return redirect('/peminjaman')->with('success', 'Peminjam has been deleted!');
    }
}
