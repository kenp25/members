<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/members/{id}', 'HomeController@getMember');

Route::get('/members', MembersController::class. '@index');

Route::post('/members', MembersController::class. '@store');
