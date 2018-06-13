<?php


// ----- Admin ----- //
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');;
Route::group([ 'prefix' => 'admin' ], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/orders', 'AdminController@orders');
    Route::get('/processed', 'AdminController@processed');
    Route::get('/process/{order}', 'AdminController@process');
    Route::delete('/delete/{order}', 'AdminController@delete');

    Route::get('/users', 'UserController@index');
    Route::post('/add', 'UserController@add');
    Route::delete('/users/delete/{user}', 'UserController@delete');
});

// ---- Main ---- //
Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');
Route::get('/portfolio', 'MainController@portfolio');
Route::get('/services', 'MainController@services');
Route::get('/contacts', 'MainController@contacts');
Route::get('/feedback', 'MainController@feedback');
Route::post('/feedback/send', 'MainController@send');

// ---- Local ---- //
Route::get('/setlocale/{locale}', 'LocalizationController@setLocale');


