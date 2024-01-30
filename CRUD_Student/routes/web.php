<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ProvincesController;
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

Route::get('/', function () {
    return view('index');
});


Route::resource('student', StudentController::class);
Route::resource('provinces', ProvincesController::class);
Route::resource('district', DistrictController::class);

