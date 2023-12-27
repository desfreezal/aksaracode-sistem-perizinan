<?php
namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VerificationApiController extends Controller
{

public function verify(Request $request, $id, $hash)
{
    $user = \App\Models\User::findOrFail($id);

    if (!$user->hasVerifiedEmail() && $user->markEmailAsVerified()) {
        event(new Verified($user));
        return redirect('/')->with('verified', true);
    }

    return redirect('/')->with('verified', true);
}


    public function resend()
    {
        if (auth()->user()->hasVerifiedEmail()) {
            return response()->json(['message' => 'Email already verified']);
        }

        auth()->user()->sendEmailVerificationNotification();

        return response()->json(['message' => 'Verification email resent']);
    }
}
