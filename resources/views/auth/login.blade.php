<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Iuran Warga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header text-center bg-primary text-white">
                    <h4 class="mb-0">Login Iuran Warga</h4>
                </div>
                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                value="{{ old('email') }}" 
                                required 
                                autofocus
                            >
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input 
                                type="password" 
                                name="password" 
                                id="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                required
                            >
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </div>
                    </form>

                    <div class="mt-3 text-center">
                        <a href="{{ route('register') }}">Belum punya akun? Daftar</a>
                    </div>

                    {{-- Optional: Lupa password --}}
                    {{-- <div class="mt-2 text-center">
                        <a href="{{ route('password.request') }}">Lupa password?</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
