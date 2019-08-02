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
        // dump($userinfo);
        if(!$userinfo){
            echo "<script>alert('用户名或者密码错误');location.href='/admin/login';</script>";               
            exit;
        }


        // 验证密码正确
        if (!Hash::check($upass, $userinfo->upass)) {
            echo "<script>alert('用户名或者密码错误');location.href='/admin/login';</script>";               
                exit;
        }


        // 登录成功
        session(['admin_login'=>true]);
        session(['admin_userinfo'=>$userinfo]);


         // 获取当前用户的权限
         $nodes = DB::select('select n.cname,n.aname from nodes as n,users_roles as ur,roles_nodes as rn where ur.uid = '.$userinfo->id.' and ur.rid = rn.rid and rn.nid = n.id');

         $nodes_data = [];
         foreach ($nodes as $key => $value) {
            if($value->aname == 'create'){
               $nodes_data[$value->cname][] = 'store'; 
            }

            if($value->aname == 'edit'){
               $nodes_data[$value->cname][] = 'update'; 
            }

            $nodes_data[$value->cname][] = $value->aname; 

         }
         // 压入后台首页权限
         $nodes_data['indexcontroller'][] = 'index'; 

         // 将权限压入session
         session(['admin_nodes'=>$nodes_data]);

        // 跳转
        return redirect('admin');


    	
    }
}
