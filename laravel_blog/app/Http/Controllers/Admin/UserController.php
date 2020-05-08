<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Admin\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //管理员列表
    public function index(){
        $data = User::paginate(5);
        return view('admin.user.index',compact('data'));
    }

    //管理员添加
    public function add(){
        return view('admin.user.add');
    }

    //管理员添加处理
    public function addSave(UserRequest $request){
//        dd($request->all());
        $user = User::create($request->all());
        $user->password = bcrypt($request->input('password'));
        if($user->save()){
            return redirect()->route('admin.user.index')->with('msg','添加管理员成功！');
        }else{
            return redirect()->route('admin.user.index')->with('danger-msg','添加管理员失败！');
        }
    }

    //管理员修改界面
    public function edit(int $id){
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    //管理员修改处理
    public function editSave(UserRequest $request,int $id){
//        $update = User::find($id)->update($request->all());
        $user = User::find($id);
        $user->username = $request->input('username');
        $user->password = bcrypt(trim($request->input('password')));
        if($user->save()){
            return redirect()->route('admin.user.index')->with('msg','修改管理员成功！');
        }else{
            return redirect()->back()->with('danger-msg','修改管理员失败！');
        }
    }

    //管理员删除
    public function delete(Request $request, int $id){
        $del = User::destroy($id);
        if($del){
            return redirect()->route('admin.user.index')->with('msg','删除管理员成功！');
        }else{
            return redirect()->route('admin.user.index')->with('danger-msg','删除管理员失败！');
        }
    }
}
