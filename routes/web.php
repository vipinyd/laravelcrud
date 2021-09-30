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
    return redirect('show');
});
Route::view('adduser','add_user');
Route::post('submit','App\Http\Controllers\ProfileController@submit');
Route::get('show','App\Http\Controllers\ProfileController@show');
Route::get('edit/{id}','App\Http\Controllers\ProfileController@edit');
Route::get('delete/{id}','App\Http\Controllers\ProfileController@destroy');
Route::post('update/{id}','App\Http\Controllers\ProfileController@update');
