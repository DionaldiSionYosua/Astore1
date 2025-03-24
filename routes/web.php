<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/home_produk', function () {
    return view('home_produk');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});