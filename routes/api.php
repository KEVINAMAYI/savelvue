<?php

use App\Http\Controllers\Auth\ActivationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [RegistrationController::class, 'register']);
Route::post('/activate', [ActivationController::class, 'activate']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/send-password-reset-code', [ForgotPasswordController::class, 'sendPasswordResetCode']);
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout']);
});

//Trying to access a non-existing page
Route::fallback(function () {
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact info@techqast.co.ke'], 404);
});
