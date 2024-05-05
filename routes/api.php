<?php

use App\Http\Controllers\HeartbeatController;
use App\Http\Controllers\IrrigationMonitorController;
use App\Http\Controllers\UserController;
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

Route::prefix('v1')->group(function () {

    Route::get('Heartbeat', [HeartbeatController::class, 'Heartbeat']);

    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);

    Route::prefix('irrigationMonitor')->group(function () {
        Route::get('/', [IrrigationMonitorController::class, 'index']);
        Route::get('{id}', [IrrigationMonitorController::class, 'getById']);
        Route::post('create/{temp}/{ec}/{ppm}/{ph}', [IrrigationMonitorController::class, 'create']);

        Route::get('getAllTemp', [IrrigationMonitorController::class, 'getAllTemp']);
        Route::get('getAllEc', [IrrigationMonitorController::class, 'getAllEc']);
        Route::get('getAllPpm', [IrrigationMonitorController::class, 'getAllPpm']);
        Route::get('getAllPh', [IrrigationMonitorController::class, 'getAllPh']);
    });
    
    Route::group(['middleware' => ['auth:sanctum']], function () {
    });
    
    // Route::get('/example', function () {
    //     return response()->json(['message' => 'This is an example API route'], 200);
    // });
});
