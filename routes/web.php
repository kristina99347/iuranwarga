<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController; // ✅ tambahkan ini

// Route halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// ✅ Route login via controller
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
 
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
