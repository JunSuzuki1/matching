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
Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/young', 'SeinenController@index')->name('young');
Route::post('/young', 'SeinenController@store')->middleware('auth');
Route::get('/young/add', 'SeinenController@add')->name('young-add');

// Route::post('/young', 'SeinenController@store')->middleware('auth');