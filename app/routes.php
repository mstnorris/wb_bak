<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('Users', 'UsersController');
