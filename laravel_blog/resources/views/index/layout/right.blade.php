<div id="zimeiti_2-views-2" class="widget widget-zimeiti_2-views widget_posts_thumbnail">
    <h2 class="widget-title"><span>浏览最多的文章<span></span></span></h2>
    <ul>
        @foreach($artRes as $article)
        <li class="clear">
            <a href="https://www.zhutibaba.com/demo/zimeiti2/294.html" rel="bookmark">
                <div class="thumbnail-wrap">
                    @if($article->pic)
                        <img width="120" height="85" src="{{asset('static/uploads')}}{{$article->pic}}" class="attachment-zimeiti_2_widget_post_thumb size-zimeiti_2_widget_post_thumb wp-post-image" alt="">
                    @endif
                </div>
            </a>
            <div class="entry-wrap">
                <a href="{{route('index.article.index',['id'=>$article->id])}}" rel="bookmark">{{$article->title}}</a>
                <div class="entry-meta">{{$article->created_at}}</div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
