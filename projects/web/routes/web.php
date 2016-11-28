<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('', function(){
    return view("index");
});

Route::get('/activity', "ActivityController@index");

Route::group(['prefix' => 'index'], function () {
    Route::get('', function () {
        return view("index");
    });
    Route::get('get_user_info', "IndexController@getUserInfo");
    Route::get('get_chart', "IndexController@getChart");
});

Route::get('/message', "MessageController@index");
Route::get('/moments', "MomentsController@index");
Route::get('/people', "PeopleController@index");
Route::get('/profile/{username?}',"ProfileController@index");
Route::get('/sport',"SportController@index");
Route::get('/login',"MyLoginController@index");

Route::post('/login',"MyLoginController@login");