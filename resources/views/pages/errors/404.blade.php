@extends('layouts.app')

@section('title', '404 | Halaman Tidak Ditemukan')

@section('content')
<section class="error-page d-flex align-items-center"><div class="container text-center"><div class="error-number">404</div><h1 class="h2 fw-bold">Halaman ini tersesat.</h1><p class="text-secondary mb-4">URL yang kamu cari belum tersedia di portal mahasiswa ITS.</p><a class="btn btn-primary px-4" href="{{ route('home') }}"><i class="bi bi-house me-2"></i>Kembali ke beranda</a></div></section>
@endsection
