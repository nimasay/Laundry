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

Route::get('/laundry','App\Http\Controllers\LaundryController@index');
Route::post('/laundry/create', 'App\Http\Controllers\LaundryController@create');
Route::get('/laundry/{id}/edit', 'App\Http\Controllers\LaundryController@edit');
Route::post('/laundry/{id}/update', 'App\Http\Controllers\LaundryController@update');
Route::get('/laundry/{id}/delete', 'App\Http\Controllers\LaundryController@delete');
