<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home')
    ->name('home');

Route::get('pilot/{id}','MainController@show')
    ->name('show');