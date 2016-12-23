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

Route::get('/', [
    'uses' => 'PostController@index',
    'as' => 'posts.index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('posts/{post}-{slug}', [
    'uses' => 'PostController@show',
    'as' => 'posts.show',
])->where('post', '\d+');
