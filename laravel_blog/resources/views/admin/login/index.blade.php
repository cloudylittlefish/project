<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>我的博客</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">
    <style>
        .code{
            display: flex;
        }
        .code img{
            border: 1px solid #ccc;
            margin-left: 5px;
            border-radius: 3px !important;
            cursor: pointer;
        }
    </style>
</head>
                                           <!--Head Ends-->
                                           <!--Body-->

<body>
<div class="login-container animated fadeInDown">
    @include('admin.layout.msg')
    <form action="{{ route('admin.login.login')  }}" method="post">
        @csrf
        <div class="loginbox bg-white">
            <div class="loginbox-title">SIGN IN</div>
            <div class="loginbox-textbox">
                <input value="admin" class="form-control" placeholder="username" name="username" type="text">
            </div>
            <div class="loginbox-textbox">
                <input class="form-control" placeholder="password" name="password" type="password">
            </div>
            <div class="loginbox-textbox code">
                <input class="form-control" placeholder="code" name="code" type="text">
                <img src="{{Captcha::src('mini')}}" onclick="this.src='{{Captcha::src('mini')}}?'+Math.random()">
            </div>
            <div class="loginbox-submit">
                <input class="btn btn-primary btn-block" value="Login" type="submit">
            </div>
        </div>
        <div class="logobox">
            <p class="text-center">个人博客后台</p>
        </div>
    </form>
</div>
<!--Basic Scripts-->
<script src="/static/admin/style/jquery.js"></script>
<script src="/static/admin/style/bootstrap.js"></script>
<script src="/static/admin/style/jquery_002.js"></script>
<!--Beyond Scripts-->
<script src="/static/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>
