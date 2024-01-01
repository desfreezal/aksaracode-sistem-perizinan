<?php

namespace App\Models;

use App\Mail\OtpMail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasRoles ,HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'telepon',
        'email',
        'username',
        'password',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'kecamatan',
        'kelurahan',
        'kabupaten',
        'provinsi',
        'alamat',
        'pekerjaan',
        'otp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function sendOtpMail()
    {
        $otp = $this->generateOtp();
        $this->update(['otp' => $otp]);

        try {
            Mail::to($this->email)->send(new OtpMail($this->name, $otp));
        } catch (\Exception $e) {
            // Handle the exception if needed
            // You might want to log the error or perform other actions
        }
    }

    public function markEmailAsVerified()
    {
        $this->forceFill([
            'email_verified_at' => $this->freshTimestamp(),
            'otp' => null,
        ])->save();
    }

    /**
     * Generate a 4-digit OTP.
     *
     * @return int
     */
    private function generateOtp()
    {
        // Implementasikan logika pembuatan 4-digit OTP sesuai kebutuhan
        return rand(1000, 9999);
    }
}