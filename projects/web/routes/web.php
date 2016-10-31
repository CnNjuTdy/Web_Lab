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
Route::get('/activity', function () {
    return view('activity');
});
Route::get('/', "IndexController@index");
Route::get('/index',"IndexController@index");

Route::get('/login', "LoginController@index");
Route::get('/message', function () {
    return view('message');
});
Route::get('/people', function () {
    return view('people');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/sport', function () {
    return view('sport');
});
Route::post('/login', "LoginController@login");