<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

//Route Umum
Route::get('/', 'HomeController@index')->name('home');

//Route User Login
Auth::routes();
//user panel
Route::group( ['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'dashboard'], function() {

    });

    Route::group(['prefix' => 'produk'], function() {
        Route::get('/','ProdukController@index')->name('produk');
        Route::get('/create','ProdukController@create')->name('produk.create');
        Route::post('/','ProdukController@store')->name('produk.store');
        Route::get('/detail/{id}','ProdukController@edit')->name('produk.detail');
        Route::patch('/detail/{id}','ProdukController@update')->name('produk.update');
    });

    Route::group(['prefix' => 'transaksi'], function() {
        Route::get('/','TransaksiController@index')->name('transaksi');
        Route::get('/create','TransaksiController@create')->name('transaksi.create');
        Route::post('/','TransaksiController@store')->name('transaksi.store');
        Route::get('/detail/{id}','TransaksiController@detail')->name('transaksi.detail');
        Route::patch('/detail/{id}','TransaksiController@transaksi')->name('transaksi.update');

        //checkout transaksi
        Route::get('/{user_id}/check-out', 'TransaksiController@check_out')->name('transaksi.checkout');
        Route::delete('/check-out/{id}', 'TransaksiController@delete')->name('transaksi.checkout.delete');
    });

    Route::group(['prefix' => 'history'], function() {
        Route::get('/','HistoryController@index')->name('history');
        Route::get('/{id}','ProfileController@edit')->name('history.edit');
        Route::patch('/{id}','ProfileController@update')->name('history.update');
    });

    Route::group(['prefix' => 'profile'], function() {
        Route::get('/','ProfileController@index')->name('profile');
        Route::patch('/{id}','ProfileController@update')->name('profile.update');
    });
});

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