<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Iuran Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f8f9fa;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #74b9ff, #a29bfe);
        }
        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
        }
        .nav-link {
            color: #f1f1f1 !important;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #ffeaa7 !important;
        }

        /* Tombol */
        .btn-login {
            background: #ff7675;
            color: #fff;
            border-radius: 20px;
            transition: 0.3s;
        }
        .btn-login:hover {
            background: #e84393;
        }
        .btn-register {
            background: #00cec9;
            color: #fff;
            border-radius: 20px;
            transition: 0.3s;
        }
        .btn-register:hover {
            background: #0984e3;
        }

        /* Hero Content */
        .content {
            background: linear-gradient(135deg, #ffeaa7, #fab1a0, #a29bfe);
            padding: 120px 20px;
            text-align: center;
            color: #2d3436;
            border-radius: 0 0 50px 50px;
        }
        .content h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .content p {
            font-size: 1.2rem;
        }

        /* Fitur Cards */
        .feature-card {
            border-radius: 20px;
            color: #fff;
            padding: 40px 20px;
            margin-bottom: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
            background: linear-gradient(135deg, #6c5ce7, #00cec9);
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        /* Section Testimoni */
        .testimonial-card {
            background: linear-gradient(135deg, #fd79a8, #e17055);
            color: #fff;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .testimonial-card:hover {
            transform: scale(1.03);
        }

        /* Footer */
        footer {
            background: linear-gradient(90deg, #74b9ff, #a29bfe);
            color: #fff;
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

    <!-- Section Fitur -->
    <div class="container my-5">
        <h2 class="text-center mb-5" style="font-weight:bold;">Fitur Unggulan</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="feature-card h-100">
                    <h4>Kelola Warga</h4>
                    <p>Tambah, edit, dan hapus data warga dengan mudah dan aman.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card h-100" style="background: linear-gradient(135deg, #ff9ff3, #feca57);">
                    <h4>Catat Iuran</h4>
                    <p>Mencatat semua iuran secara otomatis dan transparan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card h-100" style="background: linear-gradient(135deg, #00b894, #55efc4);">
                    <h4>Laporan & Statistik</h4>
                    <p>Lihat laporan dan statistik iuran secara real-time.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Testimoni -->
    <div class="py-5" style="background: #f1f2f6;">
        <div class="container">
            <h2 class="text-center mb-5" style="font-weight:bold;">Apa Kata Warga</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="testimonial-card">
                        <p>"Sistem ini sangat membantu kami untuk mencatat iuran RT. Sangat mudah digunakan dan jelas laporannya!"</p>
                        <p class="text-end"><strong>- Budi Santoso</strong></p>
                    </div>
                    <div class="testimonial-card">
                        <p>"Transparansi iuran membuat warga lebih percaya dan aktif berpartisipasi."</p>
                        <p class="text-end"><strong>- Siti Aminah</strong></p>
                    </div>
                </div>
            </div>
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
