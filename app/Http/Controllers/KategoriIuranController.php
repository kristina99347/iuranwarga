<?php

namespace App\Http\Controllers;

use App\Models\KategoriIuran;

class KategoriIuranController extends Controller
{
    public function index()
    {
        $kategori = KategoriIuran::all();
        return view('kategori.index', compact('kategori'));
    }
}
