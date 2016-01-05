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

Route::get('/', 'PostController@index');
Route::resource('discussions','PostController');

Route::get('/users/register','UsersController@register');
Route::post('/users/register','UsersController@store');
Route::get('/users/login','UsersController@login');
Route::post('/users/login','UsersController@signin');
Route::get('/logout','UsersController@logout');