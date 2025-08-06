@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">Aplikasi Iuran Warga</h2>

    <div class="row justify-content-center">
        <!-- Card: Data Warga -->
        <div class="col-md-5 mb-4">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <h3 class="card-title text-center">{{ $jumlahWarga ?? 0 }}</h3>
                    <p class="text-center">Data Warga</p>
                </div>
                <div class="card-footer text-center bg-transparent border-top-0">
                    <a href="{{ route('warga.index') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-arrow-circle-right"></i> Lihat Data
                    </a>
                </div>
            </div>
        </div>

        <!-- Card: Iuran Kas -->
        <div class="col-md-5 mb-4">
            <div class="card text-white bg-primary shadow">
                <div class="card-body">
                    <h3 class="card-title text-center">{{ $jumlahIuran ?? 0 }}</h3>
                    <p class="text-center">Iuran Kas</p>
                </div>
                <div class="card-footer text-center bg-transparent border-top-0">
                    <a href="{{ route('iuran.index') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-arrow-circle-right"></i> Lihat Data
                    </a>
                </div>
            </div>
        </div>
    </div>

    <p class="text-center mt-4 text-muted">
        &copy; {{ date('Y') }} <strong>Aplikasi Iuran Warga</strong>. All rights reserved.
    </p>
</div>
@endsection
