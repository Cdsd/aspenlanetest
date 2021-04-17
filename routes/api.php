<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\UserController;

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

Route::post('register', [UserController::class, 'register'])->name("api_register_user");
Route::post('login', [UserController::class, 'login'])->name("api_login_user");

Route::get('/locations', [LocationController::class,'index'])->name('location.index');
Route::get('/location/{id}', [LocationController::class,'show'])->name('location.show');
Route::middleware('auth:api')->group(function () {
    Route::post('/location', [LocationController::class,'store'])->name('location.store');
});