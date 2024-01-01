<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class DaftarUlang extends Model
{
    use HasFactory;

    protected static function boot()
     {
         parent::boot();
     
         static::creating(function ($daftarUlang) {
             if (!$daftarUlang->id) {
                 $timestamp = now()->format('YmdHis');
                 $daftarUlang->id = 'B-' . $timestamp . '-' . Str::random(5);
             }
         });
     }

    protected $table = 'daftar_ulang';

    protected $fillable = [
        'user_id',
        'category_id',
        'statusDokumen_id',
        'longtitude',
        'latitude',
        'lokasi',
        'dokumen_survey',
        'Super_Daftar_Ulang',
        'SK_Izin_Pendirian',
        'SK_Izin_Operasional',
        'Akta_Notaris',
        'Surat_IMB',
        'Data_Anak_Dididk',
        'Data_Pendidik',
        'Rencana_Jadwal',
        'Fotokopi_Rekening',
        'Super_Bermaterai',
        'Piagam_Akreditasi',
        'BPJS',
        'Data_Daya_Tampung',
        'Doc_Milik_Lahan',
        'Doc_Bukti_Hukum',
        'created_at',
        'updated_at',
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
