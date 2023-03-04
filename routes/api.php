<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MunicipalityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('departments', DepartmentController::class);
Route::put('departments/{department}/status', [DepartmentController::class, 'changeStatus'])->name('departments.changeStatus');

Route::resource('municipalities', MunicipalityController::class);
Route::put('municipalities/{municipality}/status', [MunicipalityController::class, 'changeStatus'])->name('municipalities.changeStatus');
