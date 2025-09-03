@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Officer</h3>
    <form action="{{ route('officer.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('officer.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
