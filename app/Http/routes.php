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
	return view('index');
});
Route::get('home', function() {
	return view('index');
});

// Auction Routes

Route::group(['middleware' => 'auth'], function () {
	Route::get('auctions', 'UserController@auctions');
	Route::get('auctions/new', 'UserController@create');
	Route::post('auctions/store', 'UserController@store');
	Route::post('bid', 'ArtController@bid');
});

Route::get('art/{id}', 'ArtController@show');
Route::get('art', 'ArtController@index');

Route::get('art/sort/{param}', 'ArtController@index');
Route::get('art/filter/{param1}/{param2}', 'ArtController@index');


// Auth Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Facebook Login...
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');