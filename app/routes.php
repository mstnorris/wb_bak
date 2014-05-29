<?php
Route::get('/', 'HomeController@showDashboard');
Route::get('about', 'HomeController@showAbout');
Route::resource('users', 'UsersController');