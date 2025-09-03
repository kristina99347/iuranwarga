<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function index()
    {
        // Ambil semua user dengan level officer
        $officers = User::where('level', 'officer')->get();

        return view('officer.index', compact('officers'));
    }

    public function create()
    {
        return view('officer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'officer',
        ]);

        return redirect()->route('officer.index')->with('success', 'Officer berhasil ditambahkan');
    }

    public function show(User $officer)
    {
        return view('officer.show', compact('officer'));
    }

    public function edit(User $officer)
    {
        return view('officer.edit', compact('officer'));
    }

    public function update(Request $request, User $officer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $officer->id,
        ]);

        $officer->update($request->all());

        return redirect()->route('officer.index')->with('success', 'Officer berhasil diperbarui');
    }

    public function destroy(User $officer)
    {
        $officer->delete();

        return redirect()->route('officer.index')->with('success', 'Officer berhasil dihapus');
    }
}
