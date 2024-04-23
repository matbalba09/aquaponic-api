<?php

use App\Http\Controllers\HeartbeatController;
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

    Route::get('/example', function () {
        return response()->json(['message' => 'This is an example API route'], 200);
    });

    Route::group(['middleware' => ['auth:sanctum']], function () {
    });
});
