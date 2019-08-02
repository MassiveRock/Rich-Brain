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


//后台登录路由
Route::get('admin/login','Admin\LoginController@login');
//后台执行登录路由
Route::post('admin/login/dologin','Admin\LoginController@dologin');

//无权限
Route::get('admin/allow',function(){
	return view('admin.allow.allow');
});
//权限验证中间件  allow
Route::group(['middleware'=>'login'],function(){
	//后台首页路由-----庞磐
	Route::get('admin','Admin\IndexController@index');
	//后台用户路由-----庞磐
	Route::resource('admin/users','Admin\UsersController');
	//后台分类路由
	Route::resource('admin/cates','Admin\CatesController');
	//后台商品管理路由
	Route::resource('admin/goods','Admin\GoodsController');


	//后台管理员管理路由
	Route::resource('admin/adminuser','Admin\AdminuserController');
	//后台权限管理
	Route::resource('admin/nodes','Admin\NodesController');
	//角色管理
	Route::resource('admin/roles','Admin\RolesController');
});

//前台首页路由
Route::get('home','Home\IndexController@index');
//前台商品列表路由
Route::get('home/list','Home\ListController@index');
//前台购物车路由
Route::get('home/cart','Home\CartController@index');
//前台登录页面路由
Route::get('home/login','Home\LoginController@index');


