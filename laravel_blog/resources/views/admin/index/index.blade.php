@extends('admin.layout.main')

@section('content')
    @include('admin.layout.msg')
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">系统</a>
            </li>
            <li class="active">主页</li>
        </ul>
    </div>
    <div style="text-align:center; line-height:1000%; font-size:24px;">
        <a href="http://study.tongpankt.com" target="_blank">Laravel6个人博客</a><br /><p style="color:#f00;">个人博客</p>
    </div>
@endsection
