<?php

use Rawilk\Breadcrumbs\Facades\Breadcrumbs;
use Rawilk\Breadcrumbs\Support\Generator;

// for ajukan permohonan
Breadcrumbs::for('pemohon-beranda', function (Generator $trail) {
    $trail->push('Beranda', route('pemohon-dashboard'));
});

Breadcrumbs::for('pemohon-dashboard', function (Generator $trail) {
    $trail->parent('pemohon-beranda')->push('Ajukan Permohonan')->push('Ajukan Permohonan', route('pemohon-dashboard'));
});

Breadcrumbs::for('pemohon-daftar-ulang', function (Generator $trail) {
    $trail->parent('pemohon-beranda')->push('Ajukan Permohonan', route('pemohon-pengajuan-permohonan'))->push('Data Pemohon');
});

Breadcrumbs::for('pemohon-detail-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('pemohon-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('pemohon-detail'));
});

Breadcrumbs::for('pemohon-berkas-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('pemohon-detail-daftar', strtoupper($peruntukan))->push('Upload Persyaratan ' . strtoupper($peruntukan), route('pemohon-berkas'));
});

// for pemohon-izin-pendirian
Breadcrumbs::for('pemohon-izin-pendirian', function (Generator $trail, $peruntukan) {
    $trail->parent('pemohon-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('pemohon-izin-pendirian'));
});

// for pemohon-izin-pendirian
Breadcrumbs::for('pemohon-izin-pendirian-berkas', function (Generator $trail, $peruntukan) {
    $exploded = explode(' ', $peruntukan); // Split the string using ',' as the delimiter
    $firstElement = $exploded[0];
    $trail->parent('pemohon-daftar-ulang')->push('Permohonan Pendirian ' . strtoupper($firstElement), route('pemohon-upload-berkas'));
});

Breadcrumbs::for('pemohon-detail-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('pemohon-daftar-ulang')->push('Permohonan Izin Operasional ' . strtoupper($peruntukan), route('pemohon-izin-operasional'));
});

Breadcrumbs::for('pemohon-berkas-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('pemohon-detail-operasional', $peruntukan)->push('Upload Persyaratan Izin Operasional ' . strtoupper($peruntukan));
});

// ADMIN DINAS
Breadcrumbs::for('admin-dinas-beranda', function (Generator $trail) {
    $trail->push('Beranda', route('admin-dinas-dashboard'));
});

Breadcrumbs::for('admin-dinas-dashboard', function (Generator $trail) {
    $trail->parent('admin-dinas-beranda')->push('Ajukan Permohonan')->push('Ajukan Permohonan', route('admin-dinas-dashboard'));
});

Breadcrumbs::for('admin-dinas-daftar-ulang', function (Generator $trail) {
    $trail->parent('admin-dinas-beranda')->push('Ajukan Permohonan', route('admin-dinas-pengajuan-permohonan'))->push('Data Pemohon');
});

Breadcrumbs::for('admin-dinas-detail-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('admin-dinas-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('admin-dinas-detail'));
});

Breadcrumbs::for('admin-dinas-berkas-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('admin-dinas-detail-daftar', strtoupper($peruntukan))->push('Upload Persyaratan ' . strtoupper($peruntukan), route('admin-dinas-berkas'));
});

// for admin-dinas-izin-pendirian
Breadcrumbs::for('admin-dinas-izin-pendirian', function (Generator $trail, $peruntukan) {
    $trail->parent('admin-dinas-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('admin-dinas-izin-pendirian'));
});

// for admin-dinas-izin-pendirian
Breadcrumbs::for('admin-dinas-izin-pendirian-berkas', function (Generator $trail, $peruntukan) {
    $exploded = explode(' ', $peruntukan); // Split the string using ',' as the delimiter
    $firstElement = $exploded[0];
    $trail->parent('admin-dinas-daftar-ulang')->push('Permohonan Pendirian ' . strtoupper($firstElement), route('admin-dinas-upload-berkas'));
});

Breadcrumbs::for('admin-dinas-detail-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('admin-dinas-daftar-ulang')->push('Permohonan Izin Operasional ' . strtoupper($peruntukan), route('admin-dinas-izin-operasional'));
});

Breadcrumbs::for('admin-dinas-berkas-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('admin-dinas-detail-operasional', $peruntukan)->push('Upload Persyaratan Izin Operasional ' . strtoupper($peruntukan));
});