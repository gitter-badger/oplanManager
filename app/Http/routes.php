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

// FontEnd pages
Route::get('uvodni', 'IntroController@index');

Route::resource('pages', 'PagesController');
Route::resource('news', 'NewsController');

// Auth routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('test/startpage', 'TestController@index');

// Backend routes

Route::resource('clubs', 'ClubsController');
