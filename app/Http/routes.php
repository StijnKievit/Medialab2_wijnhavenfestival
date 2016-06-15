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
use Jenssegers\Agent\Agent;

$agent = new Agent();

if ($agent->isDesktop()) {
    Route::get('/', 'ZeeController@getDesktopIndex');
} elseif ($agent->isMobile() || $agent->isTablet()) {

    Route::get('/', function () {
        return view('mobile.welcome');
    });
}
Route::get('/horeca', 'ZeeController@getAllRestaurants');
Route::get('/horeca/{id}', 'ZeeController@getRestaurants');

Route::get('/beverage', 'ZeeController@getAllBeverages');
Route::get('/beverage/{id}', 'ZeeController@getBeverages');

Route::get('/zeebonk', 'ZeeController@getAllZeebonkTypes');
Route::get('/zeebonk/{id}', 'ZeeController@getZeebonkBeverages');
Route::get('/result/{value}', 'zeeController@getZeebonkByValue');

//Route::get('/question/{id}','zeeController@getQuestion');
Route::get('/question', 'zeeController@getQuestion');

Route::get('/map/{id}', 'ZeeController@mapInfo');
