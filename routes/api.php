<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use Illuminate\Http\Request;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/c', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();   
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/upload', [FileController::class, 'upload'])->middleware('auth:sanctum');

Route::get('/download', [FileController::class, 'download']);