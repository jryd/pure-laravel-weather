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

Route::get('/', 'SearchController@home');

Route::get('howto', function () {
	return view('pages.howto');
});

Route::get('/{location}', 'SearchController@location');

Route::get('/{location}/{day}', 'SearchController@locationDay');