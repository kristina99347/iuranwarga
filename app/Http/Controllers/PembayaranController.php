<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Warga;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::with('warga')->get(); // tanpa kategori
        return view('pembayaran.index', compact('pembayaran'));
    }

  public function create()
{
    $warga = Warga::all();
    $kategoriIuran = Pembayaran::all(); // pakai nama yg sama dengan view
    return view('pembayaran.create', compact('warga', 'kategoriIuran'));
}

    public function store(Request $request)
    {
        $request->validate([
            'warga_id' => 'required',
            'tanggal_bayar' => 'required|date',
            'jumlah' => 'required|numeric',
            'metode_bayar' => 'required',
            'bukti_bayar' => 'nullable|image'
        ]);

        $data = $request->all();

        if ($request->hasFile('bukti_bayar')) {
            $data['bukti_bayar'] = $request->file('bukti_bayar')->store('bukti', 'public');
        }

        Pembayaran::create($data);

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil ditambahkan.');
    }
}
