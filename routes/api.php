<?php

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('/task', 'TaskController');
    Route::resource('/category', 'CategoryController');
    Route::get('/category/{category}/tasks', 'CategoryController@tasks');
});
