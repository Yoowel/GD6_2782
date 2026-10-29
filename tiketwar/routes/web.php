<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, selamat datang di tiketwar';
});

Route::get('/ping', function () {
    return ['status' => 'ok', 'aplikasi' => 'TiketWar'];
});