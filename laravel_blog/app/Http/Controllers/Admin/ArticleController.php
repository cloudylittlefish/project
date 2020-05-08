<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Admin\Article;
use App\Models\Admin\Cate;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //文章列表
    public function index(){
        $data = Article::paginate(5);
        return view('admin.article.index',compact('data'));
    }

    //文章添加
    public function add(){
        $cateinfo = Cate::all();
        return view('admin.article.add',compact('cateinfo'));
    }

    //文章添加处理
    public function addSave(ArticleRequest $request){
        $picSrc = $this->uploadImg($request, 'pic');
        $data = $request->all();
        $data['pic'] = $picSrc;
        $article = Article::create($data);
        if($article->id){
            return redirect()->route('admin.article.index')->with('msg','添加文章成功！');
        }else{
            return redirect()->route('admin.article.index')->with('danger-msg','添加文章失败！');
        }
    }

    //文章修改界面
    public function edit(int $id){
        $cateinfo = Cate::all();
        $article = Article::find($id);
        return view('admin.article.edit',compact('article','cateinfo'));
    }

    //文章修改处理
    public function editSave(ArticleRequest $request,int $id){
//        $update = article::find($id)->update($request->all());
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->keywords = $request->input('keywords');
        $article->description = $request->input('description');
        $article->content = $request->input('content');
        $article->cate_id = $request->input('cate_id');
        if($request->hasFile('pic')){
            $article->pic = $this->uploadImg($request, 'pic');
        }

        if($article->save()){
            return redirect()->route('admin.article.index')->with('msg','修改文章成功！');
        }else{
            return redirect()->back()->with('danger-msg','修改文章失败！');
        }
    }

    //文章删除
    public function delete(Request $request, int $id){
        $del = Article::destroy($id);
        if($del){
            return redirect()->route('admin.article.index')->with('msg','删除文章成功！');
        }else{
            return redirect()->route('admin.article.index')->with('danger-msg','删除文章失败！');
        }
    }

    //图片上传
    private function uploadImg($request, $fileImg){
        if($request->hasFile($fileImg)){
            $file = $request->file($fileImg);
            //获取图片后缀名
            $ext = $file->getClientOriginalExtension();
            $fileName = time(). '.' .$ext;
            $filePath = 'static/uploads/'.date('Ymd');
            $fileInfo = $file->move(public_path($filePath),$fileName);
            $picSrc = '/'.date('Ymd'). '/'. $fileName;
        }
        return isset($picSrc) ? $picSrc : '';
    }

    //回收站
    public function restored(){
        $data = Article::onlyTrashed()->paginate(5);
        return view('admin.article.restored',compact('data'));
    }

    //文章恢复
    public function recovery(int $id){
        if($id>0){
            $res = Article::withTrashed()->find($id)->restore();
            if($res){
                return redirect()->route('admin.article.restored')->with('msg','文章恢复成功！');
            }
        }
    }

    //永久删除
    public function del_forever(int $id){
        if($id>0){
            $res = Article::withTrashed()->find($id)->forceDelete();
            if($res){
                return redirect()->route('admin.article.restored')->with('msg','文章已永久删除！');
            }
        }
    }
}
