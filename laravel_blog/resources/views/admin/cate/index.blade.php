@extends('admin.layout.main')
@section('css')
    <style>
        .page-row{
            padding: 20px;
            padding-bottom: 0px;
            text-align: right;
        }
    </style>
@endsection
@section('content')
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">系统</a>
            </li>
            <li>
                <a href="#">分类管理</a>
            </li>
            <li class="active">分类列表</li>
        </ul>
    </div>

    <div class="page-body">
        @include('admin.layout.msg')
        <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onclick="javascript:window.location.href = '/admin/user/add.html'"> <i class="fa fa-plus"></i> Add
        </button>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="flip-scroll">
                            <table class="table table-bordered table-hover">
                                <thead class="">
                                <tr>
                                    <th width="6%">ID</th>
                                    <th >分类名</th>
                                    <th width="12%">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $cate)
                                    <tr>
                                        <td >{{$cate->id}}</td>
                                        <td >{{$cate->cate_name}}</td>
                                        <td >
                                            <a href="{{route('admin.cate.edit',['id'=>$cate->id])}}" class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 编辑
                                            </a>
                                            <a href="#" onclick="warning('确实要删除吗', '{{route('admin.cate.delete', ['id'=>$cate->id])}}')" class="btn btn-danger btn-sm shiny">
                                                <i class="fa fa-trash-o"></i> 删除
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div class="page-row">{{$data->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
