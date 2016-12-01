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

    Route::post('create_activity', "ActivityController@create");
    Route::post('join_activity', "ActivityController@join");
    Route::post('del_activity', "ActivityController@del");
});

Route::group(['prefix' => 'index'], function () {
    Route::get('', function () {
        return view("index");
    });
    Route::get('get_user_info', "IndexController@getUserInfo");
    Route::get('get_chart', "IndexController@getChart");
});

Route::group(['prefix' => 'moments'], function () {
    Route::get('', function () {
        return view("moments");
    });
    Route::get('get_all', "MomentsController@getAll");
    Route::get('get_my', "MomentsController@getMy");

    Route::post('addM', "MomentsController@addM");
    Route::post('addC', "MomentsController@addC");
    Route::post('like', "MomentsController@like");
});

Route::group(['prefix' => 'people'], function () {
    Route::get('', function () {
        return view("people");
    });
    Route::get('get_follower', "PeopleController@getFollower");
    Route::get('get_following', "PeopleController@getFollowing");

    Route::post('add', "PeopleController@add");
    Route::post('del', "PeopleController@del");
});

Route::group(['prefix' => 'profile'], function () {
    Route::get('', function () {
        return view("profile");
    });
    Route::get('get_profile', "ProfileController@getProfile");

    Route::post('edit_info', "ProfileController@editInfo");
    Route::post('edit_pass', "ProfileController@editPass");
});

Route::group(['prefix' => 'sport'], function () {
    Route::get('', function () {return view("sport");});
    Route::get('get_rank', "SportController@getRank");
    Route::get('get_calories', "SportController@getCalories");
    Route::get('get_goals', "SportController@getGoals");
    Route::get('get_health', "SportController@getHealth");

    Route::post('input_health', "SportController@inputHealth");
});

Route::group(['prefix' => 'login'], function () {
    Route::get('',"MyLoginController@index");
    Route::post('',"MyLoginController@login");
});
