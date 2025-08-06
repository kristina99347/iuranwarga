@extends('layouts.app')

@section('title', 'Data Warga')

@section('content')
    <h3>Data Warga</h3>
    <ul>
        @foreach ($wargas as $warga)
            <li>{{ $warga->name }}</li>
        @endforeach
    </ul>
@endsection
