<?php

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
    return view('welcome');
});

Route::get('/login', 'PageController@getLoginPage')->name('login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');

Route::get('/register', 'PageController@getRegisterPage')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');

Route::get('/home', function(){
    return view('home');
})->name('home')->middleware('auth');

Route::get('/logout', 'AuthController@logout')->name('logout');
