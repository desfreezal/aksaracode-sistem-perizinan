<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemohonController extends Controller
{
    public function dashboard()
    {
        return view('pemohon.dashboard');
    }

    public function izinPendirian()
    {
        return view('pemohon.izin-pendirian.data-pemohon');
    }

    public function lacakPermohonan()
    {
        return view('pemohon.lacak-permohonan');
    }

    public function statusPermohonan()
    {
        return view('pemohon.status-permohonan');
    }

    public function profile()
    {
        return view('pemohon.profile');
    }

    public function riwayat()
    {
        return view('pemohon.riwayat-permohonan');
    }

    public function notifikasi()
    {
        return view('pemohon.notifikasi');
    }

    public function daftarUlang()
    {
        return view('pemohon.daftar-ulang.daftar');
    }

    public function daftarUlangData()
    {
        return view('pemohon.daftar-ulang.daftar');
    }

    public function daftarUlangDetail()
    {
        return view('pemohon.daftar-ulang.detail');
    }

    public function daftarUlangBerkas()
    {
        return view('pemohon.daftar-ulang.berkas');
    }

    public function izinOperasional()
    {
        return view('pemohon.izin-operasional.data-pemohon');
    }

    public function detailOperasional()
    {
        return view('pemohon.izin-operasional.detail-operasional');
    }

    public function berkasOperasional()
    {
        return view('pemohon.izin-operasional.upload-berkas');
    }

    public function panduanPerizinan()
    {
        return view('pemohon.panduan-perizinan');
    }

    public function panduanDaftarUlang()
    {
        return view('pemohon.panduan-perizinan.daftar-ulang.daftar');
    }

    public function panduanOperasional()
    {
        return view('pemohon.panduan-perizinan.izin-operasional.operasional');
    }

    public function panduanIzinPendirian()
    {
        return view('pemohon.panduan-perizinan.izin-pendirian.izin');
    }

    public function monitoring()
    {
        return view('pemohon.monitoring');
    }

    public function monitoringDetail($type)
    {
        return view('pemohon.monitoring-detail', ['type' => $type]);
    }

    public function pengajuanPermohonan()
    {
        return view('pemohon.pengajuan-permohonan');
    }
}
