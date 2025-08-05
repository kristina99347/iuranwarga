<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Iuran Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar, footer {
            background-color: #cceeff; /* biru muda */
        }
        .navbar-brand {
            color: #d63384 !important; /* pink tua */
            font-weight: bold;
        }
        .nav-link {
            color: #d63384 !important;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        .btn-login, .btn-register {
            border-radius: 10px;
            padding: 6px 16px;
        }
        .btn-login {
            background-color: #ffc0cb; /* pink muda */
            color: #fff;
        }
        .btn-login:hover {
            background-color: #ff99bb;
        }
        .btn-register {
            background-color: #add8e6; /* biru muda */
            color: #fff;
        }
        .btn-register:hover {
            background-color: #91cbe6;
        }
        .content {
            background-color: #ffe4ec; /* pink muda */
            padding: 100px 20px;
            text-align: center;
        }
        .content h1 {
            color: #007bff;
            font-size: 2.5rem;
        }
        .content p {
            color: #d63384;
            font-size: 1.1rem;
        }
        footer {
            color: #d63384;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">IuranWarga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-login ms-3" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-register ms-2" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="content">
        <div class="container">
            <h1>Selamat Datang di Sistem Iuran Warga</h1>
            <p>Kelola iuran RT dengan mudah, cepat, dan transparan.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">© {{ date('Y') }} IuranWarga. Hak cipta dilindungi.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
