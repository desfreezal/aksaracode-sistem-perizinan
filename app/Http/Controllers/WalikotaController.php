<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\DaftarUlang;
use App\Models\Operasional;
use App\Models\Pendirian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class WalikotaController extends Controller
{
    public function dashboard()
    {
        return view('walikota.dashboard');
    }

    public function izinPendirian()
    {
        return view('walikota.izin-pendirian.data-pemohon');
    }

    public function detailYayasan()
    {
        return view('walikota.izin-pendirian.detail-yayasan');
    }

    public function detailPendirian()
    {
        return view('walikota.izin-pendirian.detail-pendirian');
    }

    public function uploadBerkasIzinPendirian()
    {
        return view('walikota.izin-pendirian.upload-berkas');
    }

    public function lacakPermohonan()
    {
        return view('walikota.lacak-permohonan');
    }


    public function statusPermohonan($id)
    {
        $parts = explode('-', $id);

        $tipe = $parts[0];

        $hasil = [];

        $tipe_dokumen = '';

        if ($tipe === "A") {
            $tipe_dokumen = 'Pendirian';
            $hasil = Pendirian::findOrFail($id);
        } elseif ($tipe === "B") {
            $tipe_dokumen = 'Daftar Ulang';
            $hasil = DaftarUlang::findOrFail($id);
        } else {
            $tipe_dokumen = 'Operasional';
            $hasil = Operasional::findOrFail($id);
        }

        $user = Auth::user();


        return view('walikota.status-permohonan', compact('tipe_dokumen', 'hasil', 'user'));
    }

    public function profile()
    {
        $user = Auth::user();

        return view('walikota.profile', compact('user'));
    }

    public function editProfile(UserRequest $request)
    {

        $user = Auth::user();
        $user->update($request->validated());

        return view('walikota.profile', compact('user'));
    }

    public function riwayat()
    {
        $user = Auth::user();

        $pendirian = Pendirian::where('user_id', $user->id)->get();
        $daftarUlang = DaftarUlang::where('user_id', $user->id)->get();
        $operasional = Operasional::where('user_id', $user->id)->get();

        return view('walikota.riwayat-permohonan', compact('pendirian', 'daftarUlang', 'operasional', 'user'));
    }

    public function notifikasi()
    {
        $pendirian = Pendirian::with('user')->whereDate('updated_at', Carbon::today())->get();

        $daftarUlang = DaftarUlang::with('user')->whereDate('updated_at', Carbon::today())->get();

        $operasional = Operasional::with('user')->whereDate('updated_at', Carbon::today())->get();

        return view('walikota.notifikasi', compact('pendirian', 'daftarUlang', 'operasional'));
    }

    public function daftarUlang()
    {
        return view('walikota.daftar-ulang.daftar');
    }

    public function daftarUlangData()
    {
        return view('walikota.daftar-ulang.daftar');
    }

    public function daftarUlangDetail()
    {
        return view('walikota.daftar-ulang.detail');
    }

    public function daftarUlangBerkas()
    {
        return view('walikota.daftar-ulang.berkas');
    }

    public function izinOperasional()
    {
        return view('walikota.izin-operasional.data-pemohon');
    }

    public function detailOperasional()
    {
        return view('walikota.izin-operasional.detail-operasional');
    }

    public function berkasOperasional()
    {
        return view('walikota.izin-operasional.upload-berkas');
    }

    public function panduanPerizinan()
    {
        return view('walikota.panduan-perizinan');
    }

    public function panduanDaftarUlang()
    {
        return view('walikota.panduan-perizinan.daftar-ulang.daftar');
    }

    public function panduanOperasional()
    {
        return view('walikota.panduan-perizinan.izin-operasional.operasional');
    }

    public function panduanIzinPendirian()
    {
        return view('walikota.panduan-perizinan.izin-pendirian.izin');
    }

    public function monitoring()
    {
        $pendirian = Pendirian::count();
        $daftarUlang = DaftarUlang::count();
        $operasional = Operasional::count();

        $data = [
            'pendirian' => $pendirian,
            'daftarUlang' => $daftarUlang,
            'operasional' => $operasional,
        ];

        return view('walikota.monitoring', compact('data'));
    }

    public function monitoringDetail($type)
    {
        switch ($type) {
            case 'daftar-ulang':
                $data = DaftarUlang::with('user')->get();
                break;
            case 'izin-pendirian':
                $data = Pendirian::with('user')->get();
                break;
            case 'izin-operasional':
                $data = Operasional::with('user')->get();
                break;

            default:
                $data = [];
                break;
        }

        return view('walikota.monitoring-detail', compact('type', 'data'));
    }

    public function pengajuanPermohonan()
    {
        return view('walikota.pengajuan-permohonan');
    }

    public function pembaruanData()
    {
        return view('walikota.pembaruan-data.index');
    }

    public function detailPembaruanData($id)
    {
        return view('walikota.pembaruan-data.detail', ['id' => $id]);
    }
}
