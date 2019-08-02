<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\goods;
use DB;

class GoodsController extends Controller
{
    public static function getCates(){
        $cates = DB::select("select *,concat(path,',',id)as path from cates order by path");

        foreach($cates as $key => $value){
            //统计','出现的次数
            $n = substr_count($value->path,',');

            //重复使用字符串
            $cates[$key]->cname = str_repeat("|-----",$n).$value->cname;
        }

        return $cates;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = DB::table('goods')->select();
        // dd($goods);
        $arr = [];
        $temp= [];
        foreach($goods as $k=>$v){
            // dump($v->id);
            $temp['id'] = $v->id;
            $temp['name'] = $v->name;
            $temp['num'] = $v->num;
            $temp['mprice'] = $v->mprice;
            $temp['price'] = $v->price;

            $arr[] = $temp;
        }
        // dd($arr);
        // die();
        // $goods_image = DB::table('goods_image')->get();
        // dd($goods_image);
        return view('admin.goods.index',['arr'=>$arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->input('id',0);
        return view('admin.goods.create',['id'=>$id,'cates'=>self::getCates()]);
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
        // 检测文件上传
        
        
        // die();
        DB::beginTransaction();
        $goods = new goods;
        $goods->name = $request->input('name','');
        $goods->num = $request->input('num','');
        $goods->mprice = $request->input('mprice','');
        $goods->price = $request->input('price','');
        $goods->desc = $request->input('desc','');
        $goods->cid = $request->input('cid','');
        // $goods->image = $path;
        $res1 = $goods->save();
        $id = $goods['id'];
        // dd($id);
        $file = $request->file("image");
        // dd($file);
        foreach ($file as $key => $value) {
             if(!empty($value)){//此处防止没有多文件上传的情况
               $allowed_extensions = ["png", "jpg", "gif"];
               if ($value->getClientOriginalExtension() && !in_array($value->getClientOriginalExtension(), $allowed_extensions)) {
                  return ['error' => 'You may only upload png, jpg or gif.'];die;
               }
               $destinationPath = 'storage/uploads/'; //public 文件夹下面建 storage/uploads 文件夹
               $extension = $value->getClientOriginalExtension();
               $fileName = str_random(10).'.'.$extension;//重命名
               $value->move($destinationPath, $fileName);
               $filePath = asset($destinationPath.$fileName);
               $post['landlord_img']="storage/uploads/".$fileName;
               $list=array('image'=>$fileName,'gid'=>$id);
               $res2 = DB::table('goods_image')->insert($list);                 
           }
         }
         // die();

        if($res1 && $res2){
            DB::commit();
            return redirect('admin/goods')->with('success','添加成功');
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
        $image = DB::table('goods_image')->where('gid',$id)->get();
        $desc = DB::table('goods')->where('id',$id)->get();
        // dump($imagedetial);
        return view('admin.goods.detial',['image'=>$image,'desc'=>$desc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        // dd($id);
        $res1 = Goods::destroy($id);
        $userinfo = DB::table('goods_image')->where('gid',$id)->first();
        // $path = $userinfo->image;
        // $path = "storage/uploads/".$userinfo->image;
        // dd($path);
        $res2 = DB::table('goods_image')->where('gid',$id)->delete();  
        if($res1 && $res2){
            //删除图片
            // Storage::delete([$path]);
            //提交事务
            DB::commit();
            return redirect('admin/goods')->with('success','删除成功');
        }else{
            //回滚事务
            DB::rollback();
            return back()->with('error','删除失败');
        }
    }
}
