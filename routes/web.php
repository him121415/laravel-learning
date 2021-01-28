<?php

use \App\Http\Controllers\PageController;
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

Route::get('/', '\App\Http\Controllers\PageController');
Route::get('/about', '\App\Http\Controllers\PageController@about');
Route::get('/skill', '\App\Http\Controllers\PageController@skill');
//work
Route::get('/contact', '\App\Http\Controllers\PageController@contact');


Route::get('/works', '\App\Http\Controllers\WorkController@index');
Route::post('/works', '\App\Http\Controllers\WorkController@store');
Route::get('/works/create', '\App\Http\Controllers\WorkController@create');
Route::get('/works/{work}/edit', '\App\Http\Controllers\WorkController@edit');
Route::put('/works/{work}', '\App\Http\Controllers\WorkController@update');
