<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperasionalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Sesuaikan dengan kebijakan otorisasi Anda
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'longtitude' => 'nullable|string',
            'latitude' => 'nullable|string',
            'lokasi' => 'nullable|string',
            'dokumen_survey' => 'file|mimes:jpg,jpeg,png,pdf',
            'Super_Izin_Operasional' => 'file|mimes:jpg,jpeg,png,pdf',
            'Struk_Organisasi' => 'file|mimes:jpg,jpeg,png,pdf',
            'Akta_Notaris' => 'file|mimes:jpg,jpeg,png,pdf',
            'Surat_IMB' => 'file|mimes:jpg,jpeg,png,pdf',
            'Akta_Pendirian' => 'file|mimes:jpg,jpeg,png,pdf',
            'Super_Bermaterai' => 'file|mimes:jpg,jpeg,png,pdf',
            'Data_Anak_Dididk' => 'file|mimes:jpg,jpeg,png,pdf',
            'Data_Pendidik' => 'file|mimes:jpg,jpeg,png,pdf',
            'Rencana_Jadwal' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_Milik_Lahan' => 'file|mimes:jpg,jpeg,png,pdf',
            'Doc_Bukti_Hukum' => 'file|mimes:jpg,jpeg,png,pdf',
            'BPJS' => 'file|mimes:jpg,jpeg,png,pdf',
            'Fotokopi_Rekening' => 'file|mimes:jpg,jpeg,png,pdf',
            'Data_Daya_Tampung' => 'file|mimes:jpg,jpeg,png,pdf',
            'SK_Izin_Pendirian' => 'file|mimes:jpg,jpeg,png,pdf',
            'Piagam_Akreditasi' => 'file|mimes:jpg,jpeg,png,pdf',
        ];
    }
}
