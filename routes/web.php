<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarSelectController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ClientController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/client', [ClientController::class, 'get_client']);
Route::get('/car', [CarSelectController::class, 'car_select']);
Route::get('/trip', [TripController::class, 'trip_select']);
Route::get('/map', [MapController::class, 'getNonZeroPositions']);

?>