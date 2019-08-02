<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cates;
use DB;

class IndexController extends Controller
{
    public function index()
    {
    	$cates = DB::select('select * from cates where pid=0');
    	foreach($cates as $k=>$v){
    		$id=$v->id;
    		$res=DB::select("select * from cates where pid=$id");
    		foreach($res as $key=>$values){
	    		$id=$values->id;
	    		$row=DB::select("select * from cates where pid=$id");
	    		$res[$key]->list=$row;
	    	}
    		$cates[$k]->list=$res;
    	}
    	// dd($cates);
    	//显示模板
    	return view('home.index.index',['cates'=>$cates]);
    }
   
}
