<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Iuran Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #fce4ec;"> <!-- pink muda -->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header text-center bg-info text-white">
                        <h4>Daftar Akun</h4>
                    </div>

                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan nama" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" name="password" class="form-control" placeholder="Buat kata sandi" required>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi kata sandi" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Daftar</button>
                        </form>
                    </div>

                    <div class="card-footer text-center">
                        Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
