<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function() {
	
	Route::get('/', function () {
	    return view('welcome');
	})->name('welcome');

	Route::get('/home', function() {
		return view('loginReg.pages.login');
	})->name('home');

	Route::post('/login', [
		'uses' => 'LoginController@login',
		'as' => 'login'
	]);

	Route::post('/register', [
		'uses' => 'LoginController@register',
		'as' => 'register'
	]);
});