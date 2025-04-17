<?php

use App\Http\Controllers\Api\V1\AlumnController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(
    function (): void {
        Route::controller(AlumnController::class)
            ->prefix('alumn')
            ->name('alumn.')
            ->group(
                function (): void {
                    Route::get('', 'indexAlumni')->name('index');
                }
            );
    }
);

Route::get('/test', function () {
    return 'ok';
});
