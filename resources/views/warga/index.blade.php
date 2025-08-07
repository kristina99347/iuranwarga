@extends('layouts.app')

@section('title', 'Data Warga')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Data Warga</h4>
        <a href="{{ route('warga.create') }}" class="btn btn-success btn-sm float-end">
            <i class="fas fa-plus"></i> Tambah Warga
        </a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($wargas as $index => $warga)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $warga->nama }}</td>
                        <td>{{ $warga->alamat }}</td>
                        <td>{{ $warga->nohp }}</td>
                        <td>
                            <a href="{{ route('warga.edit', $warga->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <form action="{{ route('warga.destroy', $warga->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data warga.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection                     
