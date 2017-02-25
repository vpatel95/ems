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
	    return view('welcome.pages.welcome');
	})->name('welcome');

	Route::get('/home', function() {
		return view('loginReg.pages.login');
	})->name('home');

	Route::post('/login', [
		'uses' => 'LoginController@login',
		'as' => 'login'
	]);

	Route::any('/register', [
		'uses' => 'LoginController@register',
		'as' => 'register'
	]);

	Route::get('/logout', [
		'uses' => 'LoginController@logout',
		'as' => 'logout'
	]);

	Route::get('/dashboard', [
		'uses' => 'LoginController@getDashboard',
		'middleware' => 'auth',
		'as' => 'dashboard'
	]);

});

Route::group(['guard' => 'admin', 'middleware' => ['web']], function() {
	
	Route::get('/admin', function() {
		return view('loginReg.pages.admin');
	})->name('admin');

	Route::post('/admin/login', [
		'uses' => 'AdminController@login',
		'as' => 'admin.login',
	]);

	Route::post('/admin/addAdmin', [
		'uses' => 'AdminController@add',
		'as' => 'admin.add',
	]);

	Route::get('/admin/dashboard', [
		'uses' => 'AdminController@getDashboard',
		'middleware' => 'auth',
		'as' => 'admin.dashboard'
	]);

	Route::get('admin/hod', function() {
		return view('loginReg.pages.hod');
	})->name('admin.hod');

	Route::post('/admin/hod/add', [
		'uses' => 'AdminController@addHod',
		'middleware' => 'auth',
		'as' => 'admin.hod.add'
	]);
});

