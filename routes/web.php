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
