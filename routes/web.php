<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('user.index'); // Nama file blade
});
Route::get('/layanan', function () {
    return view('user.layanan');
});
