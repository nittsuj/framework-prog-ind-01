# Portal Mahasiswa ITS

Aplikasi Laravel untuk Tugas Mandiri Sandbox Routing. Aplikasi ini menyediakan portal mahasiswa ITS dengan halaman profil, kalkulator IPK dua semester, dan presentasi ide proyek Agentic AI untuk verifikasi keselamatan laboratorium.

## Fitur

- Halaman beranda dengan sambutan ITS dan profil mahasiswa interaktif.
- Kartu fitur beranda yang dapat diklik untuk membuka halaman terkait.
- Detail profil mahasiswa berdasarkan NRP tepat 10 digit.
- Kalkulator jumlah dan rata-rata IP dua semester.
- Halaman proyek Agentic AI berbasis MCP Server untuk verifikasi SOP K3 laboratorium.
- Halaman fallback 404 dengan navigasi kembali ke beranda.
- UI responsive berbasis Bootstrap 5, Bootstrap Icons, dan styling custom melalui Vite.

## Routing

| Method | URL | Nama Route | Keterangan |
| --- | --- | --- | --- |
| GET | `/` | `home` | Beranda portal mahasiswa ITS |
| GET | `/mahasiswa/{nrp}` | `mahasiswa` | Profil mahasiswa, NRP wajib 10 digit |
| GET | `/hitung-ipk` | `hitung-ipk.form` | Form input IP semester 1 dan 2 |
| GET | `/hitung-ipk/{ipk1}/{ipk2}` | `hitung-ipk` | Hasil jumlah dan rata-rata IPK |
| GET | `/agent/{tema?}` | `agent` | Halaman proyek Agentic AI dengan tema opsional |
| ANY | URL tidak dikenal | `fallback` | Halaman 404 |

Seluruh route aplikasi didelegasikan ke `App\Http\Controllers\PageController`. Tidak ada closure untuk merender tampilan di `routes/web.php`.

## Teknologi

- PHP 8.5+
- Laravel 13
- SQLite
- Bootstrap 5.3 melalui CDN
- Bootstrap Icons
- Vite dan Tailwind CSS untuk asset custom
- PHPUnit

## Persiapan

Pastikan PHP, Composer, dan Node.js sudah terpasang. Aktifkan ekstensi SQLite PHP:

```ini
extension=pdo_sqlite
extension=sqlite3
```

Buat file database SQLite jika belum tersedia:

```powershell
New-Item database/database.sqlite -ItemType File
```

Install dependency backend dan frontend:

```powershell
composer install
npm install
```

Salin konfigurasi environment jika `.env` belum tersedia:

```powershell
Copy-Item .env.example .env
php artisan key:generate
```

Pastikan konfigurasi lokal menggunakan SQLite dan file session:

```dotenv
DB_CONNECTION=sqlite
SESSION_DRIVER=file
```

Jalankan migrasi dan build asset:

```powershell
php artisan migrate
npm run build
```

## Menjalankan Aplikasi

Jalankan server Laravel:

```powershell
php artisan serve
```

Buka [http://localhost:8000](http://localhost:8000).

Untuk pengembangan frontend dengan hot reload:

```powershell
npm run dev
```

## Validasi

Perintah yang digunakan untuk memeriksa aplikasi:

```powershell
php artisan test
php artisan route:list --except-vendor
php artisan view:cache
npm run build
```

## Struktur Utama

```text
app/Http/Controllers/PageController.php  # Controller seluruh halaman
resources/views/layouts/app.blade.php    # Layout Bootstrap bersama
resources/views/pages/                   # View setiap halaman
resources/css/app.css                    # Styling custom portal ITS
routes/web.php                           # Named routes dan route constraints
```
