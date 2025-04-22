<?php

use App\Http\Controllers\Api\V1\AlumnController;
use App\Http\Controllers\Api\V1\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(
    function (): void {
        Route::controller(AuthController::class)
            ->prefix('auth')
            ->name('auth.')
            ->group(
                function (): void {
                    Route::get('/login', 'loginWithToken')->name('token.login');
                    Route::post('/request-login-link', 'sendLoginLink')->name('request.link');
                }
            );
        Route::controller(AlumnController::class)
            ->prefix('alumn')
            ->name('alumn.')
            ->middleware('auth:api')
            ->group(
                function (): void {
                    Route::get('', 'indexAlumni')->name('index');
                }
            );
    }
);
