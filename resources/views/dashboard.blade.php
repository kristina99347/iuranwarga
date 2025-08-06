@extends('layouts.app') {{-- Pastikan kamu sudah punya layout app.blade.php --}}

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Aplikasi Iuran Kas</h4>

    <div class="row">
        <!-- Data Warga -->
        <div class="col-md-6 mb-3">
            <div class="card text-white bg-success h-100">
                <div class="card-body">
                    <h2 class="card-title">{{ $jumlahWarga ?? 0 }}</h2>
                    <p class="card-text">Data Warga</p>
                </div>
                <div class="card-footer text-white">
                    <a href="{{ route('warga.index') }}" class="text-white text-decoration-none">
                        Lihat Data <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Iuran Kas -->
        <div class="col-md-6 mb-3">
            <div class="card text-white bg-primary h-100">
                <div class="card-body">
                    <h2 class="card-title">{{ $jumlahIuran ?? 0 }}</h2>
                    <p class="card-text">Iuran Kas</p>
                </div>
                <div class="card-footer text-white">
                    <a href="{{ route('iuran.index') }}" class="text-white text-decoration-none">
                        Lihat Data <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
