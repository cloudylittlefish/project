<div class="left-col sidebar-2">

    <div class="site-branding">


        <div id="logo">
            <a href="https://www.zhutibaba.com/demo/zimeiti2/" class="custom-logo-link" rel="home"><img width="240" height="120" src="http://localhost/static/index/imgs/logo.png" class="custom-logo" alt="自媒体二号"></a>			</div><!-- #logo -->


    </div><!-- .site-branding -->

    <style>
        .active{
            background-color: #ff4c4c;
            color: #ffffff;
        }
        li .active a{
            color: #fff;
        }
    </style>
    <nav id="primary-nav" class="primary-navigation phone_menu_col_4">
        <div class="menu-primary-container"><ul id="primary-menu" class="sf-menu sf-js-enabled sf-arrows" style="touch-action: auto;">
                @foreach($cateRes as $cate)
                <li class="@if($cateId == $cate->id)  active @endif">
                    <a href="{{route('index.cate.index',['id'=>$cate->id])}}" aria-current="page">{{$cate->cate_name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav><!-- #primary-nav -->

          <!--<div id="slick-mobile-menu"></div>-->


    <span class="search-icon">
			<span class="genericon genericon-search"> <span>搜索</span></span>
			<span class="genericon genericon-close"> <span>收起</span></span>
		</span>
    <div class="header-search">
        <form id="searchform" method="get" action="https://www.zhutibaba.com/demo/zimeiti2/">
            <input type="search" name="s" class="search-input" placeholder="请输入关键词" autocomplete="off">
            <button type="submit" class="search-submit">搜索</button>
        </form>		</div><!-- .header-search -->



</div>
