<?php

use Illuminate\Support\Facades\Route;

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
Route::get('user', 'publicController@index');

Route::post('add-user', 'publicController@create');

Route::put('put-user', 'publicController@putCreate');

Route::patch('patch-user', 'publicController@patchCreate');
