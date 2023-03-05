<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\MunicipalHotelController;
use App\Http\Controllers\RoomController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('hotels', HotelController::class);
Route::put('hotels/{hotel}/status', [HotelController::class, 'changeStatus'])->name('hotels.changeStatus');

Route::resource('municipal-hotels', MunicipalHotelController::class);
Route::put('municipal-hotels/{municipalHotel}/status', [MunicipalHotelController::class, 'changeStatus'])->name('municipal-hotels.changeStatus');

Route::resource('rooms', RoomController::class);
Route::put('rooms/{room}/status', [RoomController::class, 'changeStatus'])->name('rooms.changeStatus');
