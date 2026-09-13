@extends('layouts.app')

@section('title', 'Input IPK | Portal ITS')

@section('content')
<section class="page-heading py-5">
    <div class="container">
        <span class="eyebrow">DASHBOARD / AKADEMIK</span>
        <h1 class="display-6 fw-bold mt-2 mb-2">Hitung IPK dua semester</h1>
        <p class="text-secondary mb-0">Masukkan nilai IP semester 1 dan semester 2 untuk melihat ringkasannya.</p>
    </div>
</section>
<section class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="content-panel calculator-shell p-4 p-lg-5">
                <div class="calculator-icon mb-4"><i class="bi bi-calculator"></i></div>
                <h2 class="h3 fw-bold">Nilai akademik</h2>
                <p class="text-secondary mb-4">Gunakan angka 0 sampai 4 dengan maksimal dua angka desimal.</p>
                <form action="{{ url('/dashboard/hitung-ipk') }}" method="GET" onsubmit="event.preventDefault(); window.location.href = this.action + '/' + encodeURIComponent(this.ip1.value) + '/' + encodeURIComponent(this.ip2.value);">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="ip1">IP Semester 1</label>
                            <input class="form-control form-control-lg" id="ip1" name="ip1" type="number" min="0" max="4" step="0.01" placeholder="Contoh: 3.75" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold" for="ip2">IP Semester 2</label>
                            <input class="form-control form-control-lg" id="ip2" name="ip2" type="number" min="0" max="4" step="0.01" placeholder="Contoh: 3.90" required>
                        </div>
                    </div>
                    <div class="alert alert-light border mt-4 mb-4"><i class="bi bi-lightbulb text-warning me-2"></i>Rata-rata akan dihitung dengan rumus <strong>(IP Semester 1 + IP Semester 2) / 2</strong>.</div>
                    <button class="btn btn-primary btn-lg w-100" type="submit"><i class="bi bi-bar-chart-line me-2"></i>Lihat hasil IPK</button>
                </form>
            </div>
            <a class="btn btn-link px-0 mt-3" href="{{ route('home') }}"><i class="bi bi-arrow-left me-2"></i>Kembali ke beranda</a>
        </div>
    </div>
</section>
@endsection