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

//Route::group(['middleware' => ['web']], function() {
	
Route::get('/', function () {
    return view('welcome.pages.welcome');
})->name('welcome');

Route::get('/login', function() {
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

Route::prefix('admin')->group(function() {
	Route::get('/login', function() {
		return view('loginReg.pages.admin');
	})->name('admin.login');

	Route::post('/login', [
		'uses' => 'AdminLoginController@login',
		'as' => 'admin.login.submit'
	]);

	Route::get('/dashboard', [
		'uses' => 'AdminController@dashboard',
		'middleware' => 'auth:admin',
		'as' => 'admin.dashboard'
	]);

	Route::get('/logout', [
		'uses' => 'AdminController@logout',
		'as' => 'admin.logout'
	]);

	Route::get('/add/hod', [
		'uses' => 'AdminController@hodform',
		'as' => 'add.hod'
	]);

	Route::post('/add/hod', [
		'uses' => 'AdminController@addhod',
		'as' => 'add.hod.submit'
	]);

	Route::get('/', function() { 
		return view('welcome.pages.admin');
	})->name('admin');
});

Route::prefix('hod')->group(function() {
	Route::get('/create/event', [
		'uses' => 'HodController@eventform',
		'as' => 'hod.event'
	]);

	Route::post('/createevent', [
		'uses' => 'HodController@addevent',
		'as' => 'hod.event.submit'
	]);
});

Route::prefix('coordinator')->group(function() {
	Route::get('/event',[
		'uses' => 'CoordinatorController@viewevent',
		'as' => 'view.event'
	]);

	Route::get('/event/edit/{id}', [
		'uses' => 'CoordinatorController@editevent',
		'as' => 'edit.event'
	]);

	Route::post('/event/edit/{id}', [
		'uses' => 'CoordinatorController@updateevent',
		'as' => 'edit.event.submit'
	]);
});

//});



