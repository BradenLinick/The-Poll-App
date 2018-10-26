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
    return view('welcome');
});

Auth::routes();

Route::get('/create', 'PollController@create');
Route::post('/create', 'PollController@store');

Route::get('/index', 'PollController@index');
Route::get('/index/{id}', 'PollController@next');
Route::post('/index/{id}', 'PollController@add');

Route::post('/index', 'PollController@add');