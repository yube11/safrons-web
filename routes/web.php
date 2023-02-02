<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('login', function () {
    return view('layout/login');
});

Route::get('ikuh', function () {
    return view('ikuh');
});

Route::get('glosarium', function () {
    return view('layout/glosarium');
});

Route::get('register', function () {
    return view('layout/register');
});

Route::get('lebih-lanjut', function () {
    return view('layout/lebih-lanjut');
});
