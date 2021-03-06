@extends('admin.layout.main')
@section('content')
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">系统</a>
            </li>
            <li>
                <a href="#">分类管理</a>
            </li>
            <li class="active">添加分类</li>
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
                        <span class="widget-caption">新增分类</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" role="form" action="{{ route('admin.cate.add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">分类名</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="cate_name" placeholder="" name="cate_name" required="" type="text">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">关键词</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="keywords" placeholder="" name="keywords" required="" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">描述</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="description" ></textarea>
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
