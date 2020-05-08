<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use App\Models\Admin\Cate;
use Illuminate\Http\Request;

class CateController extends Controller
{
    //分类列表
    public function index(){
        $data = Cate::paginate(5);
        return view('admin.cate.index',compact('data'));
    }

    //分类添加
    public function add(){
        return view('admin.cate.add');
    }

    //分类添加处理
    public function addSave(CateRequest $request){
        $cate = Cate::create($request->all());
        if($cate->id){
            return redirect()->route('admin.cate.index')->with('msg','添加分类成功！');
        }else{
            return redirect()->route('admin.cate.index')->with('danger-msg','添加分类失败！');
        }
    }

    //分类修改界面
    public function edit(int $id){
        $cate = Cate::find($id);
        return view('admin.cate.edit',compact('cate'));
    }

    //分类修改处理
    public function editSave(CateRequest $request,int $id){
//        $update = Cate::find($id)->update($request->all());
        $cate = Cate::find($id);
        $cate->cate_name = $request->input('cate_name');
        $cate->keywords = $request->input('keywords');
        $cate->description = $request->input('description');
        if($cate->save()){
            return redirect()->route('admin.cate.index')->with('msg','修改分类成功！');
        }else{
            return redirect()->back()->with('danger-msg','修改分类失败！');
        }
    }

    //分类删除
    public function delete(Request $request, int $id){
        $del = Cate::destroy($id);
        if($del){
            return redirect()->route('admin.cate.index')->with('msg','删除分类成功！');
        }else{
            return redirect()->route('admin.cate.index')->with('danger-msg','删除分类失败！');
        }
    }
}
