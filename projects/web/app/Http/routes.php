<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
define('ROUTE_BASE', 'lumen/public');
$app->get(ROUTE_BASE . '/activity', function(){
    return view('activity');
});
$app->get(ROUTE_BASE . '/index',"IndexController@Index");
$app->get(ROUTE_BASE . '/login', function(){
    return view('login');
});
$app->get(ROUTE_BASE . '/message', function(){
    return view('message');
});
$app->get(ROUTE_BASE . '/people', function(){
    return view('people');
});
$app->get(ROUTE_BASE . '/setting', function(){
    return view('setting');
});
$app->get(ROUTE_BASE . '/sport', function(){
    return view('sport');
});
