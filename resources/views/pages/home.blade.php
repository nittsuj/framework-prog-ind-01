@extends('layouts.app')

@section('title', 'Beranda | Portal Mahasiswa ITS')

@section('content')
<section class="hero-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="eyebrow"><i class="bi bi-lightning-charge-fill me-1"></i> Portal mahasiswa ITS</span>
                <h1 class="display-4 fw-bold mt-3 mb-4">Masa depan teknologi dimulai dari <span class="text-accent">kampus.</span></h1>
                <p class="lead text-secondary mb-4">Selamat datang, Arek ITS. Ruang kecil untuk mengenal profil, menghitung capaian akademik, dan menjelajahi gagasan Agentic AI untuk laboratorium yang lebih aman.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-primary btn-lg px-4" href="{{ route('dashboard.agent', 'K3-Laboratorium') }}"><i class="bi bi-arrow-up-right-circle me-2"></i>Jelajahi proyek AI</a>
                    <a class="btn btn-outline-dark btn-lg px-4" href="{{ route('dashboard.mahasiswa', '5025211001') }}">Lihat profil</a>
                </div>
                <div class="d-flex gap-4 mt-5 small text-secondary">
                    <span><i class="bi bi-shield-check text-accent me-1"></i> Aman</span>
                    <span><i class="bi bi-stars text-accent me-1"></i> Inovatif</span>
                    <span><i class="bi bi-people text-accent me-1"></i> Kolaboratif</span>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="profile-panel position-relative">
                    <div class="orbit orbit-one"></div><div class="orbit orbit-two"></div>
                    <div class="profile-icon"><i class="bi bi-mortarboard-fill"></i></div>
                    <p class="text-uppercase small fw-bold text-accent mb-2">Profil singkat</p>
                    <h2 class="h3 fw-bold">Mahasiswa ITS</h2>
                    <p class="text-secondary mb-4">Pembelajar yang siap mengubah rasa ingin tahu menjadi solusi teknologi yang berguna.</p>
                    <button class="btn btn-dark w-100" type="button" data-bs-toggle="collapse" data-bs-target="#motivation" aria-expanded="false" aria-controls="motivation"><i class="bi bi-chat-square-heart me-2"></i>Tampilkan motivasi</button>
                    <div class="collapse" id="motivation"><div class="motivation-note mt-3">Terus berkarya, berkolaborasi, dan gunakan teknologi untuk menyelesaikan masalah nyata.</div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container pb-4">
    <div class="row g-3">
        <div class="col-md-4"><a class="mini-card h-100 d-block text-decoration-none" href="{{ route('dashboard.mahasiswa', '5025211001') }}"><i class="bi bi-person-badge"></i><h3 class="h5 mt-3">Profil mahasiswa</h3><p class="text-secondary small mb-0">Akses identitas dan ringkasan data mahasiswa berdasarkan NRP.</p><span class="card-link mt-3">Buka profil <i class="bi bi-arrow-up-right"></i></span></a></div>
        <div class="col-md-4"><a class="mini-card h-100 d-block text-decoration-none" href="{{ route('dashboard.hitung-ipk.form') }}"><i class="bi bi-calculator"></i><h3 class="h5 mt-3">Hitung IPK</h3><p class="text-secondary small mb-0">Masukkan IP dua semester dan lihat hasil rata-ratanya.</p><span class="card-link mt-3">Mulai hitung <i class="bi bi-arrow-up-right"></i></span></a></div>
        <div class="col-md-4"><a class="mini-card h-100 d-block text-decoration-none" href="{{ route('dashboard.agent') }}"><i class="bi bi-robot"></i><h3 class="h5 mt-3">Agentic AI</h3><p class="text-secondary small mb-0">Kenali ide sistem cerdas untuk verifikasi K3 laboratorium.</p><span class="card-link mt-3">Lihat proyek <i class="bi bi-arrow-up-right"></i></span></a></div>
    </div>
</section>
@endsection
