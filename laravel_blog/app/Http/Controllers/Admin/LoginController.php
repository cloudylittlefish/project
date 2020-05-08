<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //登录首页
    public function index(){
        if(auth()->check()){
            return redirect()->route('admin.index.index')->with('msg','您已登录！');
        }

        return view('admin.login.index');
    }

    //登录处理
    public function login(LoginRequest $request){
        if(auth()->attempt($request->only(['username','password']))){
            return redirect()->route('admin.index.index')->with('msg','登录成功！');
        }
        return redirect()->back()->withErrors(['errors'=>'用户名或密码错误']);
    }
}
