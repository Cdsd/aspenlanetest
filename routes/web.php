<?php

//use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum','verified'])->get('/',[BaseController::class,'index'])->name('dashboard');
Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/',[BaseController::class,'index'])->name('dashboard');
    Route::post('/location/create',[BaseController::class,'createLocation'])->name('location.create');
});