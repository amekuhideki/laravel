<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('tasks');
});

Route::get('/rakuten_request', 'HogeController@rakuten_request');

Route::get('/yahoo_request', 'HogeController@yahoo_request');

Route::get('/search/{str?}', 'HogeController@search');

Route::get('foo/foo2', 'FooController@foo2');
