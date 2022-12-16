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

Route::get('/event', [EventController::class, 'index']);
Route::get('/event/{id}', [EventController::class, 'show']);
Route::post('/event', [EventController::class, 'store']);
Route::put('/event/{id}', [EventController::class, 'update']);
Route::delete('/event/{id}', [EventController::class, 'destroy']);

// Booking route

Route::get('/event/{event_id}/booking/', [BookingController::class, 'index']);
Route::get('/event/{event_id}/booking/{username}', [BookingController::class, 'usernameDates']);
Route::post('/event/{event_id}/booking/', [BookingController::class, 'store']);
Route::put('/event/{event_id}/booking/', [BookingController::class, 'update']);
