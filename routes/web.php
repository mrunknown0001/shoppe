<?php


Route::get('/', 'GeneralController@landing')->name('landing');

Route::get('/login', 'LoginController@login')->name('login');

Route::post('/login', 'LoginController@postLogin')->name('login.post');

Route::get('/register', 'RegisterController@register')->name('register');

Route::post('/register', 'RegisterController@postRegister')->name('register.post');
