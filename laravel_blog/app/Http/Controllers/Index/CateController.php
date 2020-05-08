<?php

namespace App\Http\Controllers\Index;

use App\Models\Admin\Article;

class CateController extends BaseController
{
    public function index(int $id){
        $cateArtRes = Article::orderBy('id','desc')->where('cate_id',$id)->paginate(4);
        return view('index.cate.index',['cateId'=>$id, 'cateArtRes'=>$cateArtRes]);
    }
}
