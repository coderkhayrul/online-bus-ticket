<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('website.home');

Auth::routes();

// ADMIN ROUTE LIST HERE
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('home');
    Route::resource('buses', BusController::class);
    Route::resource('trips', TripController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('seats', SeatController::class);
    Route::resource('schedules', ScheduleController::class);
});
