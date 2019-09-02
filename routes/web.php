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

Route::get('/', function () {return view('welcome');});

Route::get('/locale/{lang}', 'LocaleController@changeLocale');

Auth::routes();

Route::get('/subscriber/activate/{email}/{token}', 'Auth\RegisterController@activate')->name('subscriber.activate');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/api-token', 'HomeController@generateToken');

// Admin controller
Route::group(['namespace' => 'Admin'], function() {
	Route::get('admin/home', 'HomeController@index')->name('admin.home');

	// account resource routes
	Route::resource('admin/account', 'AccountController');

	// role resource routes
	Route::resource('admin/role', 'RoleController');

	// permission resource routes
    Route::resource('admin/permission', 'PermissionController');

	// admin auth
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
	Route::post('admin-logout', 'Auth\LoginController@logout')->name('admin.logout');
});

// routes for 2nd database connection
Route::get('get-meta', 'SystemController@getMeta');
Route::get('set-meta', 'SystemController@setMeta');
Route::get('set-meta2', 'SystemController@setMeta2');

