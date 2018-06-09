<?php

Route::get('/', function () {
    return view('welcome');
});

// ----- Admin ----- //
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');;

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/orders', 'AdminController@orders');
    Route::get('/processed', 'AdminController@processed');
    Route::get('/process/{order}', 'AdminController@process');
    Route::delete('/delete/{order}', 'AdminController@delete');
});

// ---- Main ---- //
Route::get('/main', 'MainController@index');
Route::get('/about', 'MainController@about');
Route::get('/portfolio', 'MainController@portfolio');
Route::get('/services', 'MainController@services');
Route::get('/contacts', 'MainController@contacts');
Route::get('/feedback', 'MainController@feedback');
Route::post('/feedback/send', 'MainController@send');

