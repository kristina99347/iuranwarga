<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    // Menampilkan form register
    public function show()
    {
        return view('auth.register');
    }

    // Menyimpan data pendaftaran
    public function register(Request $request)
    {
        // Validasi form
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:50|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'nohp' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'level' => 'required|in:admin,warga',
        ]);

        // Simpan user baru
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nohp' => $request->nohp,
            'address' => $request->address,
            'level' => $request->level,
        ]);

        // Login otomatis setelah register
        Auth::login($user);

        // Redirect berdasarkan level
        if ($user->level === 'admin') {
            return redirect()->route('home')->with('success', 'Selamat datang Admin!');
        } else {
            return redirect()->route('home')->with('success', 'Selamat datang Warga!');
        }
    }
}
