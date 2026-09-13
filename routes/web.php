<?php

use Illuminate\Support\Facades\Route;

// Halaman utama dengan sambutan ITS dan profil singkat mahasiswa.
Route::get('/', function () {
    return <<<'HTML'
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda Mahasiswa ITS</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; margin: 0; color: #172033; background: #eef4ff; }
            main { max-width: 850px; margin: 40px auto; padding: 32px; background: #fff; border-radius: 16px; box-shadow: 0 8px 24px #14213d1a; }
            h1 { color: #123b72; } h2 { color: #1d5da8; }
            .profile { padding: 16px; border-left: 5px solid #f2a900; background: #fff8e6; }
            a, button { display: inline-block; border: 0; border-radius: 8px; padding: 10px 16px; color: #fff; background: #123b72; text-decoration: none; cursor: pointer; }
            button { background: #f2a900; color: #172033; } #detail { display: none; margin-top: 12px; }
        </style>
    </head>
    <body>
        <main>
            <h1>Selamat Datang di Kampus ITS</h1>
            <p>Halo, Arek ITS! Selamat datang di portal mini mahasiswa yang menjunjung semangat unggul, inovatif, dan berintegritas.</p>
            <section class="profile">
                <h2>Profil Mahasiswa</h2>
                <p><strong>Nama:</strong> Mahasiswa ITS</p>
                <p><strong>Institusi:</strong> Institut Teknologi Sepuluh Nopember</p>
                <button type="button" onclick="document.getElementById('detail').style.display = 'block'">Tampilkan motivasi</button>
                <p id="detail">Terus berkarya, berkolaborasi, dan gunakan teknologi untuk menyelesaikan masalah nyata.</p>
            </section>
            <p><a href="/dashboard/mahasiswa/5025211001">Lihat Dashboard</a></p>
        </main>
    </body>
    </html>
    HTML;
})->name('home');

// Semua fitur dashboard dikelompokkan di bawah prefix URL /dashboard.
Route::prefix('dashboard')->group(function () {
    // Menampilkan detail profil mahasiswa dengan NRP ITS tepat 10 digit.
    Route::get('/mahasiswa/{nrp}', function (string $nrp) {
        return '<h1>Detail Profil Mahasiswa</h1><p>NRP: <strong>' . e($nrp) . '</strong></p><p><a href="' . route('home') . '">Kembali ke Home</a></p>';
    })->where('nrp', '[0-9]{10}')->name('dashboard.mahasiswa');

    // Menghitung jumlah dan rata-rata IP dari dua semester.
    Route::get('/hitung-ipk/{ip1}/{ip2}', function (string $ip1, string $ip2) {
        $semesterPertama = (float) $ip1;
        $semesterKedua = (float) $ip2;
        $jumlah = $semesterPertama + $semesterKedua;
        $rataRata = $jumlah / 2;

        return '<h1>Kalkulator IPK</h1>'
            . '<p>IP Semester 1: ' . e($ip1) . '</p>'
            . '<p>IP Semester 2: ' . e($ip2) . '</p>'
            . '<p>Jumlah: <strong>' . number_format($jumlah, 2) . '</strong></p>'
            . '<p>Rata-rata: <strong>' . number_format($rataRata, 2) . '</strong></p>'
            . '<p><a href="' . route('home') . '">Kembali ke Home</a></p>';
    })->name('dashboard.hitung-ipk');

    // Menampilkan gagasan proyek Agentic AI dengan tema opsional dan fallback.
    Route::get('/agent/{tema?}', function (?string $tema = null) {
        $tema = $tema ?: 'General Assistant Agent';

        return '<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8">'
            . '<meta name="viewport" content="width=device-width, initial-scale=1.0">'
            . '<title>Platform Agentic AI</title><style>'
            . 'body{font-family:Arial,sans-serif;line-height:1.6;margin:0;background:#f5f7fb;color:#172033}'
            . 'main{max-width:900px;margin:32px auto;padding:32px;background:#fff;border-radius:16px;box-shadow:0 8px 24px #14213d1a}'
            . 'h1{color:#123b72}h2{color:#1d5da8}.theme{padding:12px;background:#e8f1ff;border-left:5px solid #1d5da8}'
            . '.feature{margin:14px 0;padding:14px;background:#f8fafc;border-radius:8px}.back{color:#123b72}'
            . '</style></head><body><main>'
            . '<h1>Sistem Agentic AI Berbasis MCP Server untuk Verifikasi Kepatuhan SOP Keselamatan (K3) Laboratorium</h1>'
            . '<p class="theme"><strong>Tema Agent:</strong> ' . e($tema) . '</p>'
            . '<h2>Alasan Mengambil Judul Ini</h2>'
            . '<p>Proyek ini mendemonstrasikan transisi dari "Otomasi Tradisional yang kaku" menjadi "Agentic AI yang otonom". Alih-alih mahasiswa mengisi form yang rentan error, LLM bertindak sebagai otak yang membedah niat pengguna dari bahasa natural, lalu secara otonom memanggil tools melalui MCP Server untuk mengecek database kampus. Sistem ini juga dirancang untuk menangani edge-case keamanan seperti <em>identity spoofing</em> (pemalsuan NRP) tanpa mengekspos akses database langsung ke AI.</p>'
            . '<h2>Daftar Fitur Utama</h2>'
            . '<div class="feature"><strong>1. Natural Language Translation:</strong> AI menerjemahkan permintaan informal mahasiswa, misalnya "alat peleleh timah", menjadi query database resmi, yaitu "Solder 40W".</div>'
            . '<div class="feature"><strong>2. Autonomous Rule Verification:</strong> AI secara mandiri menarik data SOP Lab dan status kelulusan K3 mahasiswa melalui MCP Server untuk mencocokkan kelayakan peminjaman.</div>'
            . '<div class="feature"><strong>3. Contextual Problem Solving:</strong> Jika alat ditolak karena kurang sertifikasi, AI menawarkan solusi prosedural, misalnya peminjaman dengan syarat pendampingan Asisten Lab.</div>'
            . '<div class="feature"><strong>4. Anti-Spoofing Verification (OTP):</strong> Untuk alat berisiko tinggi, agen AI memicu pengiriman kode OTP ke email resmi kampus berdasarkan NRP.</div>'
            . '<p><a class="back" href="' . route('home') . '">Kembali ke Home</a></p>'
            . '</main></body></html>';
    })->name('dashboard.agent');
});

// Menangani URL yang tidak memiliki rute dengan halaman 404 yang ramah pengguna.
Route::fallback(function () {
    return response('<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>404 - Halaman Tidak Ditemukan</title><style>body{font-family:Arial,sans-serif;text-align:center;padding:60px 20px;background:#f5f7fb;color:#172033}a{display:inline-block;padding:10px 16px;border-radius:8px;background:#123b72;color:#fff;text-decoration:none}</style></head><body><h1>404</h1><h2>Halaman tidak ditemukan</h2><p>Maaf, URL yang Anda kunjungi belum tersedia.</p><a href="' . route('home') . '">Kembali ke Home</a></body></html>', 404);
});
