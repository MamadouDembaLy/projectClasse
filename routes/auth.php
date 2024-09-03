<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('Admin/register', [RegisteredUserController::class, 'create'])
                ->name('admin.register');

    Route::post('Admin/register', [RegisteredUserController::class, 'store']);

    Route::get('Admin/login', [AuthenticatedSessionController::class, 'create'])
                ->name('admin.login');

    Route::post('Admin/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('Admin/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('admin.password.request');

    Route::post('Admin/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('admin.password.email');

    Route::get('Admin/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('admin.password.reset');

    Route::post('Admin/reset-password', [NewPasswordController::class, 'store'])
                ->name('admin.password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('Admin/verify-email', EmailVerificationPromptController::class)
                ->name('admin.verification.notice');

    Route::get('Admin/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('admin.verification.verify');

    Route::post('Admin/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('admin.verification.send');

    Route::get('Admin/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('admin.password.confirm');

    Route::post('Admin/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('Admin/password', [PasswordController::class, 'update'])->name('admin.password.update');

    Route::post('Admin/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('admin.logout');
});


