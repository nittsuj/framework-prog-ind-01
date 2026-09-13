<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Halaman utama portal mahasiswa ITS.
Route::get('/', [PageController::class, 'home'])->name('home');

// Detail profil mahasiswa dengan NRP ITS tepat 10 digit.
Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswa'])
    ->where('nrp', '[0-9]{10}')
    ->name('mahasiswa');

// Halaman input untuk memulai perhitungan IPK.
Route::get('/hitung-ipk', [PageController::class, 'hitungIpkForm'])
    ->name('hitung-ipk.form');

// Menghitung jumlah dan rata-rata IPK dari dua semester.
Route::get('/hitung-ipk/{ipk1}/{ipk2}', [PageController::class, 'hitungIpk'])
    ->where(['ipk1' => '[0-4](\.[0-9]{1,2})?', 'ipk2' => '[0-4](\.[0-9]{1,2})?'])
    ->name('hitung-ipk');

// Menampilkan platform AI dengan tema opsional.
Route::get('/agent/{tema?}', [PageController::class, 'agent'])
    ->name('agent');

// Menangani URL yang tidak memiliki rute dengan halaman 404 yang ramah pengguna.
Route::fallback([PageController::class, 'fallback'])->name('fallback');
