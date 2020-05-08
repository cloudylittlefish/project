<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Admin\Article;
use App\Models\Admin\Cate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct(){
        $this->getCates();
        $this->hotArticles();
        //使其他页面有值不报错
        View::share('cateId',0);
    }

    //获取分类
    public function getCates(){
        $cateRes = Cate::all();
        View::share('cateRes', $cateRes);
    }

    //热门文章
    public function hotArticles(){
        $artRes = Article::orderBy('click','desc')->take(4)->get();
        View::share('artRes',$artRes);
    }
}
