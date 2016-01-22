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

Route::get('/', 'ArtController@indexpage');
Route::get('/home', 'ArtController@indexpage');

Route::get('/contact/{id?}', 'UserController@contact');




// Auction Routes

Route::group(['middleware' => 'auth'], function () {
	Route::get('auctions', 'UserController@auctions');
	Route::get('auctions/new', 'UserController@create');
	Route::post('auctions/store', 'UserController@store');
	Route::post('bid', 'ArtController@bid');
	Route::post('art/{id}/buy', 'ArtController@buy');
	Route::post('/contact', 'UserController@contact');
});

Route::get('art/{id}', 'ArtController@show');
Route::get('art', 'ArtController@index');

Route::get('art/sort/{param}', 'ArtController@index');
Route::get('art/filter/{param1}/{param2}', 'ArtController@index');

Route::post('search/{query}', 'ArtController@search');




// Auth Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Facebook Login...
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');