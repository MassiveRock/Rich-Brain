<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台首页---庞磐
    public function index()
    {
    	// echo '后台首页';
    	//显示模板
    	return view('admin.index.index');
    }
}
