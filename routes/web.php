<?php

use App\Http\Controllers\JenisMakananController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('user', UserController::class);

Route::resource('jenis-makanan', JenisMakananController::class);

Route::get('/transaksi', function () {
    return view('transaksi');
});
