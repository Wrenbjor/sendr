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

Route::resource('/User', 'UserController');

//Route::get('/photo', function () {
//    return view('photo');
//});
//
//Route::get('/tech', function () {
//    return view('tech');
//});
//
//Route::get('/food', function () {
//    return view('food');
//});
