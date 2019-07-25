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

//后台首页路由-----庞磐
Route::get('admin','Admin\IndexController@index');
//后台用户路由-----庞磐
Route::resource('admin/users','Admin\UsersController');
