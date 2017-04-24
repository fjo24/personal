<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'hr'], function () {
    Route::post('/personal/{flag}', 'PersonalController@index')->name('all');
    Route::resource('personal', 'PersonalController');
    Route::resource('vehiculos', 'VehiculosController');
    Route::get('/vehiculos/filter', 'VehiculosController@models')->name('vehicles.filters.models');
});

Route::get('excel',  'PersonalController@export')->name('export');
Route::get('excelvehiculos',  'VehiculosController@export')->name('exportvehiculos');
Route::auth();

Route::get('/home', 'HomeController@index');

