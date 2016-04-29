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

// Questions
Route::get('/', [
	'middleware' => 'auth',
	'uses' => 'QuestionController@index'
]);
Route::get('ask', 'QuestionController@create');
Route::post('ask', 'QuestionController@store');
Route::get('questions/{id}', 'QuestionController@show');
Route::get('questions/{id}/edit', 'QuestionController@edit');
Route::patch('questions/{id}/edit', 'QuestionController@update');
Route::get('questions/{id}/delete', 'QuestionController@destroy');

// Search Questions
Route::post('/', 'QueryController@search');

// Auth
Route::get('register', array('uses' => 'Auth\AuthController@getRegister'));
Route::post('register', array('uses' => 'Auth\AuthController@postRegister'));
Route::get('login', array('uses' => 'Auth\AuthController@getLogin'));
Route::post('login', array('uses' => 'Auth\AuthController@postLogin'));
Route::get('logout', array('uses' => 'Auth\AuthController@getLogout'));

Route::controllers([
   'password' => 'Auth\PasswordController',
]);