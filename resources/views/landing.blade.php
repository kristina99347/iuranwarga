@extends('layouts.app')

@section('content')
<section class="text-white text-center py-5 hero-section">
    <div class="container">
        <h1 class="display-5 fw-bold">Mencatat pemasukan, <br> pengeluaran, Iuran dan Arisan</h1>
        <p class="lead mt-3">Aplikasi keuangan digital pribadi, mencatat pemasukan, biaya / pengeluaran,<br>
        kartu iuran dan arisan dengan mudah</p>

        <div class="d-flex justify-content-center mt-4">
            <a href="#"><img src="{{ asset('assets/img/google-play-badge.png') }}" alt="Google Play" class="me-3" width="180"></a>
            <a href="#"><img src="{{ asset('assets/img/app-store-badge.png') }}" alt="App Store" width="160"></a>
        </div>
    </div>
</section>
@endsection
