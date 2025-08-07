<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\IuranController;


// ✅ Route halaman utama (beranda, hanya jika login)
Route::get('/', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');

// ✅ Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('loginn');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ✅ Register
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// ✅ Semua route di bawah ini hanya bisa diakses jika user sudah login
Route::middleware('auth')->group(function () {

    // ✅ Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ✅ Warga - untuk card 'Data Warga' di dashboard
    Route::get('/warga', [WargaController::class, 'index'])->name('warga.index');

    // ✅ Iuran - untuk card 'Iuran Kas' di dashboard
    Route::get('/iuran', [IuranController::class, 'index'])->name('iuran.index');

});


    Route::get('/', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');
Route::get('/warga', [WargaController::class, 'index'])->name('warga.index');
Route::get('/warga/create', [WargaController::class, 'create'])->name('warga.create');
Route::post('/warga/store', [WargaController::class, 'store'])->name('warga.store');