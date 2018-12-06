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

	// route to products
	Route::get('/products', 'ProductController@index')->name('admin.products');

	// route to add product page
	Route::get('/product/add', 'ProductController@create')->name('admin.add.product');

	// route to save product
	Route::post('/product/store', 'ProductController@store')->name('admin.store.product');
	
	Route::get('/product/store', function () {
		abort(404);
	});

	// route to update product
	Route::get('/product/update/{id}', 'ProductController@update')->name('admin.update.product');

	// route to delete product
	Route::get('/product/delete/{id}', 'ProductController@delete')->name('admin.delete.product');
});


Route::group(['prefix' => 'customer', 'middleware' => 'check_customer'], function () {
	// route to customer dashboard
	Route::get('/dashboard', 'UserController@dashboard')->name('customer.dashboard');

	// redirect to customer dashboard
	Route::get('/', function () {
		return redirect()->route('customer.dashboard');
	});
});
