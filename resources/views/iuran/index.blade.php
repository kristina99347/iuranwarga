@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Data Iuran Kas</h3>
    <a href="{{ route('iuran.create') }}" class="btn btn-success mb-3">+ Tambah Iuran</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Warga</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($iurans as $iuran)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $iuran->warga->nama ?? '-' }}</td>
                <td>{{ $iuran->tanggal }}</td>
                <td>{{ number_format($iuran->jumlah,0,',','.') }}</td>
                <td>{{ $iuran->keterangan }}</td>
                <td>
                    <a href="{{ route('iuran.edit', $iuran->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('iuran.destroy', $iuran->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data iuran</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
