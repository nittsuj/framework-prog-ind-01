@extends('layouts.app')

@section('title', 'Kalkulator IPK | Portal ITS')

@section('content')
<section class="page-heading py-5"><div class="container"><span class="eyebrow">DASHBOARD / AKADEMIK</span><h1 class="display-6 fw-bold mt-2 mb-2">Kalkulator IPK</h1><p class="text-secondary mb-0">Ringkas capaian dua semester dalam satu tampilan.</p></div></section>
<section class="container pb-5"><div class="row justify-content-center"><div class="col-lg-8"><div class="content-panel p-4 p-lg-5"><div class="row g-3 mb-4"><div class="col-md-6"><div class="score-card"><span>IP Semester 1</span><strong>{{ e($ip1) }}</strong></div></div><div class="col-md-6"><div class="score-card"><span>IP Semester 2</span><strong>{{ e($ip2) }}</strong></div></div></div><div class="result-panel text-center"><p class="text-uppercase small fw-bold text-secondary mb-2">Rata-rata dua semester</p><div class="display-2 fw-bold text-primary">{{ number_format($rataRata, 2) }}</div><p class="mb-0 text-secondary">Jumlah IP: {{ number_format($jumlah, 2) }}</p></div><div class="alert alert-info border-0 mt-4 mb-0"><i class="bi bi-info-circle me-2"></i>Hasil ini merupakan rata-rata sederhana dari dua nilai IP yang diberikan.</div><a class="btn btn-primary w-100 mt-4" href="{{ route('dashboard.hitung-ipk.form') }}"><i class="bi bi-arrow-repeat me-2"></i>Hitung lagi</a></div><a class="btn btn-link px-0 mt-3" href="{{ route('home') }}"><i class="bi bi-arrow-left me-2"></i>Kembali ke beranda</a></div></div></section>
@endsection
