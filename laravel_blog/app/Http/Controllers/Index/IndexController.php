<?php

namespace App\Http\Controllers\Index;

use App\Models\Admin\Article;

class IndexController extends BaseController
{
    public function index(){
        $total = count(Article::all());
        $date = date('Y-m-d',time());
        $temp = Article::whereDate('updated_at',"$date")->get();
        $change = count($temp);
        $indexArtRes = Article::orderBy('id','desc')->paginate(4);
        return view('index.index.index',compact('indexArtRes','total', 'change'));
    }
}
