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
Route::get('/','HomeController@index');

Route::get('/user','UserController@index');

Route::get('/show','UserController@show');

Route::get('/user/create','UserController@create');

Route::post('/user/store','UserController@store');

Route::get('/user/edit/{id}','UserController@edit');

Route::post('/user/update/{id}','UserController@update');

Route::get('users/delete/{id}','UserController@delete');


/**/

Route::get('/','PostController@index');

Route::get('/user','PostController@index');

Route::get('/show','PostController@show');

Route::get('/user/create','PostController@create');

Route::post('/user/store','PostController@store');

Route::get('/user/edit/{id}','PostController@edit');

Route::post('/user/update/{id}','PostController@update');

Route::get('users/delete/{id}','PostController@delete');

/* */
Route::get('/','CategoryController@index');

Route::get('/user','CategoryController@index');

Route::get('/show','CategoryController@show');

Route::get('/user/create','CategoryController@create');

Route::post('/user/store','CategoryController@store');

Route::get('/user/edit/{id}','CategoryController@edit');

Route::post('/user/update/{id}','CategoryController@update');

Route::get('users/delete/{id}','CategoryController@delete');

