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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PostController@index');
Route::get('/onlyuser', 'PostController@show');
//Route::post('/', 'PostController@index');
Route::get('/create', 'PostController@create');
Route::post('/create', 'PostController@store');
Route::get('/{post}/edit', 'PostController@edit');
Route::patch('/{post}', 'PostController@update');
Route::delete('/{post}', 'PostController@destroy');
Route::get('/show', 'PostController@showin');

Route::get('/{post}/show', 'CommentController@index');
Route::post('/{post}/show', 'CommentController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
