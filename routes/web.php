<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

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

// Booking route

Route::get('/event/{event_id}/booking/', [BookingController::class, 'index']);
Route::post('/event/{event_id}/booking/', [BookingController::class, 'store']);
Route::put('/event/{event_id}/booking/', [BookingController::class, 'update']);
