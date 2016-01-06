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

// Post Routes
Route::get('/', 'PostController@index');
Route::resource('discussions','PostController');

// Comment Routes
Route::resource('comment','CommentsController');

// User Routes
Route::get('/users/register','UsersController@register');
Route::post('/users/register','UsersController@store');
Route::get('/users/login','UsersController@login');
Route::post('/users/login','UsersController@signin');
Route::get('/users/avatar','UsersController@avatar');
Route::get('/logout','UsersController@logout');

Route::post('/avatar','UsersController@changeavatar');