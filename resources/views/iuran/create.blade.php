@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Iuran</h3>
    <form action="{{ route('iuran.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Warga</label>
            <select name="warga_id" class="form-control">
                @foreach ($wargas as $warga)
                    <option value="{{ $warga->id }}">{{ $warga->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('iuran.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
