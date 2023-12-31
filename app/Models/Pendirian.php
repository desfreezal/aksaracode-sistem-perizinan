<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Pendirian extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected static function boot()
     {
         parent::boot();
     
         static::creating(function ($pendirian) {
             if (!$pendirian->id) {
                 $timestamp = now()->format('YmdHis');
                 $pendirian->id = 'A-' . $timestamp;
             }
         });
     }
    protected $table = 'pendirian';

    protected $fillable = [
        'user_id',
        'category_id',
        'statusDokumen_id',
        'longtitude',
        'latitude',
        'lokasi',
        'dokumen_survey',
        'KTP',
        'BPJS',
        'Pas_Foto',
        'Fotokopi_Rekening',
        'Akta_Notaris',
        'Akta_Pendirian',
        'Surat_Permohonan',
        'Surat_IMB',
        'Super_Bermaterai',
        'Data_Pendidik',
        'Data_Tenaga_Administrasi',
        'SK_Angkat_Pendidik',
        'SK_Kelurahan',
        'SK_Kecamatan',
        'Doc_Biaya_Operasional',
        'Doc_Rencana_Kegiatan',
        'Doc_RKAS',
        'Doc_RAPBTK',
        'Doc_Status_Tanah',
        'Doc_Milik_Tanah',
        'Doc_ANDALALIN',
        'Doc_UKL_UPL',
        'Doc_RIPS',
        'Doc_Kurikulum',
        'Doc_Silabus',
        'Doc_Organisasi',
        'R_Kelas',
        'R_Perpustakaan',
        'R_Laboratorium',
        'R_Kepsek',
        'R_Ibadah',
        'R_Konseling',
        'R_Uks',
        'R_Osis',
        'R_Toilet',
        'R_Gudang',
        'denah_peta',
        'radius_jarak',
        'surat_tidak_keberatan',
        'surat_tidak_sengketa',
        'sarana_prasarana',
    ];

    public $incrementing = false; 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $hidden = ['user'];

    protected $casts = [
        'id' => 'string',
    ];
}