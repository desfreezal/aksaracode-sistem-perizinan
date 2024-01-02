<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendirianRequest;
use App\Models\DaftarUlang;
use App\Models\Operasional;
use App\Models\Pendirian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class AdminDinasController extends Controller
{
    public function dashboard()
    {
        return view('admin-dinas.dashboard');
    }

    public function detailYayasan()
    {
        return view('admin-dinas.izin-pendirian.detail-yayasan');
    }

    public function detailPendirian()
    {
        return view('admin-dinas.izin-pendirian.detail-pendirian');
    }

    public function uploadBerkas()
    {
        return view('admin-dinas.izin-pendirian.upload-berkas');
    }

    public function kelengkapanData()
    {
        $pendirian = Pendirian::with('user')->whereIn('statusDokumen_id', [1, 2, 3])->get();
        $daftarUlang = DaftarUlang::with('user')->whereIn('statusDokumen_id', [1, 2, 3])->get();
        $operasional = Operasional::with('user')->whereIn('statusDokumen_id', [1, 2, 3])->get();

        return view('admin-dinas.kelengkapan-data.kelengkapan-data', compact('pendirian', 'daftarUlang', 'operasional'));
    }

    public function deleteInvalidFile($type, $id, $field)
    {
        try {
            $storagePath = [
                'pendirian' => 'perizinanPendirian',
                'operasional' => 'operasional',
                'daftarUlang' => 'daftarUlang'
            ];

            if ($type === "pendirian") {
                $pendirian = Pendirian::findOrFail($id);

                Storage::delete('public/' . $storagePath[$type] . ' /' . $field . '/' . $pendirian->$field);

                $pendirian->$field = null;
                $pendirian->save();
            } elseif ($type === "operasional") {
                $operasional = Operasional::findOrFail($id);

                Storage::delete('public/' . $storagePath[$type] . ' /' . $field . '/' . $operasional->$field);

                $operasional->$field = null;
                $operasional->save();
            } else {
                $daftarUlang = DaftarUlang::findOrFail($id);

                Storage::delete('public/' . $storagePath[$type] . ' /' . $field . '/' . $daftarUlang->$field);

                $daftarUlang->$field = null;
                $daftarUlang->save();
            }

            return redirect()->back();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function kelengkapanDetail($id)
    {
        $type = explode('-', $id);

        $data = [];
        if ($type[0] === "A") {
            $data = Pendirian::findOrFail($id);
        } elseif ($type[0] === "B") {
            $data = DaftarUlang::findOrFail($id);
        } else {
            $data = Operasional::findOrFail($id);
        }

        return view('admin-dinas.kelengkapan-data.kelengkapan-detail', compact('id', 'data'));
    }

    public function validasiData()
    {
        return view('admin-dinas.validasi-data.index');
    }

    public function detailValidasi($id)
    {
        return view('admin-dinas.validasi-data.validasi', ['id' => $id]);
    }

    public function jadwalSurvey($id)
    {
        return view('admin-dinas.validasi-data.jadwal-survey', ['id' => $id]);
    }

    public function validasiSurvey($id)
    {
        return view('admin-dinas.validasi-data.validasi-survey', ['id' => $id]);
    }

    public function lacakPermohonan()
    {
        return view('admin-dinas.lacak-permohonan');
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


        return view('admin-dinas.status-permohonan', compact('tipe_dokumen', 'hasil', 'user'));
    }

    public function monitoring()
    {
        return view('admin-dinas.monitoring');
    }

    public function monitoringDetail($type)
    {
        return view('admin-dinas.monitoring-detail', ['type' => $type]);
    }

    public function notifikasi()
    {
        return view('admin-dinas.notifikasi');
    }

    public function panduanPerizinan()
    {
        return view('admin-dinas.panduan-perizinan');
    }

    public function panduanDaftarUlang()
    {
        return view('admin-dinas.panduan-perizinan.daftar-ulang.daftar');
    }

    public function panduanOperasional()
    {
        return view('admin-dinas.panduan-perizinan.izin-operasional.operasional');
    }

    public function panduanIzinPendirian()
    {
        return view('admin-dinas.panduan-perizinan.izin-pendirian.izin');
    }

    public function profile()
    {
        return view('admin-dinas.profile');
    }

    public function pengesahanDokumen()
    {
        return view('admin-dinas.pengesahan-dokumen.index');
    }

    public function jenisPengesahan($jenis)
    {
        return view('admin-dinas.pengesahan-dokumen.jenis-pengesahan', ['jenis' => $jenis]);
    }

    public function dataPengesahan($jenis, $layanan)
    {
        return view('admin-dinas.pengesahan-dokumen.data-pengesahan', ['jenis' => $jenis, 'layanan' => $layanan]);
    }

    public function buatSurat($jenis, $layanan, $id)
    {
        return view('admin-dinas.pengesahan-dokumen.surat', ['id' => $id, 'jenis' => $jenis, 'layanan' => $layanan]);
    }

    public function riwayatPermohonan()
    {
        $user = Auth::user();

        $pendirian = Pendirian::where('user_id', $user->id)->get();
        $daftarUlang = DaftarUlang::where('user_id', $user->id)->get();
        $operasional = Operasional::where('user_id', $user->id)->get();

        return view('admin-dinas.riwayat-permohonan', compact('pendirian', 'daftarUlang', 'operasional', 'user'));
    }

    public function pengajuanPermohonan()
    {
        return view('admin-dinas.pengajuan-permohonan');
    }

    public function daftarUlang()
    {
        return view('admin-dinas.daftar-ulang.daftar');
    }

    public function daftarUlangData()
    {
        return view('admin-dinas.daftar-ulang.daftar');
    }

    public function detailDaftarUlang()
    {
        return view('admin-dinas.daftar-ulang.detail');
    }

    public function berkasDaftarUlang()
    {
        return view('admin-dinas.daftar-ulang.berkas');
    }

    public function izinPendirian()
    {
        return view('admin-dinas.izin-pendirian.data-pemohon');
    }

    public function detailYayasanIzinPendirian()
    {
        return view('admin-dinas.izin-pendirian.detail-yayasan');
    }

    public function detailPendirianIzinPendirian()
    {
        return view('admin-dinas.izin-pendirian.detail-pendirian');
    }

    public function uploadBerkasIzinPendirian()
    {
        return view('admin-dinas.izin-pendirian.upload-berkas');
    }

    public function izinOperasional()
    {
        return view('admin-dinas.izin-operasional.data-pemohon');
    }

    public function detailOperasional()
    {
        return view('admin-dinas.izin-operasional.detail-operasional');
    }

    public function berkasOperasional()
    {
        return view('admin-dinas.izin-operasional.upload-berkas');
    }

    public function survey()
    {
        return view('admin-dinas.survey.index');
    }

    public function isiSurvey($id)
    {
        return view('admin-dinas.survey.isi-form', ['id' => $id]);
    }

    public function pembaruanData()
    {
        return view('admin-dinas.pembaruan-data.index');
    }

    public function detailPembaruanData($id)
    {
        return view('admin-dinas.pembaruan-data.detail', ['id' => $id]);
    }

    public function kelolaSistem()
    {
        return view('admin-dinas.kelola-sistem.index');
    }

    public function daftarUser()
    {
        return view('admin-dinas.kelola-sistem.daftar-user');
    }

    public function editUser($id)
    {
        return view('admin-dinas.kelola-sistem.edit-user', ['id' => $id]);
    }

    public function panduanKelolaSistem()
    {
        return view('admin-dinas.kelola-sistem.panduan-perizinan');
    }

    public function panduanDaftarUlangKelolaSistem()
    {
        return view('admin-dinas.kelola-sistem.jenis-panduan.daftar-ulang');
    }

    public function panduanIzinPendirianKelolaSistem()
    {
        return view('admin-dinas.kelola-sistem.jenis-panduan.izin-pendirian');
    }

    public function panduanIzinOperasionalKelolaSistem()
    {
        return view('admin-dinas.kelola-sistem.jenis-panduan.izin-operasional');
    }
}
