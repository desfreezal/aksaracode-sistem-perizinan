<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'username' => 'admin',
            'email' => 'admin@perizinan.com',
            'password' => bcrypt('admin123'),
        ]);
        $admin->assignRole('admin-utama');


        $dinas = User::create([
            'name' => 'dinas Role',
            'username' => 'dinas',
            'email' => 'dinas@perizinan.com',
            'password' => bcrypt('dinas123'),
        ]);
        $dinas->assignRole('dinas');

        $walikota = User::create([
            'name' => 'walikota Role',
            'username' => 'walikota',
            'email' => 'walikota@perizinan.com',
            'password' => bcrypt('walikota123'),
        ]);
        $walikota->assignRole('walikota');

        $kepala_dinas = User::create([
            'name' => 'kepala-dinas Role',
            'username' => 'kepala-dinas',
            'email' => 'kepala_dinas@perizinan.com',
            'password' => bcrypt('kepaladinas123'),
        ]);
        $kepala_dinas->assignRole('kepala-dinas');

        $verifikator = User::create([
            'name' => 'verifikator Role',
            'username' => 'verifikator',
            'email' => 'verifikator@perizinan.com',
            'password' => bcrypt('verifikator123'),
        ]);
        $verifikator->assignRole('penyelia');

        $surveyor = User::create([
            'name' => 'surveyor Role',
            'username' => 'surveyor',
            'email' => 'surveyor@perizinan.com',
            'password' => bcrypt('surveyor123'),
        ]);
        $surveyor->assignRole('surveyor');

        $auditor = User::create([
            'name' => 'auditor Role',
            'username' => 'auditor',
            'email' => 'auditor@perizinan.com',
            'password' => bcrypt('auditor123'),
        ]);
        $auditor->assignRole('auditor');

        $operator = User::create([
            'name' => 'operator Role',
            'username' => 'operator',
            'email' => 'operator@perizinan.com',
            'password' => bcrypt('operator123'),
        ]);
        $operator->assignRole('operator');

        $pemohon = User::create([
            'name' => 'pemohon Role',
            'username' => 'pemohon',
            'email' => 'pemohon@perizinan.com',
            'password' => bcrypt('pemohon123'),
        ]);
        $pemohon->assignRole('pemohon');

    }
}