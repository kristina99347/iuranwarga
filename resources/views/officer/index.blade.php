@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Data Officer</h3>
    <a href="{{ route('officer.create') }}" class="btn btn-success mb-3">+ Tambah Officer</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($officers as $index => $officer)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $officer->name }}</td>
                    <td>{{ $officer->username }}</td>
                    <td>
                        <a href="{{ route('officer.edit', $officer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('officer.destroy', $officer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada data officer</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
