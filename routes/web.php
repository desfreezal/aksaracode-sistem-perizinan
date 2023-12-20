<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing-pages', function () {
    return view('landing-pages');
});

Route::get('/dashboard-pemohon', function () {
    return view('pemohon.dashboard');
});

Route::get('/dashboard-operator', function () {
    return view('operator.dashboard');
});

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

// PEMOHON
Route::prefix('/dashboard-pemohon')->group(function () {
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
        return view('pemohon.chatting');
    });

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

    Route::get('/izin-pendirian', function () {
        return view('pemohon.izin-pendirian.data-pemohon');
    })->name('pemohon-izin-pendirian');

    Route::get('/izin-pendirian/detail-yayasan', function () {
        return view('pemohon.izin-pendirian.detail-yayasan');
    })->name('pemohon-detail-yayasan');

    Route::get('/izin-pendirian/detail-pendirian', function () {
        return view('pemohon.izin-pendirian.detail-pendirian');
    })->name('pemohon-detail-pendirian');
    // upload berkas
    Route::get('/izin-pendirian/upload-berkas', function () {
        return view('pemohon.izin-pendirian.upload-berkas');
    })->name('pemohon-upload-berkas');

    Route::get('/izin-operasional', function () {
        return view('pemohon.izin-operasional.data-pemohon');
    })->name('pemohon-izin-operasional');

    Route::get('/izin-operasional/detail', function () {
        return view('pemohon.izin-operasional.detail-operasional');
    })->name('pemohon-detail-operasional');

    Route::get('/izin-operasional/berkas', function () {
        return view('pemohon.izin-operasional.upload-berkas');
    })->name('pemohon-berkas-operasional');
});

// OPERATOR
Route::prefix('/dashboard-operator')->group(function () {
    Route::get('/kelengkapan-data', function () {
        return view('operator.kelengkapan-data');
    })->name('operator-lengkap-data');

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

    Route::get('/notifikasi', function () {
        return view('operator.notifikasi');
    })->name('operator-notifikasi');

    Route::get('/chatting', function () {
        return view('operator.chatting');
    })->name('operator-chatting');

    Route::get('/chatting/{id_user}', function ($id_user) {
        return view('operator.chatting');
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
