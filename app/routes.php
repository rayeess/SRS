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

//Authenticated group
//Route::group(array('before' => 'auth'), function() {

	//CSRF protection group
	//Route::group(array('before' => 'csrf'), function() {

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@getIndex'));

Route::get('user', array('as' => 'user', 'uses' => 'HomeController@getUserpanel'));

Route::get('signup', array('as' => 'signup', 'uses' => 'HomeController@getSignup'));

Route::post('signup', array('as' => 'signup-post', 'uses' => 'AccountController@postSignup'));

Route::get('income', array('as' => 'income', 'uses' => 'HomeController@getIncome'));

Route::get('/account/activate/{code}', array('as' => 'account-activate', 'uses' => 'AccountController@getActivate'));
