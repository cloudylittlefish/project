@extends('admin.layout.main')
@section('content')
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">系统</a>
            </li>
            <li>
                <a href="#">管理员管理</a>
            </li>
            <li class="active">修改管理员</li>
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
                        <span class="widget-caption">修改管理员</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" role="form" action="{{ route('admin.user.edit',['id'=>$user->id]) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">用户名</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="username" placeholder="" name="username" required="" type="text" value="{{$user->username}}">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">密码</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="password" placeholder="" name="password" required="" type="text">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
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
