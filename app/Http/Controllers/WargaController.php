<?php

namespace App\Http\Controllers;

use App\Models\User;

class WargaController extends Controller
{
    public function index()
    {
        $wargas = User::where('level', 'warga')->get();
        return view('warga.index', compact('wargas'));
    }
}
