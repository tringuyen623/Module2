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
    return view('home');
});

Route::get('customers/search', 'CustomerController@search')->name('customers.search');
Route::resource('customers', 'CustomerController');

Route::resource('tasks', 'TaskController');

Route::resource('cities', 'CityController');
