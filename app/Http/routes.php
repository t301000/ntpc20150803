<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::pattern('id', '[0-9]+');
//Route::get('/', ['as' => 'index', function () {
//    return view('posts.index', ['page_title' => '文章總覽']);
//}]);
Route::get('/', ['as' => 'index', 'uses' => 'PostController@index']);

Route::get('posts', ['as' => 'posts.index', 'uses' => 'PostController@index']);
Route::get('posts/{id}', ['as' => 'posts.show', 'uses' => 'PostController@show']);
Route::get('posts/hot', ['as' => 'posts.hot', 'uses' => 'PostController@hot']);
Route::get('posts/my', ['as' => 'posts.my', 'uses' => 'PostController@my']);
Route::post('posts/{id}/comments', ['as' => 'comments.store', 'uses' => 'PostController@storeComment']);

Route::get('auth/login', ['as' => 'auth.login']);
Route::get('auth/logout', ['as' => 'auth.logout']);

Route::get('about', ['as' => 'about', 'uses' => 'AboutController@index']);
