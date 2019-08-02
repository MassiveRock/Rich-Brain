<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\adminuser;
use App\Models\usersroles;
use Hash;


class AdminuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminusers = DB::select('select * from users_roles as u,roles as r,admin_users as a where u.rid = r.id and u.uid = a.id');
        // dd($adminusers);
        return view('admin.adminuser.index',['adminusers'=>$adminusers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $roles = DB::table('roles')->get();
        // // dump($roles);
        // // $arr = [];
        // $temp = [];
        // foreach($roles as $key=>$value){
        //     // dump($value);
        //     $temp[$key]['id'] = $value->id;
        //     $temp[$key]['rname'] = $value->rname;
        //     // dump($temp);

        // }
        // return $temp;
        return view('admin.adminuser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request->all());
        //检测文件上传
        if($request->hasFile('profile')){
            //获取头像
            $path = $request->file('profile')->store(date('Ymd'));
        }else{
            return back();
        }
        //开启事务
        DB::beginTransaction();


        //实例化模型
        $user = new adminuser;
        $user->uname = $request->input('uname','');
        $user->upass = Hash::make($request->input('upass',''));
        $user->profile = $path;
        $res1 = $user->save();

        // dump($user->id);
        // dump($request->input('rid',''));

        // die();
        $roles = new usersroles;
        $roles->uid = $user->id;
        $roles->rid = $request->input('rid','');
        $res2 = $roles->save();


        if($res1){
            DB::commit();
            return redirect('admin/adminuser')->with('success','添加成功');
        }else{
            DB::rollback();
            return back()->with('error','添加失败');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dump($id);
        // $roles = DB::table('roles')->get();
        $usersroles = DB::select('select * from roles as r,users_roles as u where r.id=u.rid');
        dump($usersroles);
        foreach($usersroles as $k=>$v){
            $rid[$k] = $v;
            // dump($v);
        }
        // dd($rid);
        // dd($rid);
        // $user->profile = $userinfo->profile;
        //加载视图
        return view('admin.adminuser.edit',['rid'=>$rid,'id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dump($request->all());
        // die();
        // dump($id);
        // dump($request->input());
        DB::beginTransaction();
        $usersroles = usersroles::find($id);
        $usersroles->rid = $request->input('rid','');
        $res = $usersroles->save();
        if($res){
            DB::commit();
            return redirect('admin/adminuser')->with('success','修改成功');
        }else{
            DB::rollBack();
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
