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
Route::get('posts/create', ['as' => 'posts.create', 'uses' => 'PostController@create']);
Route::post('posts', ['as' => 'posts.store', 'uses' => 'PostController@store']);
Route::get('posts/{id}', ['as' => 'posts.show', 'uses' => 'PostController@show']);
Route::get('posts/{id}/edit', ['as' => 'posts.edit', 'uses' => 'PostController@edit']);
Route::put('posts/{id}', ['as' => 'posts.update', 'uses' => 'PostController@update']);
Route::delete('posts/{id}', ['as' => 'posts.delete', 'uses' => 'PostController@destroy']);
Route::get('posts/hot', ['as' => 'posts.hot', 'uses' => 'PostController@hot']);
Route::get('posts/my', ['as' => 'posts.my', 'uses' => 'PostController@my']);
Route::post('posts/{id}/comments', ['as' => 'comments.store', 'uses' => 'PostController@storeComment']);
Route::get('posts/tag/{id}', ['as' => 'posts.tag', 'uses' => 'PostController@tag']);

Route::get('auth/register' , ['as' => 'register.index'  , 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', ['as' => 'register.process', 'uses' => 'Auth\AuthController@postRegister']);

Route::get('auth/login', ['as' => 'login.index', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', ['as' => 'login.process', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'logout.process', 'uses' => 'Auth\AuthController@getLogout']);

Route::get('password/email' , ['as' => 'forgetpassword.index'  , 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email', ['as' => 'forgetpassword.process', 'uses' => 'Auth\PasswordController@postEmail']);

Route::get('password/reset/{token}', ['as' => 'resetpassword.index'  , 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset', ['as' => 'resetpassword.process', 'uses' => 'Auth\PasswordController@postReset']);

Route::get('auth/openid' , ['as' => 'openid.process' , 'uses' => 'Auth\OpenIdController@process']);
Route::post('auth/openid', ['as' => 'openid.redirect', 'uses' => 'Auth\OpenIdController@redirect']);

Route::get('about', ['as' => 'about', 'uses' => 'AboutController@index']);
