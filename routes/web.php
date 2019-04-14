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
//Route::get('/helo', function () {
//    return view('welcome');
//});
Route::get('/foo', function () {
    var_dump('AD');
    return 'Foo!';
});

//Route::controller("about","HelloController@index"); // Controller名@クラス名で指定
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('sample/mailable/send', 'SampleController@SampleNotification');
// 送信メール本文のプレビュー
Route::get('sample/mailable/preview', function () {
  return new App\Mail\SampleNotification();
});
//Route::get('/user', 'UserController@index');
//Route::get('/', 'HelloController@index');
