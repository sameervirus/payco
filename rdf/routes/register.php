<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store']);
    Route::get('register/verify/{email}', [RegisterController::class, 'verify'])-> name('verify');
    Route::post('register/verify/{email}', [RegisterController::class, 'update']);
    Route::get('register/password/{email}', [RegisterController::class, 'password'])-> name('password');
    Route::post('register/password/{email}', [RegisterController::class, 'finish']);

    Route::post('email-notification', [RegisterController::class, 'resend'])
                ->middleware('throttle:6,1')
                ->name('resend-code');

});
