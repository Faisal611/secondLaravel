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
Route::get('user-creact', 'publicController@index');

Route::post('user', 'publicController@create');

Route::put('user', 'publicController@putCreate');

Route::patch('user', 'publicController@patchCreate');

Route::delete('user', 'publicController@delete');
//----------------------------------------------------------------
Route::get('love', 'publicController@love');

Route::redirect('test', 'love');
//----------------------------------------------------------------

Route::get('multiple/{id}/{emai}', 'publicController@multiple');

