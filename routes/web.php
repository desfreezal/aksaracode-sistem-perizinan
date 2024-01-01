<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PendirianController;
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

Route::get('/dashboard-pemohon', function () {
    return view('pemohon.dashboard');
})->name('pemohon-dashboard');

Route::get('/dashboard-operator', function () {
    return view('operator.dashboard');
})->name('operator-dashboard');

Route::get('/dashboard-surveyor', function () {
    return view('surveyor.dashboard');
});

Route::get('/data-statistik-daftarulang', function () {
    return view('data-statistik-daftarulang');
});

Route::get('/data-statistik-izinoperasional', function () {
    return view('data-statistik-izinoperasional');
});

Route::get('/data-statistik-izinpendirian', function () {
    return view('data-statistik-izinpendirian');
});

Route::get('/login', function () {
    return view('auth-page.login');
});

Route::get('/register', function () {
    return view('auth-page.register');
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


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// PEMOHON
Route::middleware(['role:pemohon'])->prefix('/dashboard')->group(function () {
    Route::get('/izin-pendirian', [PendirianController::class, 'createPendirian'])->name('izin-pendirian-1');
    Route::post('/izin-pendirian/step1', [PendirianController::class, 'postStep1']);

    Route::get('/izin-pendirian/step2', [PendirianController::class, 'step2'])->name('izin-pendirian-2');
    Route::post('/izin-pendirian/step2', [PendirianController::class, 'postStep2']);

    Route::get('/izin-pendirian/step3', [PendirianController::class, 'step3'])->name('izin-pendirian-3');
    Route::post('/izin-pendirian/step3', [PendirianController::class, 'postStep3']);

    Route::get('/izin-pendirian/step4', [PendirianController::class, 'step4'])->name('izin-pendirian-4');
    Route::post('/izin-pendirian/step4', [PendirianController::class, 'postStep4']);

    Route::get('/lacak-permohonan', function () {
        return view('pemohon.lacak-permohonan');
    });

    Route::get('/status-permohonan', function () {
        return view('pemohon.status-permohonan');
    });

    Route::get('/profile', function () {
        return view('pemohon.profile');
    });

    Route::get('/riwayat', function () {
        return view('pemohon.riwayat-permohonan');
    });

    Route::get('/notifikasi', function () {
        return view('pemohon.notifikasi');
    });

    Route::get('/chatting', function () {
        return view('pemohon.chatting');
    })->name('pemohon-chatting');

    Route::get('/chatting/{id_user}', function ($id_user) {
        return view('pemohon.chattting-room');
    })->name('pemohon-detail-chatting');

    Route::get('/daftar-ulang', function () {
        return view('pemohon.daftar-ulang.daftar');
    })->name('pemohon-daftar-ulang');

    Route::get('/daftar-ulang/data', function () {
        return view('pemohon.daftar-ulang.daftar');
    });

    Route::get('/daftar-ulang/detail', function () {
        return view('pemohon.daftar-ulang.detail');
    })->name('pemohon-detail');

    Route::get('/daftar-ulang/berkas', function () {
        return view('pemohon.daftar-ulang.berkas');
    })->name('pemohon-berkas');

    Route::get('/izin-operasional', function () {
        return view('pemohon.izin-operasional.data-pemohon');
    })->name('pemohon-izin-operasional');

    Route::get('/izin-operasional/detail', function () {
        return view('pemohon.izin-operasional.detail-operasional');
    })->name('pemohon-detail-operasional');

    Route::get('/izin-operasional/berkas', function () {
        return view('pemohon.izin-operasional.upload-berkas');
    })->name('pemohon-berkas-operasional');

    Route::get('/panduan-perizinan', function () {
        return view('pemohon.panduan-perizinan');
    })->name('pemohon-panduan-perizinan');

    Route::get('/panduan-perizinan/daftar-ulang', function () {
        return view('pemohon.panduan-perizinan.daftar-ulang.daftar');
    })->name('pemohon-panduan-daftar-ulang');

    // panduan izin operasional
    Route::get('/panduan-perizinan/izin-operasional', function () {
        return view('pemohon.panduan-perizinan.izin-operasional.operasional');
    })->name('pemohon-panduan-operasional');

    // izin pendirian
    Route::get('/panduan-perizinan/izin-pendirian', function () {
        return view('pemohon.panduan-perizinan.izin-pendirian.izin');
    })->name('pemohon-panduan-izin');

    Route::get('/monitoring', function () {
        return view('pemohon.monitoring');
    })->name('pemohon-monitoring');

    Route::get('/monitoring/{type}', function ($type) {
        return view('pemohon.monitoring-detail', ['type' => $type]);
    })->name('pemohon-monitoring-detail');

    // pengajuan-permohonan
    Route::get('/pengajuan-permohonan', function () {
        return view('pemohon.pengajuan-permohonan');
    })->name('pemohon-pengajuan-permohonan');
});

Route::get('/data-statistik-daftarulang', function () {
    return view('data-statistik-daftarulang');
});

Route::get('/data-statistik-izinoperasional', function () {
    return view('data-statistik-izinoperasional');
});

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



// OPERATOR
Route::prefix('/dashboard-operator')->group(function () {
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

    Route::get('/chatting', function () {
        return view('operator.chatting');
    })->name('operator-chatting');

    Route::get('/chatting/{id_user}', function ($id_user) {
        return view('operator.chattting-room');
    })->name('operator-detail-chatting');

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
});

// AUDITOR
Route::prefix('/dashboard-auditor')->group(function () {
    Route::get('', function () {
        return view('auditor.dashboard');
    });

    Route::get('/monitoring', function () {
        return view('auditor.monitoring');
    })->name('auditor-monitoring');

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
    Route::get('/kelengkapan-data', function () {
        return view('surveyor.kelengkapan-data');
    })->name('surveyor-lengkap-data');

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

    Route::get('/notifikasi', function () {
        return view('surveyor.notifikasi');
    })->name('surveyor-notifikasi');

    Route::get('/chatting', function () {
        return view('surveyor.chatting');
    })->name('surveyor-chatting');

    Route::get('/chatting/{id_user}', function ($id_user) {
        return view('surveyor.chatting');
    })->name('surveyor-detail-chatting');

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
});

// WALIKOTA
Route::prefix('/dashboard-walikota')->group(function () {
    Route::get('', function () {
        return view('walikota.dashboard');
    });

    Route::get('/monitoring', function () {
        return view('walikota.monitoring');
    })->name('walikota-monitoring');

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

Route::get('/lupa-sandi', function () {
    return view('auth-page.lupa-sandi');
});

// kode-verifikasi
Route::get('/kode-verifikasi', function () {
    return view('auth-page.kode-verifikasi');
});

// reset-sandi
Route::get('/reset-sandi', function () {
    return view('auth-page.reset-sandi');
});
// konfirmasi-sandi
Route::get('/konfirmasi-sandi', function () {
    return view('auth-page.konfirmasi-sandi');
});


// ADMIN DINAS
Route::prefix('/dashboard-admin-dinas')->group(function () {
    Route::get('', function () {
        return view('admin-dinas.dashboard');
    })->name('admin-dinas-dashboard');

    Route::get('/kelengkapan-data', function () {
        return view('admin-dinas.kelengkapan-data.kelengkapan-data');
    })->name('admin-dinas-lengkap-data');

    Route::get('/kelengkapan-data/{id}', function ($id) {
        return view('admin-dinas.kelengkapan-data.kelengkapan-detail', ['id' => $id]);
    })->name('admin-dinas-kelengkapan-detail');

    Route::get('/validasi-data', function () {
        return view('admin-dinas.validasi-data.index');
    })->name('admin-dinas-validasi-data');

    Route::get('/detail-validasi/{id}', function ($id) {
        return view('admin-dinas.validasi-data.validasi', ['id' => $id]);
    })->name('admin-dinas-detail-validasi');

    // jadwal-survey
    Route::get('/jadwal-survey/{id}', function ($id) {
        return view('admin-dinas.validasi-data.jadwal-survey', ['id' => $id]);
    })->name('admin-dinas-jadwal-survey');

    // validasi-survey/{id}
    Route::get('/validasi-survey/{id}', function ($id) {
        return view('admin-dinas.validasi-data.validasi-survey', ['id' => $id]);
    })->name('admin-dinas-validasi-survey');

    Route::get('/lacak-permohonan', function () {
        return view('admin-dinas.lacak-permohonan');
    })->name('admin-dinas-lacak-permohonan');

    Route::get('/status-permohonan', function () {
        return view('admin-dinas.status-permohonan');
    })->name('admin-dinas-status-permohonan');

    Route::get('/monitoring', function () {
        return view('admin-dinas.monitoring');
    })->name('admin-dinas-monitoring');

    Route::get('/monitoring/{type}', function ($type) {
        return view('admin-dinas.monitoring-detail', ['type' => $type]);
    })->name('admin-dinas-monitoring-detail');

    Route::get('/notifikasi', function () {
        return view('admin-dinas.notifikasi');
    })->name('admin-dinas-notifikasi');

    Route::get('/chatting', function () {
        return view('admin-dinas.chatting');
    })->name('admin-dinas-chatting');

    Route::get('/chatting/{id_user}', function ($id_user) {
        return view('pemohon.chattting-room');
    })->name('admin-dinas-detail-chatting');

    Route::get('/panduan-perizinan', function () {
        return view('admin-dinas.panduan-perizinan');
    })->name('admin-dinas-panduan-perizinan');

    Route::get('/panduan-perizinan/daftar-ulang', function () {
        return view('admin-dinas.panduan-perizinan.daftar-ulang.daftar');
    })->name('admin-dinas-panduan-daftar-ulang');

    // panduan izin operasional
    Route::get('/panduan-perizinan/izin-operasional', function () {
        return view('admin-dinas.panduan-perizinan.izin-operasional.operasional');
    })->name('admin-dinas-panduan-operasional');

    // izin pendirian
    Route::get('/panduan-perizinan/izin-pendirian', function () {
        return view('admin-dinas.panduan-perizinan.izin-pendirian.izin');
    })->name('admin-dinas-panduan-izin');

    Route::get('/profile', function () {
        return view('admin-dinas.profile');
    })->name('admin-dinas-profile');

    // pengesahan-dokumen
    Route::get('/pengesahan-dokumen', function () {
        return view('admin-dinas.pengesahan-dokumen.index');
    })->name('admin-dinas-pengesahan-dokumen');

    // jenis-pengesahan
    Route::get('/pengesahan-dokumen/{jenis}', function ($jenis) {
        return view(
            'admin-dinas.pengesahan-dokumen.jenis-pengesahan',
            ['jenis' => $jenis]
        );
    })->name('admin-dinas-jenis-pengesahan');

    Route::get('/pengesahan-dokumen/{jenis}/{layanan}', function ($jenis, $layanan) {
        return view(
            'admin-dinas.pengesahan-dokumen.data-pengesahan',
            [
                'jenis' => $jenis,
                'layanan' => $layanan
            ]
        );
    })->name('admin-dinas-data-pengesahan');

    // buat-surat/{id}
    Route::get('/buat-surat/{jenis}/{layanan}/{id}', function ($jenis, $layanan, $id) {
        return view('admin-dinas.pengesahan-dokumen.surat', [
            'id' => $id,
            'jenis' => $jenis,
            'layanan' => $layanan
        ]);
    })->name('admin-dinas-buat-surat');

    // RIWAYAT PERMOHONAN
    Route::get('/riwayat', function () {
        return view('admin-dinas.riwayat-permohonan');
    })->name('admin-dinas-riwayat-permohonan');

    // PENGAJUAN PERMOHONAN
    Route::get('/pengajuan-permohonan', function () {
        return view('admin-dinas.pengajuan-permohonan');
    })->name('admin-dinas-pengajuan-permohonan');

    Route::get('/daftar-ulang', function () {
        return view('admin-dinas.daftar-ulang.daftar');
    })->name('admin-dinas-daftar-ulang');

    Route::get('/daftar-ulang/data', function () {
        return view('admin-dinas.daftar-ulang.daftar');
    });

    Route::get('/daftar-ulang/detail', function () {
        return view('admin-dinas.daftar-ulang.detail');
    })->name('admin-dinas-detail');

    Route::get('/daftar-ulang/berkas', function () {
        return view('admin-dinas.daftar-ulang.berkas');
    })->name('admin-dinas-berkas');

    Route::get('/izin-pendirian', function () {
        return view('admin-dinas.izin-pendirian.data-pemohon');
    })->name('admin-dinas-izin-pendirian');

    Route::get('/izin-pendirian/detail-yayasan', function () {
        return view('admin-dinas.izin-pendirian.detail-yayasan');
    })->name('admin-dinas-detail-yayasan');

    Route::get('/izin-pendirian/detail-pendirian', function () {
        return view('admin-dinas.izin-pendirian.detail-pendirian');
    })->name('admin-dinas-detail-pendirian');
    // upload berkas
    Route::get('/izin-pendirian/upload-berkas', function () {
        return view('admin-dinas.izin-pendirian.upload-berkas');
    })->name('admin-dinas-upload-berkas');

    Route::get('/izin-operasional', function () {
        return view('admin-dinas.izin-operasional.data-pemohon');
    })->name('admin-dinas-izin-operasional');

    Route::get('/izin-operasional/detail', function () {
        return view('admin-dinas.izin-operasional.detail-operasional');
    })->name('admin-dinas-detail-operasional');

    Route::get('/izin-operasional/berkas', function () {
        return view('admin-dinas.izin-operasional.upload-berkas');
    })->name('admin-dinas-berkas-operasional');

});

// KEPALA DINAS
Route::prefix('/dashboard-kepala-dinas')->group(function () {
    Route::get('', function () {
        return view('kepala-dinas.dashboard');
    });

    Route::get('/kelengkapan-data', function () {
        return view('kepala-dinas.kelengkapan-data');
    })->name('kepala-dinas-lengkap-data');

    Route::get('/validasi-data', function () {
        return view('kepala-dinas.validasi-data');
    })->name('kepala-dinas-validasi-data');

    Route::get('/detail-validasi/{id}', function ($id) {
        return view('kepala-dinas.detail-validasi');
    })->name('kepala-dinas-detail-validasi');

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

    Route::get('/chatting', function () {
        return view('kepala-dinas.chatting');
    })->name('kepala-dinas-chatting');

    Route::get('/chatting/{id_user}', function ($id_user) {
        return view('kepala-dinas.chatting');
    })->name('kepala-dinas-detail-chatting');

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

    Route::get('/chatting', function () {
        return view('verifikator.chatting');
    })->name('verifikator-chatting');

    Route::get('/chatting/{id_user}', function ($id_user) {
        return view('verifikator.chatting');
    })->name('verifikator-detail-chatting');

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
});


// ADMIN UTAMA
Route::prefix('/dashboard-admin-utama')->group(function () {
    Route::get('', function () {
        return view('admin-utama.dashboard');
    });

    Route::get('/monitoring', function () {
        return view('admin-utama.monitoring');
    })->name('admin-utama-monitoring');

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
});
Auth::routes();


