<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KategoriIuranController;
use App\Http\Controllers\AdminIuranController;

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
Route::get('/warga/{id}/edit', [WargaController::class, 'edit'])->name('warga.edit');
Route::put('/warga/{id}', [WargaController::class, 'update'])->name('warga.update');
Route::delete('/warga/{id}', [WargaController::class, 'destroy'])->name('warga.destroy');



Route::resource('pembayaran', PembayaranController::class);



Route::resource('kategori', KategoriIuranController::class);

Route::resource('iuran', IuranController::class);



use App\Http\Controllers\OfficerController;

Route::resource('officer', OfficerController::class);





Route::get('/admin/beranda', [AdminController::class, 'index'])->name('beranda.admin');
Route::get('/warga/beranda', [WargaController::class, 'index'])->name('beranda.warga');
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Dashboard umum
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Dashboard khusus admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('beranda.admin');

// Dashboard khusus warga
Route::get('/warga/dashboard', [WargaController::class, 'index'])->name('beranda.warga');
