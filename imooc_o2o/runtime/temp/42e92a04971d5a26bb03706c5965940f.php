<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\phpstudy_pro\WWW\imooc_o2o\public/../application/admin\view\category\store.html";i:1583825298;s:82:"D:\phpstudy_pro\WWW\imooc_o2o\public/../application/admin\view\public\header2.html";i:1583825755;s:82:"D:\phpstudy_pro\WWW\imooc_o2o\public/../application/admin\view\public\footer2.html";i:1583825755;}*/ ?>
{template 'public/header-base'}
<style>
    .nav.nav-tabs{border-color:#20a0ff;}
    .nav-tabs>li>a:hover{border-color:#eee #eee #20a0ff #eee;}
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{background-color:#20a0ff; border-color:#20a0ff;}
    .nav-tabs>li>a {border-radius: 0 0 0 0;}
    .nav{background-color: white;}
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
        color: #FFF;
        background-color: #20a0ff;
        border-color: #20a0ff;
    }
    .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus{
        color: #31C2A5;
        background-color: orange;
    }
    .list-group-item.active{
        background-color: orange;
        border-color: #20a0ff;
        color: #31C2A5;
    }
    .navbar-inverse {
        background-color: #fff;
        border-color: #20a0ff
    }
    .block {
        display: block;
    }
    .clear {
        display: block;
        overflow: hidden;
    }
    .navbar-nav > li > a {
        padding-top: 10px;
        padding-bottom: 10px;
        line-height: 40px
    }
    .navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus{
        color: #777;
        background-color: #eee;
    }
    .big-menu{
        background-color: #2A3542;
        padding-right: 0px;
        padding-left: 0px;
        height: 1400px;
    }
    @media all and (min-width: 900px) and (max-width: 1003px) {
        .big-menu{width: 14.666667%;}
    }
    @media all and (max-width: 1450px) {
        .big-menu{width: 16.666667%;}
    }
    @media all and (min-width: 1451px) {
        .big-menu{width: 12.666667%;}
    }
    /*.yg_main{position: fixed;left: 250px;top: 50px;right: 20px;z-index: 2;overflow-y: scroll;}*/
    .big-menu .panel .list-group-item{
        border:none;overflow:hidden; white-space:normal; text-overflow:clip;background-color: #35404D;
        font-size: 13px;
        font-weight: bold;
        padding:10px 40px 10px 47px;
    }
    .panel>.list-group .list-group-item{padding-left: 34px;}
    .big-menu .panel .list-group-item:hover{
        background-color: #505D6C;
        color:white;
    }
    .btn-primary {
        color: #fff;
        background-color: #0066cd;
        border-color: #0066cd;
    }
    .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active,
    .open > .dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #0066cd;
        border-color: #0066cd;
    }
    .big-menu .panel .panel-heading .panel-title{
        width: 100px;
        float: left;
        font-weight: bold;
        font-size: 13px;
    }

    .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse
    .navbar-nav>.active>a:focus{
        color: #f60;
        background-color: #e7e7e7;
        border-bottom: 2px solid transparent;
        border-color: #f60;
    }
    button{outline: none;}
    .left{float: left;}
    .right{float: right;}
    a{text-decoration: none;}
    a:hover{text-decoration: none;}
    ul,li{list-style: none;}
    ul{margin-bottom: 0px;}
    body{font-size: 14px;font-family: "微软雅黑";}
    .clearfix{clear:both;}
    .header{
        background-color: #31C2A5;;
        color: white;
        height: 100%;
    }

    .header_left{
        height: 50px;
        padding-top: 10px;
    }
    .header_logo{
        width: 34px;
        height: 30px;
        float: left;
    }
    .header_title{
        float: left;
        font-size: 20px;
        font-weight: bold;
        margin-left: 10px;
    }
    @media all and (max-width: 1270px) {
        .header_right{
            width: 30%;
            left: 36%;
        }
    }
    @media all and (max-width: 1250px) {
        .header_right{
            width: 34%;
            left: 35%;
        }
    }
    @media all and (max-width: 1200px) {

    }
    @media all and (min-width: 1270px){
        .header_right{
            width: 27%;
        }
    }
    .header_right{
        height: 50px;
        padding: 8px 0px;
    }
    .header_right>li>a:hover{color: white;}
    .header_right>li{
        float: left;
        padding: 0px 20px;
        border-right: 1px solid #049473;
        line-height: 33px;
    }
    .ymargin{
        float: right;
        width: 30px;
        height: 30px;
        margin-top: 5px;
    }
    .header_left>a:hover{color: white;}
    .panel,.panel-heading{border-radius: 0px;}
    .list-group-item:last-child,.list-group-item:first-child{border-radius: 0px;}
    .yg_login{height: 150px;background-color: #263949;padding-top: 35px;text-align: center;color: white;font-size: 14px;}
    .yg_login>img{margin: 0px auto;width: 60px;height: 60px;background-color: #5CB85C;border-radius: 50%;border: none;margin-bottom: 15px;}
    .header_btn{text-align: center;float: left;margin-left: 20px;width: 100px;border-right: 1px solid #049473;border-left: 1px solid #049473;height: 30px;line-height: 30px;}
    .fa-bed,.fa-area-chart,.fa-university,.fa-diamond,.fa-info-circle,.fa-vimeo-square,.fa-money,.fa-cog,.fa-user{margin-right: 15px;}

    .yg_back{background-color: #F2F2F2;}
</style>
{php $res=pdo_get('zbkq_platform',array('uniacid'=>$_W['uniacid']))}
<div class="col-md-12 col-xs-12 col-sm-12 header">
    <div class="col-md-4 col-xs-5 header_left">
        <div class="header_logo">
            <img width="34px" height="30px" src="" alt=""/>
        </div>
        <div class="header_title">后台管理系统</div>
        <a href="{php echo $this->createWebUrl('storemanger')}"><div class="header_btn">返回首页</div></a>
    </div>
    <ul class="col-md-3 col-md-push-4 col-xs-4 col-xs-push-4 header_right">
        <!--  <li>
             <img width="31px" height="32px" src="../addons/zh_dianc/template/images/man.png" alt=""/>
             <span>admin</span>
         </li> -->
        <li>
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" style="display:block; max-width:185px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; "><i class="fa fa-user"></i>公众号管理员 <b class="caret"></b></a>
            <ul class="dropdown-menu">

                <li><a href="<?php echo url("","",true,false);?>" target="_blank"><i class="fa fa-weixin fa-fw"></i> 我的账号</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo url("","",true,false);?>" target="_blank"><i class="fa fa-sitemap fa-fw"></i> 系统选项</a></li>
                <li><a href="<?php echo url("","",true,false);?>" target="_blank"><i class="fa fa-cloud-download fa-fw"></i> 自动更新</a></li>
                <li><a href="<?php echo url("","",true,false);?>" target="_blank"><i class="fa fa-refresh fa-fw"></i> 更新缓存</a></li>
                <li class="divider"></li>

            </ul>
        <li>
            <a href=""> <img width="21px" height="20px" src="../addons/zh_zbkq/template/images/home.png" title="返回系统"/></a>

        </li>
        <!-- <li>
            <img src="../addons/zh_dianc/template/images/tongzhi.png" width="15px" height="18px" alt=""/>
        </li> -->
        <li>
            <a href="<?php echo url("","",true,false);?>"><img src="../addons/zh_zbkq/template/images/kaiguan.png" width="20px" height="20px" title="退出系统"/></a>
        </li>
    </ul>
</div>
<div class="container-fluid  col-md-12 col-xs-12 col-sm-12">
    <?php if(defined('IN_MESSAGE')): ?>
    <div class="jumbotron clearfix alert alert-<?php echo $label; ?>">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
                <i class="fa fa-5x fa-<?php if($label=='success'): ?>check-circle<?php endif; if($label=='danger'): ?>times-circle<?php endif; if($label=='info'): ?>info-circle<?php endif; if($label=='warning'): ?>exclamation-triangle<?php endif; ?>"></i>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
                <?php if(is_array($msg)): ?>
                <h2>MYSQL 错误：</h2>
                <p>{php echo cutstr($msg['sql'], 300, 1);}</p>
                <p><b><?php echo $msg['error'][0]; ?> <?php echo $msg['error'][1]; ?>：</b><?php echo $msg['error'][2]; ?></p>
                <?php else: ?>
                <h2><?php echo $caption; ?></h2>
                <p><?php echo $msg; ?></p>
                <?php endif; if($redirect): ?>
                <p><a href="<?php echo $redirect; ?>">如果你的浏览器没有自动跳转，请点击此链接</a></p>
                <script type="text/javascript">
                    setTimeout(function () {
                        location.href = "<?php echo $redirect; ?>";
                    }, 3000);
                </script>
                <?php else: ?>
                <p>[<a href="javascript:history.go(-1);">点击这里返回上一页</a>] &nbsp; [<a href="./?refresh">首页</a>]</p>
                <?php endif; ?>
            </div>
            <?php else: ?>
            <div class="row">
                {php $frames = empty($frames) ? $GLOBALS['frames'] : $frames; _calc_current_frames($frames);}
                <?php if(!empty($frames)): ?>
                <div class="col-md-2 col-lg-2 big-menu col-md-2 col-xs-2 col-sm-2">

                    <?php if($cur_store): ?>
                    <!-- <div class="panel panel-default" style="padding-bottom: 10px;padding-top: 5px;">
                        <span style="width:13.3333337%; height:160px;display: table-cell; line-height:160px; vertical-align:middle;text-align: center;padding-top: 5px;">
                            <img style="display: inline-block;width: 160px;height: 160px;
box-sizing: border-box;margin-top:10px;padding: 10px;border: 1px solid #f2f2f2;box-sizing: border-box;max-width: 100%;" alt="image" src="{php echo tomedia($cur_store['logo'])}" onerror="this.src='../addons/zh_dianc/template/images/logo.png';"/>
                        </span>
                        <a href="#" >
                            <span style="text-align:center;margin-top: 8px;" class="block m-t-xs"><strong class="font-bold"><?php echo $cur_store['title']; ?></strong></span>
                            <span style="text-align:center;" class="text-muted text-xs block"><strong class="font-bold"><?php echo $_W['user']['username']; ?></strong>(<?php if($_W['role'] == 'founder'): ?>系统管理员<?php elseif($_W['role'] == 'manager'): ?>公众号管理员<?php else: ?>门店管理员<?php endif; ?>)</span>
                        </a>
                    </div> -->
                    <div class="yg_login">
                        <img src="{php echo tomedia($cur_store['ewm_logo'])}">
                        <div><?php echo $cur_store['name']; ?></div>
                    </div>
                    <?php endif; ?>
                    {loop $frames $k $frame}
                    <div class="panel panel-default" style="border-color: #35404d;color: #E5E8ED;">

                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $frame['id']; ?>" style="background-color: #35404d;cursor: pointer;color: #E5E8ED;border:none;height: 50px;">
                            <div class="panel-title"><?php echo $frame['title']; ?></div>
                            <div class="ymargin fa fa-chevron-circle-down"></div>
                        </div>
                        <ul class="panel-collapse collapse" id="<?php echo $frame['id']; ?>">
                            {loop $frame['items'] $link}
                            <?php if(!empty($link['append'])): ?>
                            <li class="list-group-item<?php echo $link['active']; ?>" onclick="window.location.href = '<?php echo $link['url']; ?>';" style="cursor:pointer;" kw="<?php echo $link['title']; ?>">
                                <?php echo $link['title']; ?>
                                <a class="pull-right" href="<?php echo $link['append']['url']; ?>"><?php echo $link['append']['title']; ?></a>
                            </li>
                            <?php else: ?>
                            <a class="list-group-item<?php echo $link['active']; ?>" href="<?php echo $link['url']; ?>" kw="<?php echo $link['title']; ?>" style="padding-left: 40px;"><?php echo $link['title']; ?></a>
                            <?php endif; ?>
                            {/loop}
                        </ul>
                    </div>
                    {/loop}
                    <script type="text/javascript">
                        require(['bootstrap'], function(){
                            $('#search-menu input').keyup(function() {
                                var a = $(this).val();
                                $('.big-menu .list-group-item, .big-menu .panel-heading').hide();
                                $('.big-menu .list-group-item').each(function() {
                                    $(this).css('border-left', '0');
                                    if(a.length > 0 && $(this).attr('kw').indexOf(a) >= 0) {
                                        $(this).parents(".panel").find('.panel-heading').show();
                                        $(this).show().css('border-left', '3px #428bca double');
                                    }
                                });
                                if(a.length == 0) {
                                    $('.big-menu .list-group-item, .big-menu .panel-heading').show();
                                }
                            });
                        });
                    </script>
                </div>
                <div class="col-lg-10 col-md-10 col-xs-10 col-sm-10 yg_back">
                    <style>.topNav{border-bottom-color: rgb(0, 0, 0);border-bottom-width: 0.1em;border-bottom-style: inset;}</style>
                    <?php if(CRUMBS_NAV == 1): ?>
                    {php global $module_types;global $module;global $ptr_title;}
                    {php $frames = empty($frames) ? $GLOBALS['frames'] : $frames; _calc_current_frames($frames);}
                    <script language='javascript'>
                        $(function(){
                            $(".breadcrumb").remove();
                        })
                    </script>
                    <?php elseif(CRUMBS_NAV == 2): ?>
                    {php global $module_types;global $module;global $ptr_title; global $site_urls; $m = $_GPC['m'];}
                    <ul class="nav nav-tabs">
                        <li><a href="<?php echo url("","",true,false);?>">管理<?php echo $module['title']; ?></a></li>
                        <li><a href="<?php echo url("","",true,false);?>"><i class="fa fa-plus"></i> 添加<?php echo $module['title']; ?></a></li>
                        <?php if(!empty($site_urls)): ?>
                        {loop $site_urls $site_url}
                        <li <?php if($_GPC['do'] == $site_url['do']): ?> class="active"<?php endif; ?>><a href="<?php echo $site_url['url']; ?>"> <?php echo $site_url['title']; ?></a></li>
                        {/loop}
                        <?php endif; ?>
                    </ul>
                    <?php endif; else: ?>
                    <div>
                        <?php endif; endif; ?>

                        <script type="text/javascript">

                        </script>
                        <audio id="myaudio" src="../addons/zh_jd/template/images/text2audio.mp3" controls="controls"  hidden="true" ></audio>

<style type="text/css">
    /*#nav3{display: block;visibility: visible;}*/
    .nav-tabs>li>a:hover{
        color: #333;
        border-color: #31C2A5;
        background-color: white;
    }
    .nav-tabs > li.active > a,.nav-tabs > li.active > a:hover{
        background-color: #31C2A5;
        color: white;
        border-color: #31C2A5;
    }
    .nav.nav-tabs{border-color: #31C2A5;margin-top: 30px;margin-bottom: 30px;}
    .yg5_key>div{float: left;line-height: 34px;}
    .store_td1{height: 45px;}
    .store_list_img{width: 60px;height: 60px;}
    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;}
    .yg5_tr2>td{padding: 15px;border: 1px solid #e5e5e5;text-align: center;}
    .yg5_tr1>td{
        border: 1px solid #e5e5e5;
        padding-left: 15px;
        background-color: #FAFAFA;
        font-weight: bold;
        text-align: center;
    }
    .yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}
    .yg_dnorder{padding-right: 20px;padding-left: 20px;padding-top: 20px;}
    .ygbtn{
        background-color: #31C2A5;
        color:white;
        padding-left: 30px;
        padding-right: 30px;
        margin-left: 30px;
    }
    .ygbtn:hover{color: white;}
    .ygsearch{padding: 2px 0px;}
    .ygsearch>input{font-size: 16px;width: 400px;text-indent: 1em;height: 32px;border:1px solid #ddd;}
    .searchname{font-size: 16px;color: #666;border:1px solid #eee;width: 400px;padding: 10px;}
    .shnbox{cursor: pointer;}
    .dizhi{
        color: #ff3b3b;
        float: left;
        height: 35px;
        line-height: 35px;
        margin-left: 20px;
        font-weight: bold;
    }
    .dizhi:hover{color: #ff3b3b}
    .dizhiname{width: 500px;float: left;}
    .footer{
        background:none !important;
        color:#666;
        /*   position: fixed; */
        bottom: 0;
        /*z-index: -100;*/
        opacity: 1;
        width: 100%;
    }
</style>

<ul class="nav nav-tabs">
    <li><a href="{php echo $this->createWebUrl('storemanger');}">门店列表</a></li>
    <li class="active"><a href="{php echo $this->createWebUrl('addstore');}">添加/编辑门店</a></li>
</ul>

<div class="main">
    <div class="panel panel-default">
        <div class="panel-heading">
            添加/编辑门店信息
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <form class="form-horizontal" action="" method="POST">
                <div class="row yg_dnorder">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">门店名称</label>
                        <div class="col-sm-10">
                            <input type="text"  name="md_name" value="" class="form-control" id="inputEmail3" placeholder="请填写商家名称">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">门店logo</label>
                        <div class="col-sm-10">
                            建议尺寸大小:100*100
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">门店地址</label>
                        <div class="col-sm-10">
                            <input type="text"  name="address" value="" class="form-control" id="inputEmail3" placeholder="请填写商家地址">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">地址坐标</label>
                        <div class="col-sm-10">
                            <!-- {php echo tpl_form_field_coordinate('op',$list['coordinates'])} -->
                            <input type="text" name="coordinates" class="form-control dizhiname" value="" placeholder="例如:30.527540,114.346430" />
                            <a href="http://lbs.qq.com/tool/getpoint/" target="_blank" class="dizhi">点击获取地理位置</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">联系人</label>
                        <div class="col-sm-10">
                            <input type="text"  name="link_name" value="" class="form-control" id="inputEmail3" placeholder="请填写联系人姓名">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">联系人电话</label>
                        <div class="col-sm-10">
                            <input type="text"  name="link_tel" value="" class="form-control" id="inputEmail3" placeholder="请填写联系人电话">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">验证电话</label>
                        <div class="col-sm-10">
                            <input type="text"  name="yz_tel" value="" class="form-control" id="inputEmail3" placeholder="请填写验证手机号">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="margin-right: 15px;">门店分类</label>
                        <select class="col-sm-8" name="type_id">

                            <option value="" ></option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="margin-right: 15px;">所属城市</label>
                        <select class="col-sm-8" name="city_name">
                            <option value="" ></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">商家店铺图片</label>
                        <div class="col-sm-10">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">商家轮播图片</label>
                        <div class="col-sm-10">
                            只能添加3张图片
                        </div>
                    </div>
                    <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2 control-label">营业开始时间</label>

                        <div class="col-sm-10">

                            <!--  {php echo tpl_form_field_daterange('time',array('start' =>$list['start_time'], 'end' =>$list['end_time']));}  -->


                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2 control-label">营业结束时间</label>

                        <div class="col-sm-10">

                            <!--  {php echo tpl_form_field_daterange('time',array('start' =>$list['start_time'], 'end' =>$list['end_time']));}  -->


                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">店铺小程序码</label>
                        <div class="col-sm-10">
                            <input type="text" style="color:red" name="orderby" value="该二维码必须在小程序发布后才能生成" class="form-control" id="inputEmail3" readonly>
                        </div>

                    </div>



                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">店内设施</label>
                        <div class="col-sm-10">
                            <label class="checkbox-inline">

                                <label class="checkbox-inline">

                                    <input type="checkbox" name="WiFi" id="optionsRadios4"  value="1" > WiFi

                                </label>
                                <label class="checkbox-inline">



                                </label>
                                <label class="checkbox-inline">

                                    <input type="checkbox" name="apy" id="optionsRadios4"  value="1" checked> 支付宝

                                </label>
                                <label class="checkbox-inline">

                                    <input type="checkbox" name="wei" id="optionsRadios4"  value="1" >微信

                                </label>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">门店公告</label>
                        <div class="col-sm-10">
                            <textarea name="notice" class="form-control" placeholder="请输入门店公告" cols="30" rows="7"></textarea>
                            </p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">VR链接</label>
                        <div class="col-sm-10">
                            <input type="text" name="vr_src" value="" class="form-control" id="inputEmail3">
                            <span style="color:red">此链接需要在小程序后台配置业务域名</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">门店是否开启</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="is_open" value="1" 开启
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="is_open" value="2" 关闭
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">门店是否置顶</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="is_top" value="1" 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="is_top" value="2" 否
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">入驻到期时间</label>
                        <div class="col-sm-10">

                            <span class="help-block">*请设置当前商家入驻到期时间</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">门店是否vip</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="is_vip" value="1" 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="is_vip" value="2" 否
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">vip到期时间</label>
                        <div class="col-sm-10">

                            <span class="help-block">*请设置当前商家vip到期时间</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="margin-right: 15px;">绑定管理员</label>
                        <select class="col-sm-4" name="user_id" id="username">

                            <option value="" selected="selected">未绑定</option>


                            <option value="" ></option>

                        </select>
                        <span class="btn btn-sm ygbtn" data-toggle="modal" data-target="#myModal1">搜索管理员</span>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
                        <div class="col-sm-10">

                            <input type="text"  name="username" value="" class="form-control" id="inputEmail3" placeholder="请填写账号">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">密码</label>
                        <div class="col-sm-10">
                            <input type="text"  name="password" value="" class="form-control" id="inputEmail3" placeholder="请填写密码">
                            <font color="red">*此账号为手机端登入账号,密码密文不显示,忘记请直接修改</font>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">排序</label>
                        <div class="col-sm-10">
                            <input type="number"  name="sort" value="" class="form-control" id="inputEmail3" placeholder="请填写排序编号">
                            数字越小越靠前
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #31C2A5;"/>

                    </div>
                </div>
                <input type="hidden" name="id" value=""/>

                <input type="hidden" name="token" value=""/>
            </form>
        </div>
    </div>
</div>
<div class="text-right we7-margin-top"></div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="font-size: 20px;">提示</h4>
            </div>
            <div class="modal-body ygsearch" style="font-size: 20px">
                <input type="text" id="ygsinput" placeholder="请输入微信昵称">
                <span class="btn btn-sm ygbtn">搜索</span>
                <div class="searchname"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
<script>
    function subscribe(){
        $.post("<?php echo url("","",true,false);?>", function(){
            setTimeout(subscribe, 5000);
        });
    }
    function sync() {
        $.post("<?php echo url("","",true,false);?>", function(){
            setTimeout(sync, 60000);
        });
    }
    $(function(){
        subscribe();
        sync();
    });

    function checknotice() {
        $.post("{php echo url('utility/notice')}", {}, function(data){
            var data = $.parseJSON(data);
            $('#notice-container').html(data.notices);
            $('#notice-total').html(data.total);
            if(data.total > 0) {
                $('#notice-total').css('background', '#ff9900');
            } else {
                $('#notice-total').css('background', '');
            }
            setTimeout(checknotice, 60000);
        });
    }
    checknotice();
    {/if}

        <?php if(defined('IN_MODULE')): ?>
        $.getJSON("<?php echo url("","",true,false);?>", function(result) {
            if (result.message.errno == -10) {
                $('body').prepend('<div id="upgrade-tips-module" class="upgrade-tips"><a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODAwMzEzOV8xNzEwOTZfNDAwMDgyODUwMl8yXw" target="_blank">' + result.message.message + '</a></div>');
                if ($('#upgrade-tips').size()) {
                    $('#upgrade-tips-module').css('top', '25px');
                }
            }
        });
        <?php endif; ?>
</script>
{template 'public/footer-base'}
