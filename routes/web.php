<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\serviceController;
use App\Models\Service;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index', 'doctor'])->name('home');
Route::resource('user', userController::class);
Route::resource('doctor', doctorController::class);
Route::resource('barang', barangController::class);
Route::resource('service', serviceController::class);
