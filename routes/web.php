<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/akademik', function () {
    return view('akademik');
});

Route::get('/kesiswaan', function () {
    return view('kesiswaan');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak', function () {
    return view('kontak');
});