<?php

use App\Http\Controllers\AdminDinasController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DaftarUlangController;
use App\Http\Controllers\OperasionalController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PendirianController;
use App\Http\Controllers\StatistikController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing-pages');
});

Auth::routes();
Route::get('/lupa-sandi', function () {
    return view('auth-page.lupa-sandi');
});
// kode-verifikasi
Route::get('/kode-verifikasi', function () {
    return view('auth-page.kode-verifikasi');
})->name('verification.notice');

// reset-sandi
Route::get('/reset-sandi', function () {
    return view('auth-page.reset-sandi');
});
// konfirmasi-sandi
Route::get('/konfirmasi-sandi', function () {
    return view('auth-page.konfirmasi-sandi');
});
// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Informasi Pengajuan
Route::get('/data-statistik-izinpendirian', function () {
    return view('data-statistik-izinpendirian');
});
Route::get('/daftar-ulang', function () {
    return view(('landing-page.daftar-ulang.daftar'));
});
Route::get('/izin-pendirian', function () {
    return view(('landing-page.izin-pendirian.izin'));
});
Route::get('/izin-operasional', function () {
    return view('landing-page.izin-operasional.operasional');
});

Route::post('/update/pendirian/statusDokumen', [PendirianController::class, 'update_status_dokumen'])->name('statusPendirian.update');
Route::post('/update/operasional/statusDokumen', [OperasionalController::class, 'update_status_dokumen'])->name('statusOperasional.update');
Route::post('/update/daftarUlang/statusDokumen', [DaftarUlangController::class, 'update_status_dokumen'])->name('statusDaftarUlang.update');

Route::post('/update/pendirian/permohonanSelesai', [PendirianController::class, 'permohonan_selesai'])->name('permohonanSelesaiPendirian.update');
Route::post('/update/operasional/permohonanSelesai', [OperasionalController::class, 'permohonan_selesai'])->name('permohonanSelesaiOperasional.update');
Route::post('/update/daftarUlang/permohonanSelesai', [DaftarUlangController::class, 'permohonan_selesai'])->name('permohonanSelesaiDaftarUlang.update');


// STATISTIK
Route::get('/data-statistik-daftarulang', [StatistikController::class, 'dataStatistikDaftarUlang']);
Route::get('/data-statistik-izinoperasional', [StatistikController::class, 'dataStatistikIzinOperasional']);
Route::get('/data-statistik-izinpendirian', [StatistikController::class, 'dataStatistikIzinPendirian']);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);

// PEMOHON
Route::middleware(['role:pemohon', 'verified'])->prefix('/dashboard-pemohon')->group(function () {
    Route::get('/', [PemohonController::class, 'dashboard'])->name('pemohon-dashboard');

    // Lacak Permohonan
    Route::get('/lacak-permohonan', [PemohonController::class, 'lacakPermohonan']);
    Route::get('/status-permohonan', function () {
        return redirect('dashboard-pemohon/lacak-permohonan');
    });
    Route::get('/status-permohonan/{id}', [PemohonController::class, 'statusPermohonan']);


    Route::get('/profile', [PemohonController::class, 'profile']);
    Route::post('/profile', [PemohonController::class, 'editProfile']);

    Route::get('/riwayat', [PemohonController::class, 'riwayat']);
    Route::get('/notifikasi', [PemohonController::class, 'notifikasi']);

    Route::get('/izin-pendirian', [PemohonController::class, 'izinPendirian'])->name('izin-pendirian');
    Route::get('/izin-pendirian/detail-yayasan', [PemohonController::class, 'detailYayasan'])->name('pemohon-detail-yayasan');
    Route::get('/izin-pendirian/detail-pendirian', [PemohonController::class, 'detailPendirian'])->name('pemohon-detail-pendirian');
    Route::get('/izin-pendirian/upload-berkas', [PemohonController::class, 'uploadBerkasIzinPendirian'])->name('pemohon-upload-berkas');

    Route::get('/daftar-ulang', [PemohonController::class, 'daftarUlang'])->name('pemohon-daftar-ulang');
    Route::get('/daftar-ulang/data', [PemohonController::class, 'daftarUlangData']);
    Route::get('/daftar-ulang/detail', [PemohonController::class, 'daftarUlangDetail'])->name('pemohon-detail');
    Route::get('/daftar-ulang/berkas', [PemohonController::class, 'daftarUlangBerkas'])->name('pemohon-berkas');

    Route::get('/izin-operasional', [PemohonController::class, 'izinOperasional'])->name('pemohon-izin-operasional');
    Route::get('/izin-operasional/detail', [PemohonController::class, 'detailOperasional'])->name('pemohon-detail-operasional');
    Route::get('/izin-operasional/berkas', [PemohonController::class, 'berkasOperasional'])->name('pemohon-berkas-operasional');

    Route::get('/panduan-perizinan', [PemohonController::class, 'panduanPerizinan'])->name('pemohon-panduan-perizinan');
    Route::get('/panduan-perizinan/daftar-ulang', [PemohonController::class, 'panduanDaftarUlang'])->name('pemohon-panduan-daftar-ulang');
    Route::get('/panduan-perizinan/izin-operasional', [PemohonController::class, 'panduanOperasional'])->name('pemohon-panduan-operasional');
    Route::get('/panduan-perizinan/izin-pendirian', [PemohonController::class, 'panduanIzinPendirian'])->name('pemohon-panduan-izin');

    Route::get('/monitoring', [PemohonController::class, 'monitoring'])->name('pemohon-monitoring');
    Route::get('/monitoring/{type}', [PemohonController::class, 'monitoringDetail'])->name('pemohon-monitoring-detail');
    Route::get('/pengajuan-permohonan', [PemohonController::class, 'pengajuanPermohonan'])->name('pemohon-pengajuan-permohonan');
    // Store Data
    Route::post('/daftar-ulang', [DaftarUlangController::class, 'store']);
    Route::post('/pendirian', [PendirianController::class, 'store']);
    Route::post('/operasional', [OperasionalController::class, 'store']);

    // Update Data
    Route::post('/daftar-ulang/{id}', [DaftarUlangController::class, 'update']);
    Route::post('/pendirian/{id}', [PendirianController::class, 'update']);
    Route::post('/operasional/{id}', [OperasionalController::class, 'update']);

    // pembaruan data
    Route::get('pembaruan-data', [PemohonController::class, 'pembaruanData'])->name('pemohon-pembaruan-data');
    Route::get('pembaruan-data/{id}', [PemohonController::class, 'detailPembaruanData'])->name('pemohon-detail-pembaruan-data');
});

// ADMIN DINAS
Route::middleware(['role:admin-dinas', 'verified'])->prefix('/dashboard-admin-dinas')->group(function () {
    Route::get('/', [AdminDinasController::class, 'dashboard'])->name('admin-dinas-dashboard');

    Route::group(['prefix' => 'izin-pendirian'], function () {
        Route::get('detail-yayasan', [AdminDinasController::class, 'detailYayasan'])->name('admin-dinas-detail-yayasan');
        Route::get('detail-pendirian', [AdminDinasController::class, 'detailPendirian'])->name('admin-dinas-detail-pendirian');
        Route::get('upload-berkas', [AdminDinasController::class, 'uploadBerkas'])->name('admin-dinas-upload-berkas');
    });

    // Store Data
    Route::post('/daftar-ulang', [DaftarUlangController::class, 'store']);
    Route::post('/pendirian', [PendirianController::class, 'store']);
    Route::post('/operasional', [OperasionalController::class, 'store']);

    // Update Data
    Route::post('/daftar-ulang/{id}', [DaftarUlangController::class, 'update']);
    Route::post('/pendirian/{id}', [PendirianController::class, 'update']);
    Route::post('/operasional/{id}', [OperasionalController::class, 'update']);

    Route::get('kelengkapan-data', [AdminDinasController::class, 'kelengkapanData'])->name('admin-dinas-lengkap-data');
    Route::get('kelengkapan-data/{id}', [AdminDinasController::class, 'kelengkapanDetail'])->name('admin-dinas-kelengkapan-detail');

    Route::get('validasi-data', [AdminDinasController::class, 'validasiData'])->name('admin-dinas-validasi-data');
    Route::get('detail-validasi/{id}', [AdminDinasController::class, 'detailValidasi'])->name('admin-dinas-detail-validasi');
    Route::get('jadwal-survey/{id}', [AdminDinasController::class, 'jadwalSurvey'])->name('admin-dinas-jadwal-survey');
    Route::get('validasi-survey/{id}', [AdminDinasController::class, 'validasiSurvey'])->name('admin-dinas-validasi-survey');

    Route::get('lacak-permohonan', [AdminDinasController::class, 'lacakPermohonan'])->name('admin-dinas-lacak-permohonan');
    Route::get('status-permohonan', [AdminDinasController::class, 'statusPermohonan'])->name('admin-dinas-status-permohonan');
    Route::get('monitoring', [AdminDinasController::class, 'monitoring'])->name('admin-dinas-monitoring');
    Route::get('monitoring/{type}', [AdminDinasController::class, 'monitoringDetail'])->name('admin-dinas-monitoring-detail');
    Route::get('notifikasi', [AdminDinasController::class, 'notifikasi'])->name('admin-dinas-notifikasi');
    Route::get('panduan-perizinan', [AdminDinasController::class, 'panduanPerizinan'])->name('admin-dinas-panduan-perizinan');
    Route::get('panduan-perizinan/daftar-ulang', [AdminDinasController::class, 'panduanDaftarUlang'])->name('admin-dinas-panduan-daftar-ulang');
    Route::get('panduan-perizinan/izin-operasional', [AdminDinasController::class, 'panduanIzinOperasional'])->name('admin-dinas-panduan-operasional');
    Route::get('panduan-perizinan/izin-pendirian', [AdminDinasController::class, 'panduanIzinPendirian'])->name('admin-dinas-panduan-izin');

    Route::get('profile', [AdminDinasController::class, 'profile'])->name('admin-dinas-profile');
    Route::get('pengesahan-dokumen', [AdminDinasController::class, 'pengesahanDokumen'])->name('admin-dinas-pengesahan-dokumen');
    Route::get('pengesahan-dokumen/{jenis}', [AdminDinasController::class, 'jenisPengesahan'])->name('admin-dinas-jenis-pengesahan');
    Route::get('pengesahan-dokumen/{jenis}/{layanan}', [AdminDinasController::class, 'dataPengesahan'])->name('admin-dinas-data-pengesahan');
    Route::get('buat-surat/{jenis}/{layanan}/{id}', [AdminDinasController::class, 'buatSurat'])->name('admin-dinas-buat-surat');

    Route::get('riwayat', [AdminDinasController::class, 'riwayatPermohonan'])->name('admin-dinas-riwayat-permohonan');
    Route::get('pengajuan-permohonan', [AdminDinasController::class, 'pengajuanPermohonan'])->name('admin-dinas-pengajuan-permohonan');
    Route::get('daftar-ulang', [AdminDinasController::class, 'daftarUlang'])->name('admin-dinas-daftar-ulang');
    Route::get('daftar-ulang/data', [AdminDinasController::class, 'daftarUlangData']);
    Route::get('daftar-ulang/detail', [AdminDinasController::class, 'detailDaftarUlang'])->name('admin-dinas-detail');
    Route::get('daftar-ulang/berkas', [AdminDinasController::class, 'daftarUlangBerkas'])->name('admin-dinas-berkas');

    Route::get('izin-pendirian', [AdminDinasController::class, 'izinPendirian'])->name('admin-dinas-izin-pendirian');
    Route::get('izin-pendirian/detail-yayasan', [AdminDinasController::class, 'detailYayasan'])->name('admin-dinas-detail-yayasan');
    Route::get('izin-pendirian/detail-pendirian', [AdminDinasController::class, 'detailPendirian'])->name('admin-dinas-detail-pendirian');
    Route::get('izin-pendirian/upload-berkas', [AdminDinasController::class, 'uploadBerkas'])->name('admin-dinas-upload-berkas');

    Route::get('izin-operasional', [AdminDinasController::class, 'izinOperasional'])->name('admin-dinas-izin-operasional');
    Route::get('izin-operasional/detail', [AdminDinasController::class, 'detailOperasional'])->name('admin-dinas-detail-operasional');
    Route::get('izin-operasional/berkas', [AdminDinasController::class, 'berkasOperasional'])->name('admin-dinas-berkas-operasional');

    Route::get('survey', [AdminDinasController::class, 'survey'])->name('admin-dinas-survey');
    Route::get('survey/{id}', [AdminDinasController::class, 'isiSurvey'])->name('admin-dinas-isi-survey');

    Route::get('pembaruan-data', [AdminDinasController::class, 'pembaruanData'])->name('admin-dinas-pembaruan-data');
    Route::get('pembaruan-data/{id}', [AdminDinasController::class, 'detailPembaruanData'])->name('admin-dinas-detail-pembaruan-data');

    Route::get('kelola-sistem', [AdminDinasController::class, 'kelolaSistem'])->name('admin-dinas-kelola-sistem');
    Route::get('kelola-sistem/daftar-user', [AdminDinasController::class, 'daftarUser'])->name('admin-dinas-daftar-user');
    Route::get('kelola-sistem/daftar-user/{id}', [AdminDinasController::class, 'editUser'])->name('admin-dinas-edit-user');
    Route::get('kelola-sistem/panduan-perizinan', [AdminDinasController::class, 'panduanPerizinan'])->name('admin-dinas-kelola-panduan');
    Route::get('kelola-sistem/panduan-perizinan/daftar-ulang', [AdminDinasController::class, 'panduanDaftarUlang'])->name('admin-dinas-kelola-daftar-ulang');
    Route::get('kelola-sistem/panduan-perizinan/izin-pendirian', [AdminDinasController::class, 'panduanIzinPendirian'])->name('admin-dinas-kelola-izin-pendirian');
    Route::get('kelola-sistem/panduan-perizinan/izin-operasional', [AdminDinasController::class, 'panduanIzinOperasional'])->name('admin-dinas-kelola-izin-operasional');
});

// ADMIN UTAMA
Route::prefix('/dashboard-admin-utama')->group(function () {
    Route::get('', function () {
        return view('admin-utama.dashboard');
    });

    Route::get('/monitoring', function () {
        return view('admin-utama.monitoring');
    })->name('admin-utama-monitoring');

    Route::get('/monitoring/{type}', function ($type) {
        return view('admin-utama.monitoring-detail', ['type' => $type]);
    })->name('admin-utama-monitoring-detail');

    Route::get('/notifikasi', function () {
        return view('admin-utama.notifikasi');
    })->name('admin-utama-notifikasi');

    Route::get('/panduan-perizinan', function () {
        return view('admin-utama.panduan-perizinan');
    })->name('admin-utama-panduan-perizinan');

    Route::get('/panduan-perizinan/daftar-ulang', function () {
        return view('admin-utama.panduan-perizinan.daftar-ulang.daftar');
    })->name('admin-utama-panduan-daftar-ulang');

    // panduan izin operasional
    Route::get('/panduan-perizinan/izin-operasional', function () {
        return view('admin-utama.panduan-perizinan.izin-operasional.operasional');
    })->name('admin-utama-panduan-operasional');

    // izin pendirian
    Route::get('/panduan-perizinan/izin-pendirian', function () {
        return view('admin-utama.panduan-perizinan.izin-pendirian.izin');
    })->name('admin-utama-panduan-izin');

    Route::get('/profile', function () {
        return view('admin-utama.profile');
    })->name('admin-utama-profile');

    // kelola-sistem
    Route::get('/kelola-sistem', function () {
        return view('admin-utama.kelola-sistem.index');
    })->name('admin-utama-kelola-sistem');

    // kelola-sistem/daftar-user
    Route::get('/kelola-sistem/daftar-user', function () {
        return view('admin-utama.kelola-sistem.daftar-user');
    })->name('admin-utama-daftar-user');

    // kelola-sistem/daftar-user/{id}
    Route::get('/kelola-sistem/daftar-user/{id}', function ($id) {
        return view('admin-utama.kelola-sistem.edit-user', [
            'id' => $id
        ]);
    })->name('admin-utama-edit-user');

    // kelola-sistem/panduan-perizinan
    Route::get('/kelola-sistem/panduan-perizinan', function () {
        return view('admin-utama.kelola-sistem.panduan-perizinan');
    })->name('admin-utama-kelola-panduan');

    Route::get('/kelola-sistem/panduan-perizinan/daftar-ulang', function () {
        return view('admin-utama.kelola-sistem.jenis-panduan.daftar-ulang');
    })->name('admin-utama-kelola-daftar-ulang');

    Route::get('/kelola-sistem/panduan-perizinan/izin-pendirian', function () {
        return view('admin-utama.kelola-sistem.jenis-panduan.izin-pendirian');
    })->name('admin-utama-kelola-izin-pendirian');

    Route::get('/kelola-sistem/panduan-perizinan/izin-operasional', function () {
        return view('admin-utama.kelola-sistem.jenis-panduan.izin-operasional');
    })->name('admin-utama-kelola-izin-operasional');
});

// OPERATOR
Route::prefix('/dashboard-operator')->group(function () {
    Route::get('/', function () {
        return view('operator.dashboard');
    })->name('operator-dashboard');

    Route::get('/kelengkapan-data', function () {
        return view('operator.kelengkapan-data.kelengkapan-data');
    })->name('operator-lengkap-data');

    Route::get('/kelengkapan-data/{id}', function ($id) {
        return view('operator.kelengkapan-data.kelengkapan-detail', ['id' => $id]);
    })->name('operator-kelengkapan-detail');

    Route::get('/validasi-data', function () {
        return view('operator.validasi-data');
    })->name('operator-validasi-data');

    Route::get('/detail-validasi/{id}', function ($id) {
        return view('operator.detail-validasi');
    })->name('operator-detail-validasi');

    Route::get('/lacak-permohonan', function () {
        return view('operator.lacak-permohonan');
    })->name('operator-lacak-permohonan');

    Route::get('/status-permohonan', function () {
        return view('operator.status-permohonan');
    })->name('operator-status-permohonan');

    Route::get('/monitoring', function () {
        return view('operator.monitoring');
    })->name('operator-monitoring');

    Route::get('/monitoring/{type}', function ($type) {
        return view('operator.monitoring-detail', ['type' => $type]);
    })->name('operator-monitoring-detail');

    Route::get('/notifikasi', function () {
        return view('operator.notifikasi');
    })->name('operator-notifikasi');

    Route::get('/panduan-perizinan', function () {
        return view('operator.panduan-perizinan');
    })->name('operator-panduan-perizinan');

    Route::get('/panduan-perizinan/daftar-ulang', function () {
        return view('operator.panduan-perizinan.daftar-ulang.daftar');
    })->name('operator-panduan-daftar-ulang');

    // panduan izin operasional
    Route::get('/panduan-perizinan/izin-operasional', function () {
        return view('operator.panduan-perizinan.izin-operasional.operasional');
    })->name('operator-panduan-operasional');

    // izin pendirian
    Route::get('/panduan-perizinan/izin-pendirian', function () {
        return view('operator.panduan-perizinan.izin-pendirian.izin');
    })->name('operator-panduan-izin');

    Route::get('/profile', function () {
        return view('operator.profile');
    })->name('operator-profile');

    Route::get('/riwayat', function () {
        return view('operator.riwayat-permohonan');
    })->name('operator-riwayat-permohonan');

    // PENGAJUAN PERMOHONAN
    Route::get('/pengajuan-permohonan', function () {
        return view('operator.pengajuan-permohonan');
    })->name('operator-pengajuan-permohonan');

    Route::get('/daftar-ulang', function () {
        return view('operator.daftar-ulang.daftar');
    })->name('operator-daftar-ulang');

    Route::get('/daftar-ulang/data', function () {
        return view('operator.daftar-ulang.daftar');
    });

    Route::get('/daftar-ulang/detail', function () {
        return view('operator.daftar-ulang.detail');
    })->name('operator-detail');

    Route::get('/daftar-ulang/berkas', function () {
        return view('operator.daftar-ulang.berkas');
    })->name('operator-berkas');

    Route::get('/izin-pendirian', function () {
        return view('operator.izin-pendirian.data-pemohon');
    })->name('operator-izin-pendirian');

    Route::get('/izin-pendirian/detail-yayasan', function () {
        return view('operator.izin-pendirian.detail-yayasan');
    })->name('operator-detail-yayasan');

    Route::get('/izin-pendirian/detail-pendirian', function () {
        return view('operator.izin-pendirian.detail-pendirian');
    })->name('operator-detail-pendirian');
    // upload berkas
    Route::get('/izin-pendirian/upload-berkas', function () {
        return view('operator.izin-pendirian.upload-berkas');
    })->name('operator-upload-berkas');

    Route::get('/izin-operasional', function () {
        return view('operator.izin-operasional.data-pemohon');
    })->name('operator-izin-operasional');

    Route::get('/izin-operasional/detail', function () {
        return view('operator.izin-operasional.detail-operasional');
    })->name('operator-detail-operasional');

    Route::get('/izin-operasional/berkas', function () {
        return view('operator.izin-operasional.upload-berkas');
    })->name('operator-berkas-operasional');

    // pembaruan-data
    Route::get('/pembaruan-data', function () {
        return view('operator.pembaruan-data.index');
    })->name('operator-pembaruan-data');

    // pembaruan-data/{id}
    Route::get('/pembaruan-data/{id}', function ($id) {
        return view('operator.pembaruan-data.detail', [
            'id' => $id
        ]);
    })->name('operator-detail-pembaruan-data');
});

// AUDITOR
Route::prefix('/dashboard-auditor')->group(function () {
    Route::get('', function () {
        return view('auditor.dashboard');
    });

    Route::get('/monitoring', function () {
        return view('auditor.monitoring');
    })->name('auditor-monitoring');

    Route::get('/monitoring/{type}', function ($type) {
        return view('auditor.monitoring-detail', ['type' => $type]);
    })->name('auditor-monitoring-detail');

    Route::get('/notifikasi', function () {
        return view('auditor.notifikasi');
    })->name('auditor-notifikasi');

    Route::get('/panduan-perizinan', function () {
        return view('auditor.panduan-perizinan');
    })->name('auditor-panduan-perizinan');

    Route::get('/panduan-perizinan/daftar-ulang', function () {
        return view('auditor.panduan-perizinan.daftar-ulang.daftar');
    })->name('auditor-panduan-daftar-ulang');

    // panduan izin operasional
    Route::get('/panduan-perizinan/izin-operasional', function () {
        return view('auditor.panduan-perizinan.izin-operasional.operasional');
    })->name('auditor-panduan-operasional');

    // izin pendirian
    Route::get('/panduan-perizinan/izin-pendirian', function () {
        return view('auditor.panduan-perizinan.izin-pendirian.izin');
    })->name('auditor-panduan-izin');

    Route::get('/profile', function () {
        return view('auditor.profile');
    })->name('auditor-profile');
});

// SURVEYOR
Route::prefix('/dashboard-surveyor')->group(function () {
    Route::get('/', function () {
        return view('surveyor.dashboard');
    })->name('surveyor-dashboard');

    Route::get('/kelengkapan-data', function () {
        return view('surveyor.kelengkapan-data.kelengkapan-data');
    })->name('surveyor-lengkap-data');

    Route::get('/kelengkapan-data/{id}', function ($id) {
        return view('surveyor.kelengkapan-data.kelengkapan-detail', ['id' => $id]);
    })->name('surveyor-kelengkapan-detail');

    Route::get('/riwayat', function () {
        return view('surveyor.riwayat-permohonan');
    })->name('surveyor-riwayat-permohonan');

    Route::get('/detail-permohonan/{id}', function ($id) {
        return view('surveyor.detail-permohonan');
    })->name('surveyor-detail-permohonan');

    Route::get('/lacak-permohonan', function () {
        return view('surveyor.lacak-permohonan');
    })->name('surveyor-lacak-permohonan');

    Route::get('/status-permohonan', function () {
        return view('surveyor.status-permohonan');
    })->name('surveyor-status-permohonan');

    Route::get('/monitoring', function () {
        return view('surveyor.monitoring');
    })->name('surveyor-monitoring');

    Route::get('/monitoring/{type}', function ($type) {
        return view('surveyor.monitoring-detail', ['type' => $type]);
    })->name('surveyor-monitoring-detail');

    Route::get('/notifikasi', function () {
        return view('surveyor.notifikasi');
    })->name('surveyor-notifikasi');

    Route::get('/panduan-perizinan', function () {
        return view('surveyor.panduan-perizinan');
    })->name('surveyor-panduan-perizinan');

    Route::get('/panduan-perizinan/daftar-ulang', function () {
        return view('surveyor.panduan-perizinan.daftar-ulang.daftar');
    })->name('surveyor-panduan-daftar-ulang');

    // panduan izin operasional
    Route::get('/panduan-perizinan/izin-operasional', function () {
        return view('surveyor.panduan-perizinan.izin-operasional.operasional');
    })->name('surveyor-panduan-operasional');

    // izin pendirian
    Route::get('/panduan-perizinan/izin-pendirian', function () {
        return view('surveyor.panduan-perizinan.izin-pendirian.izin');
    })->name('surveyor-panduan-izin');

    Route::get('/profile', function () {
        return view('surveyor.profile');
    })->name('surveyor-profile');

    // PENGAJUAN PERMOHONAN
    Route::get('/pengajuan-permohonan', function () {
        return view('surveyor.pengajuan-permohonan');
    })->name('surveyor-pengajuan-permohonan');

    Route::get('/daftar-ulang', function () {
        return view('surveyor.daftar-ulang.daftar');
    })->name('surveyor-daftar-ulang');

    Route::get('/daftar-ulang/data', function () {
        return view('surveyor.daftar-ulang.daftar');
    });

    Route::get('/daftar-ulang/detail', function () {
        return view('surveyor.daftar-ulang.detail');
    })->name('surveyor-detail');

    Route::get('/daftar-ulang/berkas', function () {
        return view('surveyor.daftar-ulang.berkas');
    })->name('surveyor-berkas');

    Route::get('/izin-pendirian', function () {
        return view('surveyor.izin-pendirian.data-pemohon');
    })->name('surveyor-izin-pendirian');

    Route::get('/izin-pendirian/detail-yayasan', function () {
        return view('surveyor.izin-pendirian.detail-yayasan');
    })->name('surveyor-detail-yayasan');

    Route::get('/izin-pendirian/detail-pendirian', function () {
        return view('surveyor.izin-pendirian.detail-pendirian');
    })->name('surveyor-detail-pendirian');
    // upload berkas
    Route::get('/izin-pendirian/upload-berkas', function () {
        return view('surveyor.izin-pendirian.upload-berkas');
    })->name('surveyor-upload-berkas');

    Route::get('/izin-operasional', function () {
        return view('surveyor.izin-operasional.data-pemohon');
    })->name('surveyor-izin-operasional');

    Route::get('/izin-operasional/detail', function () {
        return view('surveyor.izin-operasional.detail-operasional');
    })->name('surveyor-detail-operasional');

    Route::get('/izin-operasional/berkas', function () {
        return view('surveyor.izin-operasional.upload-berkas');
    })->name('surveyor-berkas-operasional');

    // survey
    Route::get('/survey', function () {
        return view('surveyor.survey.index');
    })->name('surveyor-survey');

    Route::get('/survey/{id}', function ($id) {
        return view('surveyor.survey.isi-form', [
            'id' => $id
        ]);
    })->name('surveyor-isi-survey');

    // pembaruan-data
    Route::get('/pembaruan-data', function () {
        return view('surveyor.pembaruan-data.index');
    })->name('surveyor-pembaruan-data');

    // pembaruan-data/{id}
    Route::get('/pembaruan-data/{id}', function ($id) {
        return view('surveyor.pembaruan-data.detail', [
            'id' => $id
        ]);
    })->name('surveyor-detail-pembaruan-data');
});

// WALIKOTA
Route::prefix('/dashboard-walikota')->group(function () {
    Route::get('', function () {
        return view('walikota.dashboard');
    });

    Route::get('/monitoring', function () {
        return view('walikota.monitoring');
    })->name('walikota-monitoring');

    Route::get('/monitoring/{type}', function ($type) {
        return view('walikota.monitoring-detail', ['type' => $type]);
    })->name('walikota-monitoring-detail');

    Route::get('/notifikasi', function () {
        return view('walikota.notifikasi');
    })->name('walikota-notifikasi');

    Route::get('/panduan-perizinan', function () {
        return view('walikota.panduan-perizinan');
    })->name('walikota-panduan-perizinan');

    Route::get('/panduan-perizinan/daftar-ulang', function () {
        return view('walikota.panduan-perizinan.daftar-ulang.daftar');
    })->name('walikota-panduan-daftar-ulang');

    // panduan izin operasional
    Route::get('/panduan-perizinan/izin-operasional', function () {
        return view('walikota.panduan-perizinan.izin-operasional.operasional');
    })->name('walikota-panduan-operasional');

    // izin pendirian
    Route::get('/panduan-perizinan/izin-pendirian', function () {
        return view('walikota.panduan-perizinan.izin-pendirian.izin');
    })->name('walikota-panduan-izin');

    Route::get('/profile', function () {
        return view('walikota.profile');
    })->name('walikota-profile');
});

// KEPALA DINAS
Route::prefix('/dashboard-kepala-dinas')->group(function () {
    Route::get('', function () {
        return view('kepala-dinas.dashboard');
    })->name('kepala-dinas-dashboard');

    Route::get('/kelengkapan-data', function () {
        return view('kepala-dinas.kelengkapan-data.kelengkapan-data');
    })->name('kepala-dinas-lengkap-data');

    Route::get('/kelengkapan-data/{id}', function ($id) {
        return view('kepala-dinas.kelengkapan-data.kelengkapan-detail', ['id' => $id]);
    })->name('kepala-dinas-kelengkapan-detail');

    Route::get('/validasi-data', function () {
        return view('kepala-dinas.validasi-data.index');
    })->name('kepala-dinas-validasi-data');

    Route::get('/detail-validasi/{id}', function ($id) {
        return view('kepala-dinas.validasi-data.validasi', ['id' => $id]);
    })->name('kepala-dinas-detail-validasi');

    // jadwal-survey
    Route::get('/jadwal-survey/{id}', function ($id) {
        return view('kepala-dinas.validasi-data.jadwal-survey', ['id' => $id]);
    })->name('kepala-dinas-jadwal-survey');

    // validasi-survey/{id}
    Route::get('/validasi-survey/{id}', function ($id) {
        return view('kepala-dinas.validasi-data.validasi-survey', ['id' => $id]);
    })->name('kepala-dinas-validasi-survey');

    Route::get('/lacak-permohonan', function () {
        return view('kepala-dinas.lacak-permohonan');
    })->name('kepala-dinas-lacak-permohonan');

    Route::get('/status-permohonan', function () {
        return view('kepala-dinas.status-permohonan');
    })->name('kepala-dinas-status-permohonan');

    Route::get('/monitoring', function () {
        return view('kepala-dinas.monitoring');
    })->name('kepala-dinas-monitoring');

    Route::get('/notifikasi', function () {
        return view('kepala-dinas.notifikasi');
    })->name('kepala-dinas-notifikasi');


    Route::get('/panduan-perizinan', function () {
        return view('kepala-dinas.panduan-perizinan');
    })->name('kepala-dinas-panduan-perizinan');

    Route::get('/panduan-perizinan/daftar-ulang', function () {
        return view('kepala-dinas.panduan-perizinan.daftar-ulang.daftar');
    })->name('kepala-dinas-panduan-daftar-ulang');

    // panduan izin operasional
    Route::get('/panduan-perizinan/izin-operasional', function () {
        return view('kepala-dinas.panduan-perizinan.izin-operasional.operasional');
    })->name('kepala-dinas-panduan-operasional');

    // izin pendirian
    Route::get('/panduan-perizinan/izin-pendirian', function () {
        return view('kepala-dinas.panduan-perizinan.izin-pendirian.izin');
    })->name('kepala-dinas-panduan-izin');

    Route::get('/profile', function () {
        return view('kepala-dinas.profile');
    })->name('kepala-dinas-profile');

    // RIWAYAT PERMOHONAN
    Route::get('/riwayat', function () {
        return view('kepala-dinas.riwayat-permohonan');
    })->name('kepala-dinas-riwayat-permohonan');

    // pengesahan-dokumen
    Route::get('/pengesahan-dokumen', function () {
        return view('kepala-dinas.pengesahan-dokumen.index');
    })->name('kepala-dinas-pengesahan-dokumen');

    // jenis-pengesahan
    Route::get('/pengesahan-dokumen/{jenis}', function ($jenis) {
        return view(
            'kepala-dinas.pengesahan-dokumen.jenis-pengesahan',
            ['jenis' => $jenis]
        );
    })->name('kepala-dinas-jenis-pengesahan');

    Route::get('/pengesahan-dokumen/{jenis}/{layanan}', function ($jenis, $layanan) {
        return view(
            'kepala-dinas.pengesahan-dokumen.data-pengesahan',
            [
                'jenis' => $jenis,
                'layanan' => $layanan
            ]
        );
    })->name('kepala-dinas-data-pengesahan');

    // buat-surat/{id}
    Route::get('/buat-surat/{jenis}/{layanan}/{id}', function ($jenis, $layanan, $id) {
        return view('kepala-dinas.pengesahan-dokumen.surat', [
            'id' => $id,
            'jenis' => $jenis,
            'layanan' => $layanan
        ]);
    })->name('kepala-dinas-buat-surat');

    Route::get('/monitoring', function () {
        return view('kepala-dinas.monitoring');
    })->name('kepala-dinas-monitoring');

    Route::get('/monitoring/{type}', function ($type) {
        return view('kepala-dinas.monitoring-detail', ['type' => $type]);
    })->name('kepala-dinas-monitoring-detail');

    // PENGAJUAN PERMOHONAN
    Route::get('/pengajuan-permohonan', function () {
        return view('kepala-dinas.pengajuan-permohonan');
    })->name('kepala-dinas-pengajuan-permohonan');

    Route::get('/daftar-ulang', function () {
        return view('kepala-dinas.daftar-ulang.daftar');
    })->name('kepala-dinas-daftar-ulang');

    Route::get('/daftar-ulang/data', function () {
        return view('kepala-dinas.daftar-ulang.daftar');
    });

    Route::get('/daftar-ulang/detail', function () {
        return view('kepala-dinas.daftar-ulang.detail');
    })->name('kepala-dinas-detail');

    Route::get('/daftar-ulang/berkas', function () {
        return view('kepala-dinas.daftar-ulang.berkas');
    })->name('kepala-dinas-berkas');

    Route::get('/izin-pendirian', function () {
        return view('kepala-dinas.izin-pendirian.data-pemohon');
    })->name('kepala-dinas-izin-pendirian');

    Route::get('/izin-pendirian/detail-yayasan', function () {
        return view('kepala-dinas.izin-pendirian.detail-yayasan');
    })->name('kepala-dinas-detail-yayasan');

    Route::get('/izin-pendirian/detail-pendirian', function () {
        return view('kepala-dinas.izin-pendirian.detail-pendirian');
    })->name('kepala-dinas-detail-pendirian');
    // upload berkas
    Route::get('/izin-pendirian/upload-berkas', function () {
        return view('kepala-dinas.izin-pendirian.upload-berkas');
    })->name('kepala-dinas-upload-berkas');

    Route::get('/izin-operasional', function () {
        return view('kepala-dinas.izin-operasional.data-pemohon');
    })->name('kepala-dinas-izin-operasional');

    Route::get('/izin-operasional/detail', function () {
        return view('kepala-dinas.izin-operasional.detail-operasional');
    })->name('kepala-dinas-detail-operasional');

    Route::get('/izin-operasional/berkas', function () {
        return view('kepala-dinas.izin-operasional.upload-berkas');
    })->name('kepala-dinas-berkas-operasional');

    // survey
    Route::get('/survey', function () {
        return view('kepala-dinas.survey.index');
    })->name('kepala-dinas-survey');

    Route::get('/survey/{id}', function ($id) {
        return view('kepala-dinas.survey.isi-form', [
            'id' => $id
        ]);
    })->name('kepala-dinas-isi-survey');

    // pembaruan-data
    Route::get('/pembaruan-data', function () {
        return view('kepala-dinas.pembaruan-data.index');
    })->name('kepala-dinas-pembaruan-data');

    // pembaruan-data/{id}
    Route::get('/pembaruan-data/{id}', function ($id) {
        return view('kepala-dinas.pembaruan-data.detail', [
            'id' => $id
        ]);
    })->name('kepala-dinas-detail-pembaruan-data');
});

// VERIFIKATOR
Route::prefix('/dashboard-verifikator')->group(function () {
    Route::get('', function () {
        return view('verifikator.dashboard');
    })->name('verifikator-dashboard');

    Route::get('/kelengkapan-data', function () {
        return view('verifikator.kelengkapan-data');
    })->name('verifikator-lengkap-data');

    Route::get('/validasi-data', function () {
        return view('verifikator.validasi-data');
    })->name('verifikator-validasi-data');

    Route::get('/detail-validasi/{id}', function ($id) {
        return view('verifikator.detail-validasi');
    })->name('verifikator-detail-validasi');

    Route::get('/lacak-permohonan', function () {
        return view('verifikator.lacak-permohonan');
    })->name('verifikator-lacak-permohonan');

    Route::get('/status-permohonan', function () {
        return view('verifikator.status-permohonan');
    })->name('verifikator-status-permohonan');

    Route::get('/notifikasi', function () {
        return view('verifikator.notifikasi');
    })->name('verifikator-notifikasi');


    Route::get('/panduan-perizinan', function () {
        return view('verifikator.panduan-perizinan');
    })->name('verifikator-panduan-perizinan');

    Route::get('/panduan-perizinan/daftar-ulang', function () {
        return view('verifikator.panduan-perizinan.daftar-ulang.daftar');
    })->name('verifikator-panduan-daftar-ulang');

    // panduan izin operasional
    Route::get('/panduan-perizinan/izin-operasional', function () {
        return view('verifikator.panduan-perizinan.izin-operasional.operasional');
    })->name('verifikator-panduan-operasional');

    // izin pendirian
    Route::get('/panduan-perizinan/izin-pendirian', function () {
        return view('verifikator.panduan-perizinan.izin-pendirian.izin');
    })->name('verifikator-panduan-izin');

    Route::get('/profile', function () {
        return view('verifikator.profile');
    })->name('verifikator-profile');

    Route::get('/riwayat', function () {
        return view('verifikator.riwayat-permohonan');
    })->name('verifikator-riwayat-permohonan');

    Route::get('/monitoring', function () {
        return view('verifikator.monitoring');
    })->name('verifikator-monitoring');

    Route::get('/monitoring/{type}', function ($type) {
        return view('verifikator.monitoring-detail', ['type' => $type]);
    })->name('verifikator-monitoring-detail');

    // PENGAJUAN PERMOHONAN
    Route::get('/pengajuan-permohonan', function () {
        return view('verifikator.pengajuan-permohonan');
    })->name('verifikator-pengajuan-permohonan');

    Route::get('/daftar-ulang', function () {
        return view('verifikator.daftar-ulang.daftar');
    })->name('verifikator-daftar-ulang');

    Route::get('/daftar-ulang/data', function () {
        return view('verifikator.daftar-ulang.daftar');
    });

    Route::get('/daftar-ulang/detail', function () {
        return view('verifikator.daftar-ulang.detail');
    })->name('verifikator-detail');

    Route::get('/daftar-ulang/berkas', function () {
        return view('verifikator.daftar-ulang.berkas');
    })->name('verifikator-berkas');

    Route::get('/izin-pendirian', function () {
        return view('verifikator.izin-pendirian.data-pemohon');
    })->name('verifikator-izin-pendirian');

    Route::get('/izin-pendirian/detail-yayasan', function () {
        return view('verifikator.izin-pendirian.detail-yayasan');
    })->name('verifikator-detail-yayasan');

    Route::get('/izin-pendirian/detail-pendirian', function () {
        return view('verifikator.izin-pendirian.detail-pendirian');
    })->name('verifikator-detail-pendirian');
    // upload berkas
    Route::get('/izin-pendirian/upload-berkas', function () {
        return view('verifikator.izin-pendirian.upload-berkas');
    })->name('verifikator-upload-berkas');

    Route::get('/izin-operasional', function () {
        return view('verifikator.izin-operasional.data-pemohon');
    })->name('verifikator-izin-operasional');

    Route::get('/izin-operasional/detail', function () {
        return view('verifikator.izin-operasional.detail-operasional');
    })->name('verifikator-detail-operasional');

    Route::get('/izin-operasional/berkas', function () {
        return view('verifikator.izin-operasional.upload-berkas');
    })->name('verifikator-berkas-operasional');

    Route::get('/kelengkapan-data', function () {
        return view('verifikator.kelengkapan-data.kelengkapan-data');
    })->name('verifikator-lengkap-data');

    Route::get('/kelengkapan-data/{id}', function ($id) {
        return view('verifikator.kelengkapan-data.kelengkapan-detail', ['id' => $id]);
    })->name('verifikator-kelengkapan-detail');

    Route::get('/validasi-data', function () {
        return view('verifikator.validasi-data.index');
    })->name('verifikator-validasi-data');

    Route::get('/detail-validasi/{id}', function ($id) {
        return view('verifikator.validasi-data.validasi', ['id' => $id]);
    })->name('verifikator-detail-validasi');

    // jadwal-survey
    Route::get('/jadwal-survey/{id}', function ($id) {
        return view('verifikator.validasi-data.jadwal-survey', ['id' => $id]);
    })->name('verifikator-jadwal-survey');

    // validasi-survey/{id}
    Route::get('/validasi-survey/{id}', function ($id) {
        return view('verifikator.validasi-data.validasi-survey', ['id' => $id]);
    })->name('verifikator-validasi-survey');

    // survey
    Route::get('/survey', function () {
        return view('verifikator.survey.index');
    })->name('verifikator-survey');

    Route::get('/survey/{id}', function ($id) {
        return view('verifikator.survey.isi-form', [
            'id' => $id
        ]);
    })->name('verifikator-isi-survey');

    // pembaruan-data
    Route::get('/pembaruan-data', function () {
        return view('verifikator.pembaruan-data.index');
    })->name('verifikator-pembaruan-data');

    // pembaruan-data/{id}
    Route::get('/pembaruan-data/{id}', function ($id) {
        return view('verifikator.pembaruan-data.detail', [
            'id' => $id
        ]);
    })->name('verifikator-detail-pembaruan-data');
});


