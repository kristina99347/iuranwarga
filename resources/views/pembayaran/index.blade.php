@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">Daftar Pembayaran</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mb-3">+ Tambah Pembayaran</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Warga</th>
                <th>Kategori</th>
                <th>Tanggal Bayar</th>
                <th>Jumlah</th>
                <th>Metode</th>
                <th>Bukti</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pembayaran as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->warga->nama }}</td>
                <td>{{ $p->kategori->nama_kategori }}</td>
                <td>{{ $p->tanggal_bayar }}</td>
                <td>Rp {{ number_format($p->jumlah, 0, ',', '.') }}</td>
                <td>{{ $p->metode_bayar }}</td>
                <td>
                    @if($p->bukti_bayar)
                        <a href="{{ asset('storage/'.$p->bukti_bayar) }}" target="_blank">Lihat</a>
                    @else
                        -
                    @endif
                </td>
                <td>
                    <a href="{{ route('pembayaran.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pembayaran.destroy', $p->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus pembayaran ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center">Belum ada pembayaran</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
