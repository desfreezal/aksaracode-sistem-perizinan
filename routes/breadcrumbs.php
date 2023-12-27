<?php

use Rawilk\Breadcrumbs\Facades\Breadcrumbs;
use Rawilk\Breadcrumbs\Support\Generator;

// for ajukan permohonan
Breadcrumbs::for('pemohon-dashboard', function (Generator $trail) {
    $trail->push('Beranda')->push('Ajukan Permohonan')->push('Ajukan Permohonan', route('pemohon-dashboard'));
});
