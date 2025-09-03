@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Kategori Iuran</h2>
    <ul>
        @foreach($kategori as $k)
            <li>{{ $k->nama_kategori }}</li>
        @endforeach
    </ul>
</div>
@endsection
