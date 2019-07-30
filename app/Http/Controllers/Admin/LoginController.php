<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use DB;

class LoginController extends Controller
{
    public function Login(){
    	return view('admin.login.login');
    }

    public function dologin(Request $request){
    	// dump($request->all());

    	//获取信息
    	$uname = $request->input('uname','');
    	$upass = $request->input('upass','');

    	$userinfo = DB::table('admin_users')->where('uname',$uname)->first();

    	if(!$userinfo){
    		echo "<script>alert('用户名或密码错误1');location.href='/admin/login';</script>";
    		exit;
    	}

    	if(!Hash::check($upass,$userinfo->upass)){
    		echo "<script>alert('用户名或密码错误2');location.href='/admin/login';</script>";
    		exit;
    	}

    	session(['admin_login'=>true]);
    	session(['admin_userinfo'=>$userinfo]);

    	return redirect('admin');



    	
    }
}
