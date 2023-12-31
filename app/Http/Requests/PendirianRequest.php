<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendirianRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category' => 'string',
            'longtitude' => 'string',
            'latitude' => 'string',
            'lokasi' => 'string',
            'dokumen_survey' => 'file|mimes:jpg,jpeg,png,pdf',
            'KTP' => 'file|mimes:jpg,jpeg,png,pdf',
            'BPJS' => 'file|mimes:jpg,jpeg,png,pdf',
            'Pas_Foto' => 'file|mimes:jpg,jpeg,png,pdf',
            'Fotokopi_Rekening' => 'file|mimes:jpg,jpeg,png,pdf',
            'Akta_Notaris' => 'file|mimes:jpg,jpeg,png,pdf',
            'Akta_Pendirian' => 'file|mimes:jpg,jpeg,png,pdf',
            'Surat_Permohonan' => 'file|mimes:jpg,jpeg,png,pdf',
            'Surat_IMB' => 'file|mimes:jpg,jpeg,png,pdf',
            'Super_Bermaterai' => 'file|mimes:jpg,jpeg,png,pdf',
            'Data_Pendidik' => 'file|mimes:jpg,jpeg,png,pdf',
            'Data_Tenaga_Administrasi' => 'file|mimes:jpg,jpeg,png,pdf',
            'SK_Angkat_Pendidik' => 'file|mimes:jpg,jpeg,png,pdf',
            'SK_Kelurahan' => 'file|mimes:jpg,jpeg,png,pdf',
            'SK_Kecamatan' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_Biaya_Operasional' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_Rencana_Kegiatan' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_RKAS' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_RAPBTK' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_Status_Tanah' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_Milik_Tanah' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_ANDALALIN' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_UKL_UPL' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_RIPS' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_Kurikulum' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_Silabus' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_Organisasi' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Kelas' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Perpustakaan' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Laboratorium' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Kepsek' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Ibadah' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Konseling' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Uks' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Osis' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Toilet' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Gudang' => 'file|mimes:jpg,jpeg,png,pdf',
            'denah_peta' => 'file|mimes:jpg,jpeg,png,pdf',
            'keaslian_berkas' => 'file|mimes:jpg,jpeg,png,pdf',
            'radius_jarak' => 'file|mimes:jpg,jpeg,png,pdf',
            'surat_tidak_keberatan' => 'file|mimes:jpg,jpeg,png,pdf',
            'surat_tidak_sengketa' => 'file|mimes:jpg,jpeg,png,pdf',
            'sarana_prasarana' => 'file|mimes:jpg,jpeg,png,pdf',
            'R_Sirkulasi' => 'file|mimes:jpg,jpeg,png,pdf',
            'tempat_bermain_berolahraga' => 'file|mimes:jpg,jpeg,png,pdf',
            'kerangka_dasar_struktur_kurikulum' => 'file|mimes:jpg,jpeg,png,pdf',
            'beban_belajar' => 'file|mimes:jpg,jpeg,png,pdf',
            'kalender' => 'file|mimes:jpg,jpeg,png,pdf',
            'tata_tertib' => 'file|mimes:jpg,jpeg,png,pdf',
            'data_kepala_sekolah' => 'file|mimes:jpg,jpeg,png,pdf',
            'sk_pengangkatan_kepala_sekolah' => 'file|mimes:jpg,jpeg,png,pdf',
            'data_instruktur' => 'file|mimes:jpg,jpeg,png,pdf',
            'sumber_pendanaan' => 'file|mimes:jpg,jpeg,png,pdf',
            'biaya_personal' => 'file|mimes:jpg,jpeg,png,pdf',
        ];
    }
}
