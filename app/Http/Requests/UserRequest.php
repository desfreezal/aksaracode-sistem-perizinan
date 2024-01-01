<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'string|max:255',
            'telepon' => 'string|max:15',
            'email' => 'string|email|max:255',
            'username' => 'string|max:255|unique:users,username,' . auth()->id(),
            'tempat_lahir' => 'string|max:255',
            'tanggal_lahir' => 'date',
            'jenis_kelamin' => 'string|in:Laki-laki,Perempuan',
            'kecamatan' => 'string|max:255',
            'kelurahan' => 'string|max:255',
            'kabupaten' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'alamat' => 'string|max:255',
            'pekerjaan' => 'string|max:255',
        ];
    }
}
