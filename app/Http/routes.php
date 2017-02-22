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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

Route::post('teams/store', 'TeamController@store');
Route::get('teams/create', 'TeamController@create');
Route::get('teams/{team}', 'TeamController@show');
Route::get('teams','TeamController@index');
Route::delete('teams/{team}', 'TeamController@destroy');
Route::get('teams/{team}/edit', 'TeamController@edit');
Route::put('teams/{team}', 'TeamController@update');