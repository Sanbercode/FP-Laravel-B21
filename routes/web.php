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

//Route::get('/', function () {
//    return view('welcome');
//});

//CRUD Buku
Route::group(['middleware' => 'auth', 'prefix' => 'contents'], function(){
    Route::get('/formbuku', 'PostController@create')->name('formBuku');
    Route::post('/', 'PostController@store')->name('storeBuku');
    Route::get('/', 'PostController@index')->name('contents');
    Route::get('/author', 'PostController@index_author')->name('contents_author');
    Route::get('/{id}', 'PostController@show')->name('showBuku');
    Route::get('/{id}/edit', 'PostController@edit')->name('editBuku');
    Route::put('/{id}', 'PostController@update');
    Route::delete('/{id}', 'PostController@destroy')->name('deleteBuku');
});


//CRUD Review
Route::get('/contents/{id}/review', 'ReviewController@getReviewPage')->middleware('auth');
Route::post('/contents/{id}', 'ReviewController@storeReview')->middleware('auth');
Route::get('/contents/{id}/edit-review', 'ReviewController@getEditReviewPage')->middleware('auth');
Route::get('/reviewAuthor', 'ReviewController@reviewAuthor')->middleware('auth')->name('reviewAuthor');
Route::put('/reviewAuthor/{id}', 'ReviewController@updateReview')->middleware('auth');
Route::delete('/reviewAuthor/{id}', 'ReviewController@destroyReview')->middleware('auth');


//DOM_PDF
Route::get('/cetak_pdf/{id}', 'PDFController@cetak_pdf');

//Landing Page dan Home Page
Route::get('/', 'PageController@getLandingPage')->name('landing')->middleware('guest');

Route::get('/home', 'PageController@getHomePage')->name('home')->middleware('auth');

// Autentikasi
Route::get('/login', 'PageController@getLoginPage')->name('login')->middleware('guest');

Route::post('/login', 'AuthController@postLogin')->middleware('guest');

Route::get('/register', 'PageController@getRegisterPage')->name('register')->middleware('guest');

Route::post('/register', 'AuthController@postRegister')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->name('logout');




// Profile Page
Route::get('/profile', 'PageController@getProfilePage')->name('profile')->middleware('auth');

Route::get('/profile/edit', 'PageController@getStoreProfilePage')->name('editProfile')->middleware('auth');

Route::post('/profile', 'ProfileController@storeProfile')->middleware('auth');

Route::delete('/profile', 'ProfileController@deleteProfile')->middleware('auth')->name('deleteProfile');


Route::get('/testing', function(){
    dd(Auth::id());
});
