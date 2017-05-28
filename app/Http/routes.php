<?php

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

Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'VehiculoController@selectAjax']);

//Vehiculos
Route::group(['prefix' => 'asesor'], function () {
	Route::resource('vehiculo', 'VehiculoController');

	Route::get('search', [
		'uses' => 'VehiculoController@search',
		'as' => 'search'
	]);

	Route::get('query', [
		'uses' => 'VehiculoController@query',
		'as' => 'query'
	]);

});


Route::get('excelvehiculos',  'VehiculoController@export')->name('exportvehiculos');

Route::get('excelquery',  'VehiculoController@exportquery')->name('exportquery');