<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ControlPanelController@index')->name('registration');
Route::post('/', 'ControlPanelController@CodeSending')->name('register.code.sent');
