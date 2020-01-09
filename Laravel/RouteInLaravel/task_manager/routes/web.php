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

Route::prefix('customer')->group(function () {
    Route::get('index', 'CustomersController@index');

    Route::get('create', 'CustomersController@create');

    Route::post('store', 'CustomersController@store');

    Route::get('{id}/show', function(){

    });

    Route::get('{id}/edit', function(){

    });

    Route::patch('{id}/update', function(){

    });

    Route::delete('{id}', function(){

    });

});
