<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class PageController extends Controller
{
    private const STUDENT_NAME = 'Justin Valentino';

    private const STUDENT_NRP = '5025241234';

    public function home(): Response
    {
        return response()->view('pages.home', [
            'studentName' => self::STUDENT_NAME,
            'studentNrp' => self::STUDENT_NRP,
        ]);
    }

    public function mahasiswa(string $nrp): Response
    {
        return response()->view('pages.mahasiswa', [
            'nrp' => $nrp,
            'studentName' => self::STUDENT_NAME,
        ]);
    }

    public function hitungIpkForm(): Response
    {
        return response()->view('pages.hitung-ipk-form');
    }

    public function hitungIpk(string $ipk1, string $ipk2): Response
    {
        $semesterPertama = (float) $ipk1;
        $semesterKedua = (float) $ipk2;
        $jumlah = $semesterPertama + $semesterKedua;
        $rataRata = $jumlah / 2;

        return response()->view('pages.hitung-ipk', compact(
            'ipk1',
            'ipk2',
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
