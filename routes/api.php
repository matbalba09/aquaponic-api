<?php

use App\Http\Controllers\HeartbeatController;
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

    
    Route::group(['middleware' => ['auth:sanctum']], function () {
    });
    
    // Route::get('/example', function () {
    //     return response()->json(['message' => 'This is an example API route'], 200);
    // });
});
