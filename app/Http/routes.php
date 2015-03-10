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
Blade::setContentTags('{{{', '}}}');        // for variables and all things Blade
Blade::setEscapedContentTags('{{!', '!}}');   // for escaped data

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('person', 'PersonController');

Route::get('photos/popular', 'PhotoController@method');

// API interface
Route::group(['prefix' => 'api'], function() {
    Route::group(['prefix' => 'v1', 'namespace' => 'Api\V1'], function() {
        Route::resource('person', 'PersonController');
    });
});