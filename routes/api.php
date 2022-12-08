<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\VideomateriController;
use App\Http\Controllers\Api\ModulController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('videomateri', VideomateriController::class);
Route::apiResource('modul', ModulController::class);


// Route::get('/videomateri', [VideomateriController::class, 'index']);
// Route::get('/videomateri/{id}', [VideomateriController::class, 'show']);
// Route::post('/videomateri-create', [VideomateriController::class, 'store']);
