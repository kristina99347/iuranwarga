<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahWarga = User::where('level', 'warga')->count();
        $jumlahIuran = Payment::count();

        return view('dashboard', compact('jumlahWarga', 'jumlahIuran'));
    }
}
