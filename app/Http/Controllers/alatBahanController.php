<?php

namespace App\Http\Controllers;

use App\Models\alatBahan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class alatBahanController extends Controller
{
    public function index() 
    {
        return view('alatBahan.index', [
            'alatBahans' => alatBahan::all()
        ]);
    }

    public function create()
    {
        return view('alatBahan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|string',
            'spesifikasi' => 'required|string',
            'lokasi' => 'required|string',
            'kondisi' => 'required|string',
            'jumlah_barang' => 'required',
            'sumber_dana' => 'required|string',
            'image' => 'required|image',
        ]);
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('barang-photos', 'public');
            $validatedData['image'] = $imagePath;
        }
        
        alatBahan::create($validatedData);
        
        return redirect('/alatBahan')->with('success', 'Sepatu berhasil ditambahkan!');
    }

    public function edit(alatBahan $alatBahan, $id)
    {
        $alatBahan = alatBahan::findOrFail($id);

        return view('alatBahan.edit', compact('alatBahan'));
    }

    public function update(Request $request, alatBahan $alatBahan, $id)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|string',
            'spesifikasi' => 'required|string',
            'lokasi' => 'required|string',
            'kondisi' => 'required|string',
            'jumlah_barang' => 'required',
            'sumber_dana' => 'required|string',
            'image' => 'required|image',
        ]);
    
        $alatBahan = alatBahan::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('barang-photos', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        $alatBahan->update($validatedData);
    
        return redirect('/alatBahan')->with('success', 'Data Sepatu has been updated!');
    }

    public function delete(alatBahan $alatBahan, $id)
    {
        $alatBahan = alatBahan::findOrFail($id);
        $alatBahan->delete();

        return redirect('/alatBahan')->with('success', 'Sepatu has been deleted!');
    }
}
