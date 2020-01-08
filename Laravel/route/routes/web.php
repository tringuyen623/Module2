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

Route::get('/', 'HomeController@index');

Route::get('/users', function() {
    return view('user', ['name' => 'Tri Nguyen']);
});

Route::get('/about', function() {
    echo "<h2> This is About page</h2>";
});

Route::get('/contact', function() {
    echo "<h2> This is Contact page</h2>";
});
