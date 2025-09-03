@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Warga</h2>
    <form action="{{ route('warga.update', $warga->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $warga->nama }}" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $warga->alamat }}" required>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="nohp" class="form-control" value="{{ $warga->nohp }}" required>
        </div>

        <div class="mb-3">
            <label>Pembayaran</label>
            <input type="number" name="pembayaran" class="form-control" value="{{ $warga->pembayaran }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
