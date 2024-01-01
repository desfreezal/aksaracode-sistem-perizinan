<?php

namespace App\Http\Controllers;
use App\Models\DaftarUlang;
use App\Models\Operasional;
use App\Models\Pendirian;

class StatistikController extends Controller
{
    public function dataStatistikDaftarUlang()
    {
        $TK = [
            'berhasil' => DaftarUlang::where('statusDokumen_id', 10)->where('category_id', 1)->count(),
            'tidak_berhasil' => DaftarUlang::where('statusDokumen_id', 11)->where('category_id', 1)->count(),
        ];

        $SD = [
            'berhasil' => DaftarUlang::where('statusDokumen_id', 10)->where('category_id', 2)->count(),
            'tidak_berhasil' => DaftarUlang::where('statusDokumen_id', 11)->where('category_id', 2)->count(),
        ];

        $SMP = [
            'berhasil' => DaftarUlang::where('statusDokumen_id', 10)->where('category_id', 3)->count(),
            'tidak_berhasil' => DaftarUlang::where('statusDokumen_id', 11)->where('category_id', 3)->count(),
        ];

        return view('data-statistik-daftarulang', compact('TK','SD','SMP'));
    }

    public function dataStatistikIzinOperasional()
    {
        $TK = [
            'berhasil' => Operasional::where('statusDokumen_id', 10)->where('category_id', 1)->count(),
            'tidak_berhasil' => Operasional::where('statusDokumen_id', 11)->where('category_id', 1)->count(),
        ];

        $SD = [
            'berhasil' => Operasional::where('statusDokumen_id', 10)->where('category_id', 2)->count(),
            'tidak_berhasil' => Operasional::where('statusDokumen_id', 11)->where('category_id', 2)->count(),
        ];

        $SMP = [
            'berhasil' => Operasional::where('statusDokumen_id', 10)->where('category_id', 3)->count(),
            'tidak_berhasil' => Operasional::where('statusDokumen_id', 11)->where('category_id', 3)->count(),
        ];

        return view('data-statistik-izinoperasional', compact('TK','SD','SMP'));
    }

    public function dataStatistikIzinPendirian()
    {
        $TK = [
            'berhasil' => Pendirian::where('statusDokumen_id', 10)->where('category_id', 1)->count(),
            'tidak_berhasil' => Pendirian::where('statusDokumen_id', 11)->where('category_id', 1)->count(),
        ];

        $SD = [
            'berhasil' => Pendirian::where('statusDokumen_id', 10)->where('category_id', 2)->count(),
            'tidak_berhasil' => Pendirian::where('statusDokumen_id', 11)->where('category_id', 2)->count(),
        ];

        $SMP = [
            'berhasil' => Pendirian::where('statusDokumen_id', 10)->where('category_id', 3)->count(),
            'tidak_berhasil' => Pendirian::where('statusDokumen_id', 11)->where('category_id', 3)->count(),
        ];

        return view('data-statistik-izinpendirian', compact('TK','SD','SMP'));
    }
}
