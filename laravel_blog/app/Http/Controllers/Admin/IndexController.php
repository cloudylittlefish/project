<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //引入中间件
    public function  __construct()
    {
        $this->middleware('checkLogin');
    }
    //后台首页
    public function index(){
        return view('admin.index.index');
    }

    //退出登录
    public function logout(){
        session()->flush();
        return redirect()->route('admin.login.index')->with(['msg'=>'退出登录！']);
    }
}
