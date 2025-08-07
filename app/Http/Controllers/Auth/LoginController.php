<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

        $loginField = $request->input('username');
        $password = $request->input('password');

        // Coba login dengan kolom username
        if (Auth::attempt(['username' => $loginField, 'password' => $password])) {
            $request->session()->regenerate();
            return $this->redirectBasedOnRole();
        }

        // Coba login dengan kolom name
        if (Auth::attempt(['name' => $loginField, 'password' => $password])) {
            $request->session()->regenerate();
            return $this->redirectBasedOnRole();
        }

        return back()->withErrors([
            'username' => 'Username / Nama atau password salah.',
        ])->onlyInput('username');
    }

    /**
     * Redirect berdasarkan role.
     */
    protected function redirectBasedOnRole()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('beranda.admin');
        } elseif ($user->role === 'warga1') {
            return redirect()->route('beranda.warga');
        } else {
            return redirect()->route('home');
        }
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
