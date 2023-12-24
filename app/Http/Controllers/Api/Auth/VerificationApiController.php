<?php
namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationApiController extends Controller
{
    public function verify(EmailVerificationRequest $request)
    {
        $this->verifyEmail($request->route('id'), $request->route('hash'));

        return response()->json(['message' => 'Email verified successfully']);
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
