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
//returns the index page
Route::get('/', function () {
    return view('welcome');
});

//returns the questions page
Route::get('/horeca','ZeeController@getAllRestaurants');
Route::get('/horeca/{id}','ZeeController@getRestaurants');

Route::get('/beverage', 'ZeeController@getAllBeverages');
Route::get('/beverage/{id}', 'ZeeController@getBeverages');

Route::get('/zeebonk', 'ZeeController@getAllZeebonkTypes');
Route::get('/zeebonk/{id}', 'ZeeController@getZeebonkBeverages');
Route::get('/zeebonk/value/{value}', 'zeeController@getZeebonkByValue');

//Route::get('/question/{id}','zeeController@getQuestion');
Route::get('/question','zeeController@getQuestion');