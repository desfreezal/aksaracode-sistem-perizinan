<?php
namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationApiController extends Controller
{


    public function verify(Request $request, $otp)
    {
        $user = Auth::user();

        if ($user && $user->otp === $otp) {
            
            $user->markEmailAsVerified();

            $user->update(['email_verified_at' => now()]);

            return response()->json(['message' => 'Email verification successful'], 200);
        }

        return response()->json(['message' => 'Invalid OTP'], 422);
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
