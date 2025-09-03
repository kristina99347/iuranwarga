<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\KategoriIuran;
use App\Models\Payment;

class AdminController extends Controller
{
    public function index()
    {
        // contoh data statistik
        $totalUsers = User::count();
        $totalKategori = KategoriIuran::count();
        $totalPembayaran = Payment::sum('nominal');

        return view('admin.dashboard', compact('totalUsers', 'totalKategori', 'totalPembayaran'));
    }
}
