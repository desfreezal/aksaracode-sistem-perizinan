<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display the authenticated user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // Menampilkan semua user
    public function index()
{
    $users = User::all();

    $usersWithRoles = $users->map(function ($user) {
        $user->getRoleNames();
    });

    return response()->json(['data' => $users]);
}


    // Menyimpan user baru
    public function store(UserRequest $request)
    {
        $validatedData = $request->validated();

        $user = User::create($validatedData);

        return response()->json(['data' => $user, 'message' => 'User created successfully'], 201);
    }

    // Menampilkan detail user
    public function show($id)
    {
        $user = User::findOrFail($id);

        return response()->json(['data' => $user]);
    }

    // Mengupdate user
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validated();

        $user->update($validatedData);

        return response()->json(['data' => $user, 'message' => 'User updated successfully']);
    }

    // Menghapus user
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }
    public function profile()
    {
        $user = Auth::user();
        return response()->json(['data' => $user]);
    }

    /**
     * Update the authenticated user's profile.
     *
     * @param \App\Http\Requests\UserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateProfile(UserRequest $request)
    {
        $user = Auth::user();
        $user->update($request->validated());

        return response()->json(['message' => 'Profile updated successfully', 'data' => $user]);
    }

    /**
     * Change the authenticated user's password.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['message' => 'Current password is incorrect'], 401);
        }

        $user->update(['password' => Hash::make($request->new_password)]);

        return response()->json(['message' => 'Password changed successfully']);
    }

}
