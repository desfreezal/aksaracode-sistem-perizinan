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

class AuditorController extends Controller
{
    public function dashboard()
    {
        return view('auditor.dashboard');
    }

    public function izinPendirian()
    {
        return view('auditor.izin-pendirian.data-pemohon');
    }

    public function detailYayasan()
    {
        return view('auditor.izin-pendirian.detail-yayasan');
    }

    public function detailPendirian()
    {
        return view('auditor.izin-pendirian.detail-pendirian');
    }

    public function uploadBerkasIzinPendirian()
    {
        return view('auditor.izin-pendirian.upload-berkas');
    }

    public function lacakPermohonan()
    {
        return view('auditor.lacak-permohonan');
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


        return view('auditor.status-permohonan', compact('tipe_dokumen','hasil', 'user'));
    }

    public function profile()
    {
        $user = Auth::user();

        return view('auditor.profile', compact('user'));
    }

    public function editProfile(UserRequest $request)
    {

        $user = Auth::user();
        $user->update($request->validated());

        return view('auditor.profile', compact('user'));
    }

    public function riwayat()
    {
        $user = Auth::user();

        $pendirian = Pendirian::where('user_id', $user->id)->get();
        $daftarUlang = DaftarUlang::where('user_id', $user->id)->get();
        $operasional = Operasional::where('user_id', $user->id)->get();

        return view('auditor.riwayat-permohonan', compact('pendirian', 'daftarUlang', 'operasional', 'user'));
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

        return view('auditor.notifikasi', compact('pendirian', 'daftarUlang', 'operasional'));
    }

    public function daftarUlang()
    {
        return view('auditor.daftar-ulang.daftar');
    }

    public function daftarUlangData()
    {
        return view('auditor.daftar-ulang.daftar');
    }

    public function daftarUlangDetail()
    {
        return view('auditor.daftar-ulang.detail');
    }

    public function daftarUlangBerkas()
    {
        return view('auditor.daftar-ulang.berkas');
    }

    public function izinOperasional()
    {
        return view('auditor.izin-operasional.data-pemohon');
    }

    public function detailOperasional()
    {
        return view('auditor.izin-operasional.detail-operasional');
    }

    public function berkasOperasional()
    {
        return view('auditor.izin-operasional.upload-berkas');
    }

    public function panduanPerizinan()
    {
        return view('auditor.panduan-perizinan');
    }

    public function panduanDaftarUlang()
    {
        return view('auditor.panduan-perizinan.daftar-ulang.daftar');
    }

    public function panduanOperasional()
    {
        return view('auditor.panduan-perizinan.izin-operasional.operasional');
    }

    public function panduanIzinPendirian()
    {
        return view('auditor.panduan-perizinan.izin-pendirian.izin');
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

        return view('auditor.monitoring', compact('data'));
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

        return view('auditor.monitoring-detail', compact('type', 'data'));
    }

    public function pengajuanPermohonan()
    {
        return view('auditor.pengajuan-permohonan');
    }

    public function pembaruanData()
    {
        return view('auditor.pembaruan-data.index');
    }

    public function detailPembaruanData($id)
    {
        return view('auditor.pembaruan-data.detail', ['id' => $id]);
    }
}
