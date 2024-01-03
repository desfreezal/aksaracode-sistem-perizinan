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
    $trail->parent('pemohon-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('izin-pendirian'));
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


// OPERATOR
Breadcrumbs::for('operator-beranda', function (Generator $trail) {
    $trail->push('Beranda', route('operator-dashboard'));
});

Breadcrumbs::for('operator-dashboard', function (Generator $trail) {
    $trail->parent('operator-beranda')->push('Ajukan Permohonan')->push('Ajukan Permohonan', route('operator-dashboard'));
});

Breadcrumbs::for('operator-daftar-ulang', function (Generator $trail) {
    $trail->parent('operator-beranda')->push('Ajukan Permohonan', route('operator-pengajuan-permohonan'))->push('Data Pemohon');
});

Breadcrumbs::for('operator-detail-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('operator-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('operator-detail'));
});

Breadcrumbs::for('operator-berkas-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('operator-detail-daftar', strtoupper($peruntukan))->push('Upload Persyaratan ' . strtoupper($peruntukan), route('operator-berkas'));
});

// for operator-izin-pendirian
Breadcrumbs::for('operator-izin-pendirian', function (Generator $trail, $peruntukan) {
    $trail->parent('operator-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('operator-izin-pendirian'));
});

// for operator-izin-pendirian
Breadcrumbs::for('operator-izin-pendirian-berkas', function (Generator $trail, $peruntukan) {
    $exploded = explode(' ', $peruntukan); // Split the string using ',' as the delimiter
    $firstElement = $exploded[0];
    $trail->parent('operator-daftar-ulang')->push('Permohonan Pendirian ' . strtoupper($firstElement), route('operator-upload-berkas'));
});

Breadcrumbs::for('operator-detail-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('operator-daftar-ulang')->push('Permohonan Izin Operasional ' . strtoupper($peruntukan), route('operator-izin-operasional'));
});

Breadcrumbs::for('operator-berkas-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('operator-detail-operasional', $peruntukan)->push('Upload Persyaratan Izin Operasional ' . strtoupper($peruntukan));
});

// VERIFIKATOR //
Breadcrumbs::for('verifikator-beranda', function (Generator $trail) {
    $trail->push('Beranda', route('penyelia-dashboard'));
});

Breadcrumbs::for('penyelia-dashboard', function (Generator $trail) {
    $trail->parent('verifikator-beranda')->push('Ajukan Permohonan')->push('Ajukan Permohonan', route('penyelia-dashboard'));
});

Breadcrumbs::for('verifikator-daftar-ulang', function (Generator $trail) {
    $trail->parent('verifikator-beranda')->push('Ajukan Permohonan', route('verifikator-pengajuan-permohonan'))->push('Data Pemohon');
});

Breadcrumbs::for('verifikator-detail-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('verifikator-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('verifikator-detail'));
});

Breadcrumbs::for('verifikator-berkas-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('verifikator-detail-daftar', strtoupper($peruntukan))->push('Upload Persyaratan ' . strtoupper($peruntukan), route('verifikator-berkas'));
});

// for verifikator-izin-pendirian
Breadcrumbs::for('verifikator-izin-pendirian', function (Generator $trail, $peruntukan) {
    $trail->parent('verifikator-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('verifikator-izin-pendirian'));
});

// for verifikator-izin-pendirian
Breadcrumbs::for('verifikator-izin-pendirian-berkas', function (Generator $trail, $peruntukan) {
    $exploded = explode(' ', $peruntukan); // Split the string using ',' as the delimiter
    $firstElement = $exploded[0];
    $trail->parent('verifikator-daftar-ulang')->push('Permohonan Pendirian ' . strtoupper($firstElement), route('verifikator-upload-berkas'));
});

Breadcrumbs::for('verifikator-detail-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('verifikator-daftar-ulang')->push('Permohonan Izin Operasional ' . strtoupper($peruntukan), route('verifikator-izin-operasional'));
});

Breadcrumbs::for('verifikator-berkas-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('verifikator-detail-operasional', $peruntukan)->push('Upload Persyaratan Izin Operasional ' . strtoupper($peruntukan));
});

// surveyor //
Breadcrumbs::for('surveyor-beranda', function (Generator $trail) {
    $trail->push('Beranda', route('surveyor-dashboard'));
});

Breadcrumbs::for('surveyor-dashboard', function (Generator $trail) {
    $trail->parent('surveyor-beranda')->push('Ajukan Permohonan')->push('Ajukan Permohonan', route('surveyor-dashboard'));
});

Breadcrumbs::for('surveyor-daftar-ulang', function (Generator $trail) {
    $trail->parent('surveyor-beranda')->push('Ajukan Permohonan', route('surveyor-pengajuan-permohonan'))->push('Data Pemohon');
});

Breadcrumbs::for('surveyor-detail-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('surveyor-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('surveyor-detail'));
});

Breadcrumbs::for('surveyor-berkas-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('surveyor-detail-daftar', strtoupper($peruntukan))->push('Upload Persyaratan ' . strtoupper($peruntukan), route('surveyor-berkas'));
});

// for surveyor-izin-pendirian
Breadcrumbs::for('surveyor-izin-pendirian', function (Generator $trail, $peruntukan) {
    $trail->parent('surveyor-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('surveyor-izin-pendirian'));
});

// for surveyor-izin-pendirian
Breadcrumbs::for('surveyor-izin-pendirian-berkas', function (Generator $trail, $peruntukan) {
    $exploded = explode(' ', $peruntukan); // Split the string using ',' as the delimiter
    $firstElement = $exploded[0];
    $trail->parent('surveyor-daftar-ulang')->push('Permohonan Pendirian ' . strtoupper($firstElement), route('surveyor-upload-berkas'));
});

Breadcrumbs::for('surveyor-detail-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('surveyor-daftar-ulang')->push('Permohonan Izin Operasional ' . strtoupper($peruntukan), route('surveyor-izin-operasional'));
});

Breadcrumbs::for('surveyor-berkas-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('surveyor-detail-operasional', $peruntukan)->push('Upload Persyaratan Izin Operasional ' . strtoupper($peruntukan));
});


// kepala-dinas //
Breadcrumbs::for('kepala-dinas-beranda', function (Generator $trail) {
    $trail->push('Beranda', route('kepala-dinas-dashboard'));
});

Breadcrumbs::for('kepala-dinas-dashboard', function (Generator $trail) {
    $trail->parent('kepala-dinas-beranda')->push('Ajukan Permohonan')->push('Ajukan Permohonan', route('kepala-dinas-dashboard'));
});

Breadcrumbs::for('kepala-dinas-daftar-ulang', function (Generator $trail) {
    $trail->parent('kepala-dinas-beranda')->push('Ajukan Permohonan', route('kepala-dinas-pengajuan-permohonan'))->push('Data Pemohon');
});

Breadcrumbs::for('kepala-dinas-detail-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('kepala-dinas-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('kepala-dinas-detail'));
});

Breadcrumbs::for('kepala-dinas-berkas-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('kepala-dinas-detail-daftar', strtoupper($peruntukan))->push('Upload Persyaratan ' . strtoupper($peruntukan), route('kepala-dinas-berkas'));
});

// for kepala-dinas-izin-pendirian
Breadcrumbs::for('kepala-dinas-izin-pendirian', function (Generator $trail, $peruntukan) {
    $trail->parent('kepala-dinas-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('kepala-dinas-izin-pendirian'));
});

// for kepala-dinas-izin-pendirian
Breadcrumbs::for('kepala-dinas-izin-pendirian-berkas', function (Generator $trail, $peruntukan) {
    $exploded = explode(' ', $peruntukan); // Split the string using ',' as the delimiter
    $firstElement = $exploded[0];
    $trail->parent('kepala-dinas-daftar-ulang')->push('Permohonan Pendirian ' . strtoupper($firstElement), route('kepala-dinas-upload-berkas'));
});

Breadcrumbs::for('kepala-dinas-detail-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('kepala-dinas-daftar-ulang')->push('Permohonan Izin Operasional ' . strtoupper($peruntukan), route('kepala-dinas-izin-operasional'));
});

Breadcrumbs::for('kepala-dinas-berkas-operasional', function (Generator $trail, $peruntukan) {
    $trail->parent('kepala-dinas-detail-operasional', $peruntukan)->push('Upload Persyaratan Izin Operasional ' . strtoupper($peruntukan));
});