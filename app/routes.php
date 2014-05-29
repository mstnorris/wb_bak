<?php
Route::get('/', 'HomeController@showDashboard');
Route::get('about', 'HomeController@showAbout');
Route::resource('users', 'UsersController');

Route::resource('universities', 'UniversitiesController');
Route::resource('schools', 'SchoolsController');
Route::resource('courses', 'CoursesController');
Route::resource('modules', 'ModulesController');
Route::resource('groups', 'GroupsController');