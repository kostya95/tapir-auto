<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::prefix('auto')->group(function () {
    Route::get('/', [VehicleController::class, 'index']);
    Route::post('/import', [VehicleController::class, 'import']);
});
