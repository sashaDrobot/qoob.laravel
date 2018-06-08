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
    Route::get('/delete/{order}', 'AdminController@delete');
});

