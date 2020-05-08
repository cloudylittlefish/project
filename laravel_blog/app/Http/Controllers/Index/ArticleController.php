<?php

namespace App\Http\Controllers\Index;

use App\Models\Admin\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    public function index(int $id){
        Article::where('id', $id)->increment('click');
        $articleInfo = Article::find($id);
        return view('index.article.article',['articleInfo'=>$articleInfo]);
    }

    //文章搜索
    public function search(Request $request){
        $kw = $request->input('kw');
        $searchArtRes = Article::orderBy('id','desc')->when($kw, function (Builder $query) use($kw){
                $query->where('title', 'like', "%{$kw}%");
        })->paginate(4);
        return view('index.article.search',compact('searchArtRes'));
    }
}
