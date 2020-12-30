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

// WEB
Auth::routes();

Route::get('/','CalisthenicsController@index')->name('index');
Route::get('/create','CalisthenicsController@create')->name('create');
Route::post('/create','CalisthenicsController@store')->name('store');
Route::delete('/destroy/{calisthenic}','CalisthenicsController@destroy')->name('destroy');
Route::put('/edit/{calisthenic}','CalisthenicsController@edit')->name('edit');
Route::get('/update/{calisthenic}','CalisthenicsController@update')->name('update');

// Cookie Test
Route::get('/lastCreated', 'CalisthenicsController@lastCreated')->name('last.created');




