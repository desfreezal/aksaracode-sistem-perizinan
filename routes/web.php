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

Route::get('/dashboard-pemohon/lacak-permohonan', function () {
    return view('pemohon.lacak-permohonan');
});

Route::get('/dashboard-pemohon/status-permohonan', function () {
    return view('pemohon.status-permohonan');
});

Route::get('/dashboard-pemohon/profile', function () {
    return view('pemohon.profile');
});

Route::get('/dashboard-pemohon/riwayat', function () {
    return view('pemohon.riwayat-permohonan');
});

Route::get('/dashboard-pemohon/notifikasi', function () {
    return view('pemohon.notifikasi');
});

Route::get('/dashboard-pemohon/chatting', function () {
    return view('pemohon.chatting');
});

Route::get('/dashboard-pemohon/chatting/{id_user}', function ($id_user) {
    return view('pemohon.chatting');
});

Route::get('/dashboard-pemohon/daftar-ulang/data', function () {
    return view('pemohon.daftar-ulang.daftar');
});

Route::get('/dashboard-pemohon/daftar-ulang/detail', function () {
    return view('pemohon.daftar-ulang.detail');
})->name('detail');
