<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarSelectController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MonitorSearchController;
use App\Http\Controllers\MonitoringVideoController;
use App\Http\Controllers\MonitoringMapController;



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
// Route::get('/', [dbControl::class, 'searchTable']);
// Route::get('/client', [ClientController::class, 'get_client']);
// Route::get('/car', [CarSelectController::class, 'car_select']);
// Route::get('/trip', [TripController::class, 'trip_select']);
//Route::get('/map', [MapController::class, 'getNonZeroPositions']);
//Route::post('/searchMonitor', [MonitorSearchController::class, 'search']);
//Route::get('/modifiedmap', [MapController::class, 'getCarPositions']);
//Route::get('/video', [MonitoringVideoController::class, 'show_today_video']);
Route::get('/map', [MonitoringMapController::class, 'getPositions']);



?>