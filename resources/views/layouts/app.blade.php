<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .card:hover { transform: translateY(-5px); transition: all 0.3s ease; }
        .card .card-title { font-size: 2rem; font-weight: bold; }
        .card-text { font-size: 1rem; font-weight: 500; }
        .nav-link { transition: all 0.2s; }
        .nav-link:hover { background-color: #0d6efd; border-radius: 5px; }
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <nav class="bg-dark text-white vh-100 p-3" style="width: 220px;">
        <h4 class="text-center mb-4">Dashboard</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('dashboard') }}" class="nav-link text-white {{ request()->routeIs('dashboard') ? 'bg-primary rounded' : '' }}">
                    <i class="fas fa-home me-2"></i> Beranda
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('warga.index') }}" class="nav-link text-white {{ request()->routeIs('warga.*') ? 'bg-primary rounded' : '' }}">
                    <i class="fas fa-users me-2"></i> Data Warga
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('iuran.index') }}" class="nav-link text-white {{ request()->routeIs('iuran.*') ? 'bg-primary rounded' : '' }}">
                    <i class="fas fa-money-bill-wave me-2"></i> Iuran Kas
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('pembayaran.index') }}" class="nav-link text-white {{ request()->routeIs('pembayaran.*') ? 'bg-primary rounded' : '' }}">
                    <i class="fas fa-credit-card me-2"></i> Pembayaran
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('kategori.index') }}" class="nav-link text-white {{ request()->routeIs('kategori.*') ? 'bg-primary rounded' : '' }}">
                    <i class="fas fa-list me-2"></i> Kategori Iuran
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('officer.index') }}" class="nav-link text-white {{ request()->routeIs('officer.*') ? 'bg-primary rounded' : '' }}">
                    <i class="fas fa-user-shield me-2"></i> Data Officer
                </a>
            </li>
        </ul>
    </nav>

    <!-- Konten Utama -->
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>
</div>
</body>
</html>
