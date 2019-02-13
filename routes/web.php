<?php

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/counter', 'CounterController@index')->name('counter');

Route::resource('wordmatch', WordMatchController::class);
