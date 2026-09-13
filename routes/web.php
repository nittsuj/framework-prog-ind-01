<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Halaman utama portal mahasiswa ITS.
Route::get('/', [PageController::class, 'home'])->name('home');

// Semua fitur dashboard dikelompokkan di bawah prefix URL /dashboard.
Route::prefix('dashboard')->group(function () {
    // Detail profil mahasiswa dengan NRP ITS tepat 10 digit.
    Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswa'])
        ->where('nrp', '[0-9]{10}')
        ->name('dashboard.mahasiswa');

    // Halaman input untuk memulai perhitungan IPK.
    Route::get('/hitung-ipk', [PageController::class, 'hitungIpkForm'])
        ->name('dashboard.hitung-ipk.form');

    // Menghitung jumlah dan rata-rata IP dari dua semester.
    Route::get('/hitung-ipk/{ip1}/{ip2}', [PageController::class, 'hitungIpk'])
        ->where(['ip1' => '[0-4](\.[0-9]{1,2})?', 'ip2' => '[0-4](\.[0-9]{1,2})?'])
        ->name('dashboard.hitung-ipk');

    // Menampilkan gagasan Agentic AI dengan tema opsional.
    Route::get('/agent/{tema?}', [PageController::class, 'agent'])
        ->name('dashboard.agent');
});

// Menangani URL yang tidak memiliki rute dengan halaman 404 yang ramah pengguna.
Route::fallback([PageController::class, 'fallback'])->name('fallback');
