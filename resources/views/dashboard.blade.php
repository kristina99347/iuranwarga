@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4 fw-bold text-primary">Aplikasi Iuran Kas</h3>

    <div class="row g-4">
        <!-- Data Warga -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100 text-center bg-success text-white">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-users fa-2x mb-3"></i>
                    <h2 class="card-title">{{ $jumlahWarga ?? 0 }}</h2>
                    <p class="card-text">Data Warga</p>
                </div>
                <div class="card-footer bg-transparent border-0 text-center">
                    <a href="{{ route('warga.index') }}" class="btn btn-light btn-sm">
                        Lihat Data <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Iuran Kas -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100 text-center bg-primary text-white">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-money-bill-wave fa-2x mb-3"></i>
                    <h2 class="card-title">{{ $jumlahIuran ?? 0 }}</h2>
                    <p class="card-text">Iuran Kas</p>
                </div>
                <div class="card-footer bg-transparent border-0 text-center">
                    <a href="{{ route('iuran.index') }}" class="btn btn-light btn-sm">
                        Lihat Data <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pembayaran -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100 text-center bg-warning text-dark">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-credit-card fa-2x mb-3"></i>
                    <h2 class="card-title">{{ $jumlahPembayaran ?? 0 }}</h2>
                    <p class="card-text">Pembayaran</p>
                </div>
                <div class="card-footer bg-transparent border-0 text-center">
                    <a href="{{ route('pembayaran.index') }}" class="btn btn-dark btn-sm">
                        Lihat Data <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Data Officer -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100 text-center bg-danger text-white">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-user-shield fa-2x mb-3"></i>
                    <h2 class="card-title">{{ $jumlahOfficer ?? 0 }}</h2>
                    <p class="card-text">Data Officer</p>
                </div>
                <div class="card-footer bg-transparent border-0 text-center">
                    <a href="{{ route('officer.index') }}" class="btn btn-light btn-sm">
                        Lihat Data <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }
    .card .card-title {
        font-size: 2rem;
        font-weight: bold;
    }
    .card-text {
        font-size: 1rem;
        font-weight: 500;
    }
</style>
@endsection
