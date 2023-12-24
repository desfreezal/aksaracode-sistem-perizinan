<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\VerificationApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

    Route::post('/register', [RegisterController::class, 'register']);
    // Route::post('/login', 'Api\LoginApiController@login');
    // Route::post('/logout', 'Api\LoginApiController@logout')->middleware('auth:sanctum');

    // Email verification routes
    Route::post('/email/verify/{id}/{hash}', [VerificationApiController::class, 'verify'])->name('verification.verify');
    // Route::post('/email/resend', 'Api\VerificationApiController@resend')->name('verification.resend');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


