<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function index()
    {
        $warga_count = User::where('level', 'warga')->count();
        $payment_count = Payment::count();

        return view('dashboard', compact('warga_count', 'payment_count'));
    }
}
