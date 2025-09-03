@extends('layouts.app')

@section('title', 'Tambah Pembayaran')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Tambah Pembayaran</h4>

    <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Pilih Warga -->
        <div class="form-group mb-3">
            <label for="warga_id">Warga</label>
            <select name="warga_id" id="warga_id" class="form-control" required>
                <option value="">-- Pilih Warga --</option>
                @foreach ($warga as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>

        <!-- Pilih Kategori Iuran -->
        <div class="form-group mb-3">
            <label for="kategori_iuran_id">Kategori Iuran</label>
            <select name="kategori_iuran_id" id="kategori_iuran_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($kategoriIuran as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tanggal Bayar -->
        <div class="form-group mb-3">
            <label for="tanggal_bayar">Tanggal Bayar</label>
            <input type="date" name="tanggal_bayar" id="tanggal_bayar" class="form-control" required>
        </div>

        <!-- Jumlah -->
        <div class="form-group mb-3">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" required>
        </div>

        <!-- Metode Bayar -->
        <div class="form-group mb-3">
            <label for="metode_bayar">Metode Bayar</label>
            <select name="metode_bayar" id="metode_bayar" class="form-control" required>
                <option value="cash">Cash</option>
                <option value="transfer">Transfer</option>
            </select>
        </div>

        <!-- Bukti Bayar -->
        <div class="form-group mb-3">
            <label for="bukti_bayar">Bukti Bayar (opsional)</label>
            <input type="file" name="bukti_bayar" id="bukti_bayar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pembayaran.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
