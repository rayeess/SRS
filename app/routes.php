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

/*
| Contact form (GET)
*/
Route::get('/', array('as' => 'contact', 'uses' => 'ContactController@getContact'));

/*
| CSRF protection group
|
| Protects the form from cross-site forgeries
*/
Route::group(array('before' => 'csrf'), function() {

	/*
	| Contact form (GET)
	*/
	Route::post('contact', array('as' => 'contact-post', 'uses' => 'ContactController@postContact'));

});
