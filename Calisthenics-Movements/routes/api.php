<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

// API
//Route::get('/calisthenic','CalisthenicsApiController@index')->name('api.calisthenic.index');
//Route::get('/calisthenic/{id}','CalisthenicsApiController@show')->name('api.calisthenic.showApi');
//Route::post('/calisthenic','CalisthenicsApiController@store')->name('api.calisthenic.storeApi');
//Route::put('/calisthenic/{id}','CalisthenicsApiController@update')->name('api.calisthenic.updateApi');
//Route::delete('/calisthenic/{id}','CalisthenicsApiController@destroy')->name('api.calisthenic.destroyApi');

Route::apiResource('calisthenic','CalisthenicsApiController');
