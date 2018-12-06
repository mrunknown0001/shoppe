<?php


Route::get('/', 'GeneralController@landing')->name('landing');

Route::get('/login', 'LoginController@login')->name('login');

Route::post('/login', 'LoginController@postLogin')->name('login.post');

Route::get('/register', 'RegisterController@register')->name('register');

Route::post('/register', 'RegisterController@postRegister')->name('register.post');

Route::get('/logout', 'LoginController@logout')->name('logout');


Route::group(['prefix' => 'admin', 'middleware' => 'check_admin'], function () {
	// route to admin dashboard
	Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
	// redirect to admin dashboard
	Route::get('/', function () {
		return redirect()->route('admin.dashboard');
	});
});


Route::group(['prefix' => 'customer'], function () {
	// route to customer dashboard
	Route::get('/dashboard', 'UserController@dashboard')->name('customer.dashboard');

	// redirect to customer dashboard
	Route::get('/', function () {
		return redirect()->route('customer.dashboard');
	});
});
