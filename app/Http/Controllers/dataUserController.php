<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class dataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dataUser.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataUser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'level' => 'required|string',
            'password' => 'required',
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('user-photos');
            $validatedData['image'] = $imagePath;
        }

        User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'level' => $validatedData['level'],
            'image' => $validatedData['image'],
            'password' => $validatedData['password'],
        ]);

        return redirect('/dataUser')->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, $id)
    {
        $dataUser = User::findOrFail($id);

        return view('dataUser.edit', compact('dataUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'level' => 'required',
            'image' => 'required',
        ]);
    
        $dataUser = User::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('user-photos', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        $dataUser->update($validatedData);
    
        return redirect('/dataUser')->with('success', 'Data User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, $id)
    {
        $dataUser = User::findOrFail($id);
        $dataUser->delete();

        return redirect('/dataUser')->with('success', 'User has been deleted!');
    }
}
