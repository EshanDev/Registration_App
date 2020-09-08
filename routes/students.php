<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StudentsController@index')->name('students.index');
Route::get('/login', 'LoginController@index')->name('students.login');
Route::get('/register/{code?}', 'RegisterController@index')->name('students.register');
Route::post('/register', 'RegisterController@register')->name('submit.register');
