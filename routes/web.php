<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController; // 
 use App\Http\Controllers\RegisterController; // ✅ tambahkan ini


// Route halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// ✅ Route login via controller
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
 
Route::get('/register', function () {
    return view('auth.register');
})->name('register');


// Tampilkan form register
Route::get('/register', [RegisterController::class, 'show'])->name('register');

// Proses form register
Route::post('/register', [RegisterController::class, 'register']);