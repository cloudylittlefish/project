@extends('admin.layout.main')
@section('js-head')
    <script type="text/javascript" charset="utf-8" src="{{asset('static')}}/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('static')}}/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('static')}}/ueditor/lang/zh-cn/zh-cn.js"></script>
@endsection
@section('content')
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">系统</a>
            </li>
            <li>
                <a href="#">文章管理</a>
            </li>
            <li class="active">修改文章</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">
        @include('admin.layout.msg')
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">修改文章</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" role="form" action="{{ route('admin.article.edit',['id'=>$article->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">文章名</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="title" placeholder="" name="title" required="" type="text" value="{{$article->title}}">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">关键词</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="keywords" placeholder="" name="keywords" required="" type="text"  value="{{$article->keywords}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">描述</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="description" >{{$article->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">缩略图</label>
                                    <div class="col-sm-6">
                                        <input  id="pic" placeholder="" name="pic" type="file">
                                        @if($article->pic)
                                            <img src="{{asset('static/uploads')}}{{$article->pic}}" height="100">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">所属分类</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="cate_id">
                                            <option value="0">请选择分类</option>
                                            @foreach($cateinfo as $cate)
                                                <option value="{{$cate->id}}" @if($cate->id == $article->cate_id) selected="selected" @endif>{{$cate->cate_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">内容</label>
                                    <div class="col-sm-6">
                                        <textarea id="content" name="content" >{{$article->content}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">保存信息</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        //实例化编辑器
        UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400, toolbars: [['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript',
                'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist',
                'selectall', 'simpleupload', 'insertimage', 'cleardoc']]});
    </script>
@endsection
