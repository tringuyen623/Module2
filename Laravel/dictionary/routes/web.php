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
    $result = '';
    return view('welcome', compact('result'));
});

Route::post('/', function (Request $request) {
    $data = [
        'hello' => 'xin chao',
        'goodbye' => 'tam biet'
    ];
    $input = $request->input;
    $input = strtolower(trim($input));

    if(in_array($input, $data)){
        $result = array_search($input, $data);
    } else if (key_exists($input, $data)){
        $result = $data[$input];
    } else {
        $result = 'Khong tim thay';
    }
    return view('welcome', compact('result'));
});
