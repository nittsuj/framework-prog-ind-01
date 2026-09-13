@extends('layouts.app')

@section('title', 'Profil Mahasiswa | Portal ITS')

@section('content')
<section class="page-heading py-5"><div class="container"><span class="eyebrow">DASHBOARD / PROFIL</span><h1 class="display-6 fw-bold mt-2 mb-2">Detail profil mahasiswa</h1><p class="text-secondary mb-0">Identitas mahasiswa terverifikasi berdasarkan Nomor Registrasi Pokok.</p></div></section>
<section class="container pb-5"><div class="row g-4"><div class="col-lg-8"><div class="content-panel p-4 p-lg-5"><div class="d-flex align-items-center gap-3 mb-4"><div class="avatar-circle">J</div><div><p class="text-secondary small mb-1">Mahasiswa aktif</p><h2 class="h3 mb-0">{{ $studentName }}</h2></div><span class="badge rounded-pill text-bg-success ms-auto"><i class="bi bi-check-circle me-1"></i> Terverifikasi</span></div><div class="row g-3"><div class="col-md-6"><div class="info-tile"><span>NRP</span><strong>{{ $nrp }}</strong></div></div><div class="col-md-6"><div class="info-tile"><span>Institusi</span><strong>Institut Teknologi Sepuluh Nopember</strong></div></div></div></div></div><div class="col-lg-4"><div class="side-panel p-4"><i class="bi bi-person-vcard display-6 text-accent"></i><h3 class="h5 mt-3">Butuh bantuan?</h3><p class="text-secondary small">Gunakan kalkulator IPK atau jelajahi platform Agentic AI.</p><a class="btn btn-primary w-100" href="{{ route('agent') }}">Buka Agentic AI</a></div></div></div><a class="btn btn-link px-0 mt-4" href="{{ route('home') }}"><i class="bi bi-arrow-left me-2"></i>Kembali ke beranda</a></section>
@endsection
