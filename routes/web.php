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
//后台分类路由
Route::resource('admin/cates','Admin\CatesController');
//后台商品管理路由
Route::resource('admin/goods','Admin\GoodsController');

//前台首页路由
Route::get('home','Home\IndexController@index');
//前台商品列表路由
Route::get('home/list','Home\ListController@index');
//前台购物车路由
Route::get('home/cart','Home\CartController@index');
//前台登录页面路由
Route::get('home/login','Home\LoginController@index');


