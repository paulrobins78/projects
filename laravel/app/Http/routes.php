<?php

//Route::get('articles','ArticlesController@index');
//Route::get('articles/create','ArticlesController@create');
//Route::get('articles/{id}','ArticlesController@show');
//Route::post('articles','ArticlesController@store');

Route::resource('articles','ArticlesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'

]);