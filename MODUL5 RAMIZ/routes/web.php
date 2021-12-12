<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\PatientController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/vaccine/list', [VaccineController::class, 'list'])->name('vaccine.list');
Route::resource('vaccine', VaccineController::class);
Route::resource('patient', PatientController::class);
