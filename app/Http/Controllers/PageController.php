<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class PageController extends Controller
{
    public function home(): Response
    {
        return response()->view('pages.home');
    }

    public function mahasiswa(string $nrp): Response
    {
        return response()->view('pages.mahasiswa', compact('nrp'));
    }

    public function hitungIpkForm(): Response
    {
        return response()->view('pages.hitung-ipk-form');
    }

    public function hitungIpk(string $ip1, string $ip2): Response
    {
        $semesterPertama = (float) $ip1;
        $semesterKedua = (float) $ip2;
        $jumlah = $semesterPertama + $semesterKedua;
        $rataRata = $jumlah / 2;

        return response()->view('pages.hitung-ipk', compact(
            'ip1',
            'ip2',
            'jumlah',
            'rataRata',
        ));
    }

    public function agent(?string $tema = null): Response
    {
        $tema = $tema ?: 'General Assistant Agent';

        return response()->view('pages.agent', compact('tema'));
    }

    public function fallback(): Response
    {
        return response()->view('pages.errors.404', status: 404);
    }
}
