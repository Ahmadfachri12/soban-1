<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AdminController::class, 'index'], function () {
    return view('admin.index');
} );

Route::get('/', function () {
    return view('user.index'); // Nama file blade
});
Route::get('/layanan', function () {
    return view('user.layanan');
});
