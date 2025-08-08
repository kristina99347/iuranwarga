<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    // ✅ Tampilkan semua data warga
    public function index()
    {
        $wargas = Warga::all();
        return view('warga.index', compact('wargas'));
    }

    // ✅ Form tambah data warga
    public function create()
    {
        return view('warga.create');
    }

    // ✅ Simpan data warga
    public function store(Request $request)
    {
        $request->validate([
            'nama'       => 'required',
            'alamat'     => 'required',
            'nohp'       => 'required',
            'pembayaran' => 'nullable|numeric', // tambahkan pembayaran
        ]);

        Warga::create($request->only(['nama', 'alamat', 'nohp', 'pembayaran']));

        return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan.');
    }

    // ✅ Form edit data warga
    public function edit($id)
    {
        $warga = Warga::findOrFail($id);
        return view('warga.edit', compact('warga'));
    }

    // ✅ Update data warga
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'       => 'required',
            'alamat'     => 'required',
            'nohp'       => 'required',
            'pembayaran' => 'nullable|numeric',
        ]);

        $warga = Warga::findOrFail($id);
        $warga->update($request->only(['nama', 'alamat', 'nohp', 'pembayaran']));

        return redirect()->route('warga.index')->with('success', 'Data warga berhasil diperbarui.');
    }

    // ✅ Hapus data warga
    public function destroy($id)
    {
        $warga = Warga::findOrFail($id);
        $warga->delete();

        return redirect()->route('warga.index')->with('success', 'Data warga berhasil dihapus.');
    }
}
