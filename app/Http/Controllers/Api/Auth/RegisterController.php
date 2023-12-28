<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        try {
            // Buat pengguna
            $user = User::create([
                'name' => $request->input('name'),
                'telepon' => $request->input('telepon'),
                'email' => $request->input('email'),
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('password')),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'kecamatan' => $request->input('kecamatan'),
                'kelurahan' => $request->input('kelurahan'),
                'alamat' => $request->input('alamat'),
                'pekerjaan' => $request->input('pekerjaan'),
            ]);

            $user->assignRole("pemohon");

            $user->sendEmailVerificationNotification();

            $roles = $user->getRoleNames();

        return response()->json(['user' => $user, 'message' => 'User registered successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
