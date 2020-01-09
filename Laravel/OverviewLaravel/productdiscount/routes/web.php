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

use Illuminate\Http\Request;

Route::get('/', function () {

    return view('welcome');
});

Route::post('/', function (Request $request) {
    $des = $request->input('description');
    $price = $request->input('price');
    $dis =  $request->input('discount');
    $disAmount = $price * $dis / 100;
    $disPrice = $price - $disAmount;

    return view('welcome1', compact('des', 'price', 'dis', 'disAmount', 'disPrice'));
});


