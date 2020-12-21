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

Route::get('/','CalisthenicsController@index')->name('index');
Route::get('/create','CalisthenicsController@create')->name('create');
Route::post('/create','CalisthenicsController@store')->name('store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/last', 'CalisthenicsController@LastMovement')->name('last');
