<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'LoginController@login')->name('login');
