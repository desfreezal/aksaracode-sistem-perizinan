<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Operasional extends Model
{
    use HasFactory;

    protected static function boot()
     {
         parent::boot();
     
         static::creating(function ($daftarUlang) {
             if (!$daftarUlang->id) {
                 $timestamp = now()->format('YmdHis');
                 $daftarUlang->id = 'C-' . $timestamp . '-' . Str::random(5);
             }
         });
     }

    protected $table = 'operasional';

    protected $fillable = [
        'user_id',
        'category_id',
        'statusDokumen_id',
        'longtitude',
        'latitude',
        'lokasi',
        'dokumen_survey',
        'Super_Izin_Operasional',
        'Struk_Organisasi',
        'Akta_Notaris',
        'Surat_IMB',
        'Akta_Pendirian',
        'Super_Bermaterai',
        'Data_Anak_Dididk',
        'Data_Pendidik',
        'Rencana_Jadwal',
        'Doc_Milik_Lahan',
        'Doc_Bukti_Hukum',
        'BPJS',
        'Fotokopi_Rekening',
        'Data_Daya_Tampung',
        'SK_Izin_Pendirian',
        'Piagam_Akreditasi',
        'Foto_Kepala_Yayasan',
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
