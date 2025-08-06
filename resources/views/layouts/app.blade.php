<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Iuran Warga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Warga</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Iuran Kas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Laporan</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-3">
        @yield('content')
    </main>

    <footer class="text-center mt-5 mb-3 text-muted">
        © 2021 <strong>Yeremia Raul Andreas</strong>. All rights reserved.
    </footer>
</body>
</html>  