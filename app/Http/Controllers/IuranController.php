<?php

namespace App\Http\Controllers;

use App\Models\Iuran; // Pastikan model Iuran sudah dibuat

class IuranController extends Controller
{
    public function index()
    {
        $iurans = Iuran::all();
        return view('iuran.index', compact('iurans'));
    }
}
