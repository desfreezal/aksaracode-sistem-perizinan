<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusDokumenSeeder extends Seeder
{
    public function run()
    {
        $statuses = [
            'Checking Berkas Operator',
            'Dokumen Valid',
            'Dokumen Tidak Valid',
            'Sedang Disurvey',
            'Telah Disurvey',
            'Checking Berkas Verifikator',
            'Dokumen Sesuai',
            'Dokumen Ditolak',
            'Tanda Tangan Kepala Dinas',
            'Permohonan Selesai',
        ];

        foreach ($statuses as $status) {
            DB::table('status_dokumen')->insert([
                'Name' => $status,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
