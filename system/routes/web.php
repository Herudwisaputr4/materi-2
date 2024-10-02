<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/informatika', function() {
    return view('informatika');
});

Route::get('/elektro', function() {
    return view('elektro');
});

Route::get('/agroindustri', function() {                                                                                                                                                                                                                                                                                                                                                                                                                         
    return view('agroindustri');
});

Route::get('/agroindustri', function() {                                                                                                                                                                                                                                                                                                                                                                                                                         
    return view('agroindustri');
});

Route::get('/sipil', function() {                                                                                                                                                                                                                                                                                                                                                                                                                         
    return view('sipil');
});

