<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SeatAllocationController;
use App\Models\Bus;
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
Route::resource('location', LocationController::class);
Route::resource('seat-allocation', SeatAllocationController::class);
Route::get('/admin', [HomeController::class, 'home'])->name('admin.home');

Route::resource('buss', BusController::class);
