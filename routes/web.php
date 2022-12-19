<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventController;
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


//Event route

Route::get('/event', [EventController::class, 'index'])->middleware('cors');
Route::get('/event/{id}', [EventController::class, 'show'])->middleware('cors');
Route::post('/event', [EventController::class, 'store'])->middleware('cors');
Route::put('/event/{id}', [EventController::class, 'update'])->middleware('cors');
Route::delete('/event/{id}', [EventController::class, 'destroy'])->middleware('cors');

// Booking route

Route::get('/event/{event_id}/booking/', [BookingController::class, 'index'])->middleware('cors');
Route::get('/event/{event_id}/booking/{username}', [BookingController::class, 'usernameDates'])->middleware('cors');
Route::post('/event/{event_id}/booking/', [BookingController::class, 'store'])->middleware('cors');
Route::put('/event/{event_id}/booking/', [BookingController::class, 'update'])->middleware('cors');
