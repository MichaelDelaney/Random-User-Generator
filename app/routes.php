<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/LoremIpsumResults', function() {
	$query = Input::get('query');
	return View::make('LoremIpsumText')
		->with('query', $query);
});

Route::get('/RandomUserResults', function() {
	$query2 = Input::get('query2');
	return View::make('RandomUsers')
		->with('query2', $query2);
});