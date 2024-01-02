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

    public function detailYayasan()
    {
        return view('pemohon.izin-pendirian.detail-yayasan');
    }

    public function detailPendirian()
    {
        return view('pemohon.izin-pendirian.detail-pendirian');
    }

    public function uploadBerkasIzinPendirian()
    {
        return view('pemohon.izin-pendirian.upload-berkas');
    }

    public function lacakPermohonan()
    {
        return view('pemohon.lacak-permohonan');
    }


    public function statusPermohonan($id)
    {
        $parts = explode('-', $id);

        $tipe = $parts[0];

        $hasil = [];

        $tipe_dokumen = '';

        if($tipe === "A") {
            $tipe_dokumen = 'Pendirian';
            $hasil = Pendirian::findOrFail($id);
        }elseif ($tipe === "B") {
            $tipe_dokumen = 'Daftar Ulang';
            $hasil = DaftarUlang::findOrFail($id);
        }else {
            $tipe_dokumen = 'Operasional';
            $hasil = Operasional::findOrFail($id);
        }
        
        $user = Auth::user();


        return view('pemohon.status-permohonan', compact('tipe_dokumen','hasil', 'user'));
    }

    public function profile()
    {

        $user = Auth::user();

        return view('pemohon.profile', compact('user'));
    }

    public function editProfile(UserRequest $request)
    {

        $user = Auth::user();
        $user->update($request->validated());

        return view('pemohon.profile', compact('user'));
    }

    public function riwayat()
    {
        $user = Auth::user();

        $pendirian = Pendirian::where('user_id', $user->id)->get();
        $daftarUlang = DaftarUlang::where('user_id', $user->id)->get();
        $operasional = Operasional::where('user_id', $user->id)->get();

        return view('pemohon.riwayat-permohonan', compact('pendirian', 'daftarUlang', 'operasional', 'user'));
    }

    public function notifikasi()
    {
        $user = Auth::user();
        
        $pendirian = Pendirian::where('user_id', $user->id)
        ->whereDate('updated_at', Carbon::today())
        ->get();

        $daftarUlang = DaftarUlang::where('user_id', $user->id)
        ->whereDate('updated_at', Carbon::today())
        ->get();

        $operasional = Operasional::where('user_id', $user->id)
        ->whereDate('updated_at', Carbon::today())
        ->get();

        return view('pemohon.notifikasi', compact('pendirian', 'daftarUlang', 'operasional'));
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
        $user = Auth::user();

        $pendirian = Pendirian::where('user_id', $user->id)->count();
        $daftarUlang = DaftarUlang::where('user_id', $user->id)->count();
        $operasional = Operasional::where('user_id', $user->id)->count();

        $data = [
            'pendirian' => $pendirian,
            'daftarUlang' => $daftarUlang,
            'operasional' => $operasional,
        ];

        return view('pemohon.monitoring', compact('data'));
    }

    public function monitoringDetail($type)
    {
        $data = [];
        $user = Auth::user();


        switch ($type) {
            case 'daftar-ulang':
                $data = DaftarUlang::where('user_id', $user->id)->get();
                break;
            case 'izin-pendirian':
                $data = Pendirian::where('user_id', $user->id)->get();
                break;
            case 'izin-operasional':
                $data = Operasional::where('user_id', $user->id)->get();
                break;
            
            default:
                $data = [];
                break;
        }

        return view('pemohon.monitoring-detail', compact('type', 'data'));
    }

    public function pengajuanPermohonan()
    {
        return view('pemohon.pengajuan-permohonan');
    }

    public function pembaruanData()
    {
        return view('pemohon.pembaruan-data.index');
    }

    public function detailPembaruanData($id)
    {
        return view('pemohon.pembaruan-data.detail', ['id' => $id]);
    }
}
