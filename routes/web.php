<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return 'Halaman Login Sementara';
})->name('login');
