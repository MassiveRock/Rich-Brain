<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStore;
use App\Models\Users;
use Hash;
use DB;
use App\Models\Usersinfo;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取数据
        $users = Users::paginate(4);
        return view('admin.users.index',['users'=>$users]);
    }

    /**
     * 显示 添加页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        //显示页面
        return view('admin.users.create');
    }

    /**
     * 执行添加操作
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStore $request)
    {
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
        $user = new users;
        $user->uname = $request->input('uname','');
        $user->upass = Hash::make($request->input('upass',''));
        $user->email = $request->input('email','');
        $user->phone = $request->input('phone','');
        $res1 = $user->save();

        //添加头像
        $userinfo = new Usersinfo;
        $userinfo->uid = $user->id;
        $userinfo->profile = $path;
        $res2 = $userinfo->save();

        if($res1 && $res2){
            DB::commit();
            return redirect('admin/users')->with('success','添加成功');
        }else{
            DB::rollback();
            return back()->with('error','添加失败');
        }
    }

    /**
     * 显示详情页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * 显示修改页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::find($id);
        $userinfo = Usersinfo::where('uid',$id)->first();

        $user->profile = $userinfo->profile;
        //加载视图
        return view('admin.users.edit',['user'=>$user]);
    }

    /**
     * 执行修改操作
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        
        //检查用户是否有文件上传
        if(!$request->hasFile('profile')){
            $user = Users::find($id);
            $user->email = $request->input('email','');
            $user->phone = $request->input('phone','');
            if($user->save()){
                return redirect('admin/users')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
        }else{
            DB::beginTransaction();
            $path = $request->file('profile')->store(date('Ymd'));
            $usersinfo = Usersinfo::where('uid',$id)->first();
            Storage::delete([$usersinfo->profile]);
            //设置新图片
            $usersinfo->profile = $path;
            //执行修改
            $res1 = $usersinfo->save();
            $user = Users::find($id);
            //修改用户信息
            $user->email = $request->input('email','');
            $user->phone = $request->input('phone','');
            $res2 = $user->save();

            if($res1 && $res2){
                DB::commit();
                return redirect('admin/users')->with('success','修改成功');
            }else{
                DB::rollBack();
                return back()->with('error','修改失败');
            }
        }
        // dump($request->all());

    }

    /**
     * 删除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::beginTransaction();
        $res1 = Users::destroy($id);

        $userinfo = Usersinfo::where('uid',$id)->first();
        $path = $userinfo->profile;
        //删除用户
        $res2 = Usersinfo::where('uid',$id)->delete();
        //判断
        if($res1 && $res2){
            //删除图片
            Storage::delete([$path]);
            //提交事务
            DB::commit();
            return redirect('admin/users')->with('success','删除成功');
        }else{
            //回滚事务
            DB::rollback();
            return back()->with('error','删除失败');
        }
    }
}
