<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
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



Auth::routes();
Route::get('/', [App\Http\Controllers\AwalController::class, 'index'])->name('awal');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('adminproduk', 'ProdukController'::class)->middleware('is_admin');
Route::post('adminproduk/{id}', 'ProdukController@update');

Route::resource('users', UserController::class);
Route::resource('transaksipage', TransaksiIndexController::class);

Route::get('transaksi/{id}', 'TransaksiController@index');
Route::get('transaksidetail/{id}', 'TransaksiController@detail');
Route::post('transaksi/{id}', 'TransaksiController@transaksi');
Route::get('check-out', 'TransaksiController@check_out');
Route::delete('check-out/{id}', 'TransaksiController@delete');
Route::get('konfirmasi-check-out', 'TransaksiController@konfirmasi');
Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

Route::get('latar', function () {
    return view('info/latar');
});

Route::get('/produk', 'ProdukController@index');