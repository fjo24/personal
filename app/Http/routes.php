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
    Route::resource('vehiculo', 'VehiculoController');

	Route::get('search', [
		'uses' => 'VehiculoController@search',
		'as' => 'search'
	]);

	Route::post('query', [
		'uses' => 'VehiculoController@query',
		'as' => 'query'
	]);
});
Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'VehiculoController@selectAjax']);

Route::get('excelvehiculos',  'VehiculoController@export')->name('exportvehiculos');

Route::post('excelquery',  'VehiculoController@exportquery')->name('exportquery');