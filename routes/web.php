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
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});


Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/head', function () {
    return view('layouts.header');
});

