<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal mahasiswa ITS dan proyek Agentic AI K3 Laboratorium">
    <title>@yield('title', 'Portal Mahasiswa ITS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark site-navbar sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}">
                <span class="brand-mark"><i class="bi bi-stars"></i></span>
                ITS<span class="brand-dot">.</span>Portal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('mahasiswa', '5025241234') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('hitung-ipk.form') }}">Kalkulator IPK</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-sm btn-warning fw-semibold px-3" href="{{ route('agent') }}"><i class="bi bi-cpu me-1"></i> Agentic AI</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer py-4 mt-5">
        <div class="container d-flex flex-column flex-md-row justify-content-between gap-2 small">
            <span><i class="bi bi-mortarboard-fill me-1"></i> Portal Mahasiswa Institut Teknologi Sepuluh Nopember</span>
            <span>Belajar. Berkarya. Berdampak.</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
