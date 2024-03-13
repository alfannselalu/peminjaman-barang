<?php

namespace App\Http\Controllers;

use App\Models\Penyedia;
use Illuminate\Http\Request;

class PenyediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penyedia.index', [
            'penyedias' => Penyedia::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penyedia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_penyedia' => 'required|string',
            'alamat_penyedia' => 'required|string',
            'telepon_penyedia' => 'required|string',
        ]);
        
        Penyedia::create($validatedData);
        
        return redirect('/penyedia')->with('success', 'Penyedia berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penyedia $penyedia)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penyedia $penyedia, $id)
    {
        $penyedia = Penyedia::findOrFail($id);

        return view('penyedia.edit', compact('penyedia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penyedia $penyedia, $id)
    {
        $validatedData = $request->validate([
            'nama_penyedia' => 'required|string',
            'alamat_penyedia' => 'required|string',
            'telepon_penyedia' => 'required|string',
        ]);
        
        $penyedia = Penyedia::findOrFail($id);

        $penyedia->update($validatedData);
    
        return redirect('/penyedia')->with('success', 'Data Penyedia has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penyedia $penyedia, $id)
    {
        $penyedia = Penyedia::findOrFail($id);
        $penyedia->delete();

        return redirect('/penyedia')->with('success', 'Penyedia has been deleted!');
    }
}
