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

Route::get('/layout','PostsController@layout')->name('layout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//ダミーデータを表示する
Route::get('/posts.result','PostsController@result')->name('result');

//検索結果を表示する
Route::get('/serch','PostsController@serch')->name('serch');

Route::get('/mypage', 'MyPageController@index')->name('mypage');
