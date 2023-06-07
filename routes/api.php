<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Mapping for User
|--------------------------------------------------------------------------
*/

// php artisan make::controller Api/[name of the api]
Route::get('user', [UserController::class, 'index']);
Route::get('user/{id}', [UserController::class, 'show']);
Route::post('user',[UserController::class, 'store']);
// update all fields
Route::put('user/{id}',[UserController::class, 'update']);
// Update only of the fields
Route::patch('user/{id}',[UserController::class, 'update']);
// change this to update visible in user table
Route::delete('user/{id}',[UserController::class, 'destroy']);
