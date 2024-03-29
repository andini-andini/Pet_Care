<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\categoriController;
use App\Http\Controllers\pemesananController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\pembelianController;
use App\Http\Controllers\CartController;
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
    return redirect()->route('login');
});

Auth::routes();

Route::put('pemesanan/update-status/{id}', [pemesananController::class, 'status'])->name('pemesanan.update-status');
Route::put('pembelian/update-status/{id}', [pembelianController::class, 'status'])->name('pembelian.update-status');
Route::put('user/update-role/{id}', [userController::class, 'role'])->name('user.update-role');
Route::get('pemesanan/upload-bukti-pembayaran/{id}', [pemesananController::class, 'showUploadBuktiPembayaran'])->name('pemesanan.showUploadBuktiPembayaran');
Route::put('pemesanan/upload-bukti-pembayaran/{id}', [pemesananController::class, 'uploadBuktiPembayaran'])->name('pemesanan.uploadBuktiPembayaran');
Route::get('pemesanan/cetakResi/{id}', [pemesananController::class, 'cetakResi'])->name('pemesanan.cetakResi');
Route::get('pembelian/upload-bukti-pembayaran/{id}', [pembelianController::class, 'showUploadBuktiPembayaran'])->name('pembelian.showUploadBuktiPembayaran');
Route::put('pembelian/upload-bukti-pembayaran/{id}', [pembelianController::class, 'uploadBuktiPembayaran'])->name('pembelian.uploadBuktiPembayaran');
Route::get('pembelian/cetakResi/{id}', [pembelianController::class, 'cetakResi'])->name('pembelian.cetakResi');
// Route::get('Shop/{kategori}', 'Web\barangController@barang_categori')->name('barang.categori');
Route::post('Shop/{categori_id}', [categoriController::class, 'barang_categori'])->name('barangcategori');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index', 'doctor'])->name('home');
Route::resource('user', userController::class);
Route::resource('doctor', doctorController::class);
Route::resource('barang', barangController::class);
Route::resource('service', serviceController::class);
Route::resource('pemesanan', pemesananController::class);
Route::resource('categori', categoriController::class);
Route::resource('pembelian', pembelianController::class);
Route::resource('cart', CartController::class);
