<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Iuran Warga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
        }
        .sidebar {
            min-width: 220px;
            max-width: 220px;
            background-color: #343a40;
            color: white;
            padding-top: 1rem;
        }
        .sidebar a {
            color: #ddd;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }
        .content {
            flex: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="px-3 text-white">Dashboard</h4>
        <a href="#"><i class="fas fa-home"></i> Home</a>
        <a href="#"><i class="fas fa-users"></i> Data Warga</a>
        <a href="#"><i class="fas fa-money-bill-wave"></i> Pembayaran</a>
        <a href="#"><i class="fas fa-list"></i> Kategori Iuran</a>
        <a href="#"><i class="fas fa-user-tie"></i> Data Officer</a>
        <a href="#"><i class="fas fa-file-alt"></i> Laporan</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
        <footer class="text-center mt-5 mb-3 text-muted">
            © 2025 <strong>Yeremia Raul Andreas</strong>. All rights reserved.
        </footer>
    </div>
</body>
</html>
