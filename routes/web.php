<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home')
    ->name('home');
Route::get('pilot/{id}','MainController@show')
    ->name('show');

Route::get('form','MainController@form')
    ->name('form');
Route::post('add','MainController@addCar')
    ->name('addCar');