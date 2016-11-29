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

Route::group(['prefix' => 'activity'], function () {
    Route::get('', function () {
        return view("activity");
    });
    Route::get('get_join', "ActivityController@getJoin");
    Route::get('get_my', "ActivityController@getMy");
});

Route::group(['prefix' => 'index'], function () {
    Route::get('', function () {
        return view("index");
    });
    Route::get('get_user_info', "IndexController@getUserInfo");
    Route::get('get_chart', "IndexController@getChart");
});

Route::get('/message', "MessageController@index");
Route::get('/moments', "MomentsController@index");
Route::group(['prefix' => 'people'], function () {
    Route::get('', function () {
        return view("people");
    });
    Route::get('get_follower', "PeopleController@getFollower");
    Route::get('get_following', "PeopleController@getFollowing");
});
Route::get('/profile/{username?}',"ProfileController@index");

Route::group(['prefix' => 'sport'], function () {
    Route::get('', function () {
        return view("sport");
    });
    Route::get('get_rank', "SportController@getRank");
    Route::get('get_calories', "SportController@getCalories");
    Route::get('get_goals', "SportController@getGoals");
    Route::get('get_health', "SportController@getHealth");
});

Route::get('/login',"MyLoginController@index");

Route::post('/login',"MyLoginController@login");