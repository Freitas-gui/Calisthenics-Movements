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
use Illuminate\Support\Facades\Route;

// Model User
Auth::routes(['verify' => true]);

Route::get('/update','UsersController@update')->name('update.user');
Route::put('/edit','UsersController@edit')->name('edit.user');


Route::middleware(['auth', 'UserActive', 'verified'])->group(function () {

    Route::get('/myprofile','UsersController@myProfile')->name('my.profile');
    Route::get('/deactive','UsersController@deactive')->name('deactive');

    // Model Calisthenic
    Route::get('/','CalisthenicsController@index')->name('index');
    Route::get('/create','CalisthenicsController@create')->name('create');
    Route::post('/create','CalisthenicsController@store')->name('store');
    Route::delete('/destroy/{calisthenic}','CalisthenicsController@destroy')->name('destroy');
    Route::put('/edit/{calisthenic}','CalisthenicsController@edit')->name('edit');
    Route::get('/update/{calisthenic}','CalisthenicsController@update')->name('update');

    // MyListOfCalisthenics
    Route::get('/calisthenics/user/add/{calisthenic}','CalisthenicsOfUserController@create')->name('calisthenics.user.create');
    Route::get('/calisthenics/user','CalisthenicsOfUserController@index')->name('calisthenics.user.index');

    // Cookie Test
    Route::get('/lastCreated', 'CalisthenicsController@lastCreated')->name('last.created');

});


Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
