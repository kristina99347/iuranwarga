<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Tampilkan form login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Proses login user.
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        // coba login dengan username
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return $this->redirectBasedOnRole();
        }

        // coba login dengan name
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return $this->redirectBasedOnRole();
        }

        return back()->withErrors([
            'username' => 'Username / Nama atau password salah.',
        ])->onlyInput('username');
    }

    /**
     * Redirect berdasarkan role/level.
     */
    protected function redirectBasedOnRole()
    {
        $user = Auth::user();

        // pastikan kolomnya sesuai: role atau level
        if ($user->level === 'admin') {
            return redirect()->route('beranda.admin'); // pastikan route ada
        } elseif ($user->level === 'warga1') {
            return redirect()->route('beranda.warga'); // pastikan route ada
        }

        return redirect()->route('home');
    }

    /**
     * Logout user.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
