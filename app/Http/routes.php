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

Route::get('/home', 'HomeController@index');

//Auth
Route::auth();

//Personal
Route::group(['prefix' => 'hr'], function () {
    Route::post('/personal/{flag}', 'PersonalController@index')->name('all');
    Route::resource('personal', 'PersonalController');
});

Route::get('excel',  'PersonalController@export')->name('export');

//Vehiculos
Route::group(['prefix' => 'asesor'], function () {
    Route::resource('vehiculos', 'VehiculosController');
});
Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'VehiculosController@selectAjax']);
Route::get('excelvehiculos',  'VehiculosController@export')->name('exportvehiculos');
