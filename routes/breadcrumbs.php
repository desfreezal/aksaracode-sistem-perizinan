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
    $trail->parent('pemohon-beranda')->push('Ajukan Permohonan')->push('Ajukan Permohonan', route('pemohon-dashboard'));
});

Breadcrumbs::for('pemohon-detail-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('pemohon-daftar-ulang')->push('Daftar Ulang ' . strtoupper($peruntukan), route('pemohon-detail'));
});

Breadcrumbs::for('pemohon-berkas-daftar', function (Generator $trail, $peruntukan) {
    $trail->parent('pemohon-detail-daftar', strtoupper($peruntukan))->push('Upload Persyaratan ' . strtoupper($peruntukan), route('pemohon-berkas'));
});
