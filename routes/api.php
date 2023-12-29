<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\VerificationApiController;
use App\Http\Controllers\Api\DaftarUlangController;
use App\Http\Controllers\Api\OperasionalController;
use App\Http\Controllers\Api\PendirianController;
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
    Route::post('/login', [LoginController::class, 'login']);
    // Route::post('/logout', 'Api\LoginApiController@logout')->middleware('auth:sanctum');

    // Email verification routes
    // Route::post('/email/resend', 'Api\VerificationApiController@resend')->name('verification.resend');
    
    Route::middleware('auth:sanctum')->group(function () {
    Route::post('/email/verify/{otp}', [VerificationApiController::class, 'verify']);
    
    // Pendirian
    Route::get('/pendirian', [PendirianController::class, 'getAllPendirian']);
    Route::get('/pendirian/{id}', [PendirianController::class, 'getPendirianById']);
    Route::post('/pendirian', [PendirianController::class, 'createPendirian']);
    Route::post('/pendirian/{pendirianId}', [PendirianController::class, 'updatePendirian']);
    Route::delete('/pendirian/{pendirianId}', [PendirianController::class, 'deletePendirian']);

    // Daftar Ulang
    Route::get('/daftar-ulang', [DaftarUlangController::class, 'getAllDaftarUlang']);
    Route::get('/daftar-ulang/{id}', [DaftarUlangController::class, 'getDaftarUlangById']);
    Route::post('/daftar-ulang', [DaftarUlangController::class, 'createDaftarUlang']);
    Route::post('/daftar-ulang/{id}', [DaftarUlangController::class, 'updateDaftarUlang']);
    Route::delete('/daftar-ulang/{id}', [DaftarUlangController::class, 'deleteDaftarUlang']);

    // Operasional
    Route::get('/operasional', [OperasionalController::class, 'getAllOperasional']);
    Route::get('/operasional/{id}', [OperasionalController::class, 'getOperasionalById']);
    Route::post('/operasional', [OperasionalController::class, 'createOperasional']);
    Route::post('/operasional/{id}', [OperasionalController::class, 'updateOperasional']);
    Route::delete('/operasional/{id}', [OperasionalController::class, 'deleteOperasional']);

});