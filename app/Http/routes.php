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

Route::get('/', 'MainController@index');
Route::get('index', 'MainController@index');
Route::get('upcoming', 'MainController@upcoming');
Route::get('finished', 'MainController@finished');
Route::get('live', 'MainController@live');

Route::get('general', 'MainController@finshed');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
