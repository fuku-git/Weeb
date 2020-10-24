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

Route::get('/','PostsController@index')->name('top');

Route::get('/board', 'PostController@index')->name('board'); //追加 sudoさんコピペ
Route::resource('posts', 'PostController', ['only'=>['create', 'store']]);//追加