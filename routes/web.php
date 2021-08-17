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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();


//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');
// Route::post('/register', 'Auth\RegisterController@register');
// Route::post('/register', 'Auth\RegisterController@validator');
// Route::post('/register', 'Auth\RegisterController@create');

Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');

//ログイン中のページ
Route::get('/top','PostsController@index');
Route::post('/top','PostsController@index');

Route::post('/newpost','PostsController@post');

Route::get('{id}/delete','PostsController@delete');

Route::get('{id}/update','PostsController@update');

Route::get('/profile','UsersController@profile');
Route::post('/profile','UsersController@profile');

Route::get('/search','UsersController@index');
Route::post('/search','UsersController@serch');

Route::get('/follow-list','PostsController@index');
Route::get('/follower-list','PostsController@index');
