<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\VideomateriController;
use App\Http\Controllers\Api\ModulController;
use App\Http\Controllers\Api\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum', 'role:Admin')->group(function () {
    Route::apiResource('videomateri', VideomateriController::class);
    Route::apiResource('modul', ModulController::class);
});

// Route::get('/videomateri', [VideomateriController::class, 'index']);
// Route::get('/videomateri/{id}', [VideomateriController::class, 'show']);
// Route::post('/videomateri-create', [VideomateriController::class, 'store']);
// Route::put('/videomateri/{id}', [VideomateriController::class, 'update']);
// Route::delete('/videomateri/{id}', [VideomateriController::class, 'destroy']);


// Auth Register RestAPI
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
