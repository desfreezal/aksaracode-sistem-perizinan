<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\VerificationApiController;
use App\Http\Controllers\Api\DaftarUlangController;
use App\Http\Controllers\Api\HelperController;
use App\Http\Controllers\Api\OperasionalController;
use App\Http\Controllers\Api\PendirianController;
use App\Http\Controllers\Api\UserController;
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
    Route::get('/status-dokumen', [HelperController::class, 'getStatusDokumen']);
    
    Route::middleware('auth:sanctum')->group(function () {
    Route::post('/email/verify/{otp}', [VerificationApiController::class, 'verify']);
    Route::resource('/users', UserController::class);

    Route::get('/profile', [UserController::class, 'profile']);
    Route::patch('/profile', [UserController::class, 'updateProfile']);
    Route::post('/change-password', [UserController::class, 'changePassword']);
    
    // Pendirian
    Route::get('/pendirian', [PendirianController::class, 'getAllPendirian']);
    Route::get('/pendirian/{id}', [PendirianController::class, 'getPendirianById']);
    Route::post('/pendirian', [PendirianController::class, 'createPendirian']);
    Route::post('/pendirian/{pendirianId}', [PendirianController::class, 'updatePendirian']);
    Route::delete('/pendirian/{pendirianId}', [PendirianController::class, 'deletePendirian']);
    Route::delete('/pendirian/file/{id}/{field}', [PendirianController::class, 'deleteInvalidFile']);

    // Daftar Ulang
    Route::get('/daftar-ulang', [DaftarUlangController::class, 'getAllDaftarUlang']);
    Route::get('/daftar-ulang/{id}', [DaftarUlangController::class, 'getDaftarUlangById']);
    Route::post('/daftar-ulang', [DaftarUlangController::class, 'createDaftarUlang']);
    Route::post('/daftar-ulang/{id}', [DaftarUlangController::class, 'updateDaftarUlang']);
    Route::delete('/daftar-ulang/{id}', [DaftarUlangController::class, 'deleteDaftarUlang']);
    Route::delete('/daftar-ulang/file/{id}/{field}', [DaftarUlangController::class, 'deleteInvalidFile']);

    // Operasional
    Route::get('/operasional', [OperasionalController::class, 'getAllOperasional']);
    Route::get('/operasional/{id}', [OperasionalController::class, 'getOperasionalById']);
    Route::post('/operasional', [OperasionalController::class, 'createOperasional']);
    Route::post('/operasional/{id}', [OperasionalController::class, 'updateOperasional']);
    Route::delete('/operasional/{id}', [OperasionalController::class, 'deleteOperasional']);
    Route::delete('/operasional/file/{id}/{field}', [OperasionalController::class, 'deleteInvalidFile']);

});