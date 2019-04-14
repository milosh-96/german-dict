<?php

use Illuminate\Http\Request;

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

Route::middleware('api')->prefix('/')->group(function() {
    Route::prefix('/Glagoli')->group(function() {
        Route::get('/','GlagolController@index');
    });
    Route::prefix('/Imenice')->group(function() {
        Route::get('/','ImenicaController@index');
    });
    Route::prefix('/Predlozi')->group(function() {
        Route::get('/','PredlogController@index');
    });
    Route::prefix('/Pridevi')->group(function() {
        Route::get('/','PridevController@index');
    });
    Route::prefix('/Prilozi')->group(function() {
        Route::get('/','PrilogController@index');
    });
   
});
