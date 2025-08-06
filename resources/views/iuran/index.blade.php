@extends('layouts.app')

@section('title', 'Data Iuran')

@section('content')
    <h3>Data Iuran Kas</h3>
    <ul>
        @foreach ($iurans as $iuran)
            <li>{{ $iuran->keterangan }} - Rp{{ number_format($iuran->jumlah, 0, ',', '.') }}</li>
        @endforeach
    </ul>
@endsection
p