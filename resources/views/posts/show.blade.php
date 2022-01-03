@extends('layouts.app')

@section('main')
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script>
    function load_posts_azad(p) {
        $("#aloader").html('<img src="https://vom.ir/ajax-loader.gif" alt="صبر کنید..." style="margin:auto;width:auto;height:auto;" />');
        $("#posts_a_p" + p).load("https://vom.ir/archive?section=1&page=" + p + " .news-item");
        return false;
    }
    function load_posts_ravabet(p) {
        $("#rloader").html('<img src="https://vom.ir/ajax-loader.gif" alt="صبر کنید..." style="margin:auto;width:auto;height:auto;" />');
        $("#posts_r_p" + p).load("https://vom.ir/archive?section=3&page=" + p + " .news-item");
        return false;
    }
</script>

<div class="row">
    <div class="col-sm-6 col-sm-push-3">
        <article itemscope="itemscope" itemtype="http://schema.org/NewsArticle" class="news-item">
            <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                <meta itemprop="name" content="Voice of Mianeh">
                <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                    <meta itemprop="url" content="https://vom.ir/favicon.ico">
                </div>
            </div>
            <meta itemprop="datePublished" content="2019-12-15T11:28:37+03:30">
            <meta itemprop="commentCount" content="0">
            <meta itemprop="dateModified" content="2019-12-15T11:28:37+03:30">
            <div class="clearfix">
                <div class="pull-right details">
                    <div><span class="glyphicon glyphicon-list-alt"></span> کد خبر: {{$post->id}}</div>
                    <div><span class="glyphicon glyphicon-folder-open"></span>
                        <a href="">{{$post->subject}}</a>
                    </div>
                </div>
            </div>
            <h1>
                <a href="https://vom.ir/farmandari/posts/92138" itemprop="mainEntityOfPage">
                    <span itemprop="headline">{{$post->title}}</span>
                </a>
            </h1>
            <div class="clearfix">
                <div class="pull-right details">
                    <div><img class="avatar"
                            src="https://vimg.ir/images/ec5decca5ed3d6b8079e2e7e7bacc9f2a0b0617c876ab601342cc44d6a7bc5a4.jpg"
                            width="12" height="12"> <span itemprop="author" itemscope=""
                            itemtype="http://schema.org/Person"><a href="https://vom.ir/farmandari" target="_blank"
                                rel="author" itemprop="url"></a></span></div>
                </div>
            </div>
            <div class="content" itemprop="articleBody">
                <div itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject"><img
                        src="{{ $post->image_url() }}" alt="گزارش تصویری از رژه خودروهای امدادی در آستانه فصل زمستان"
                        itemprop="url">
                    <meta itemprop="width" content="555">
                    <meta itemprop="height" content="315">
                    <p>{!!$post->text_1!!}</p>
                </div>
        </article>

        
            <div class="box">
            <div class="title">
                <h3>نظر شما</h3>
            </div>
            <div class="content">
                <div class="comments-item" id="newcomment">

                    <form class="form-horizontal" action="/comments" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        <div class="form-group form-group-sm">
                            <label for="name" class="col-sm-2 control-label">نام شما</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="نام شما (اختیاری)">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="text" class="col-sm-2 control-label">متن نظر</label>
                            <div class="col-sm-10">
                                <div id="quote"></div>
                                <textarea class="form-control" rows="3" style="min-height: 100px;resize: vertical;"
                                    id="text" name="text" placeholder="متن نظر"></textarea>
                            </div>
                        </div>


                        <div class="form-group form-group-sm">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary btn-sm">ارسال</button>
                            </div>
                        </div>
                    </form>


                </div>
                @foreach ( $post->comments as $comment)
                <div id="comment153652" class="row comments-item c3">
                    <div class="col-xs-1"><img id="avatar153652" alt="" src="./images/guest.jpg"
                            class="img-circle img-responsive">
                    </div>
                    <div class="col-xs-11">
                        <div class="clearfix">
                            <div id="user153652" class="author pull-right">{{$comment->name}} <a
                                    href="https://vom.ir/sjamshidi/posts/44174"
                                    target="_blank">{{$comment->post->title}}</a></div>
                            <div class="details pull-left"><span class="glyphicon glyphicon-calendar"></span> ۹۸/۹/۲۴
                                <span class="glyphicon glyphicon-time"></span> ۱۹:۱۷</div>
                        </div>
                        <div id="content153652" class="content">
                            <p>{{$comment->text}}</p>
                        </div>
                        <div class="actions"><button type="button" id="like153652" onclick="CLike(153652,1)"
                                class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="می&zwnj;پسندم"><span class="glyphicon glyphicon-thumbs-up"></span>
                                <span id="gnow153652"></span><span id="gnext153652">۱</span></button>
                            <button type="button" id="dislike153652" onclick="CLike(153652,0)"
                                class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="نمی&zwnj;پسندم">
                                <span class="glyphicon glyphicon-thumbs-down"></span> <span id="pnow153652"></span>
                                <span id="pnext153652">۱</span></button>
                            <div class="btn-group dropup"><button class="btn btn-default btn-xs dropdown-toggle"
                                    type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="glyphicon glyphicon-cog"></span></button>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="#" onclick="CommentEditing(153652,1); return false;"><span
                                                class="glyphicon glyphicon-pencil"></span> ویرایش</a></li>
                                    <li><a href="#" onclick="CommentStatus(153652,2,this); return false;"><span
                                                class="glyphicon glyphicon-eye-close"></span> عدم انتشار</a></li>
                                    <li><a href="#"
                                            onclick="if(confirm('مطمئن هستید؟'))CommentStatus(153652,4,this); return false;"><span
                                                class="glyphicon glyphicon-trash"></span> حذف</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<div class="col-sm-3 col-sm-pull-6">
    <div class="box">
        <div class="title">
            <h3>پربحث&zwnj;ترین مطالب هفته</h3>
        </div>
        <div class="content">
            <ul class="list">
                @foreach ($posts as $post)
                <li><a href="http://127.0.0.1:8000/posts/{{$post->id}}" target="_blank">{{$post->title}}</a> <span>۲۶
                        دیدگاه</span></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="box">
        <div class="title">
            <h3>پربازدیدترین مطالب ماه</h3>
        </div>
        <div class="content">
            <ul class="list">
                @foreach ($posts as $post)
                <li><a  href="http://127.0.0.1:8000/posts/{{$post->id}}" target="_blank">{{$post->title}}</a>
                    <span>۲۸۷۰
                        بازدید</span></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="col-sm-3">
    <div class="box">
        <div class="title">
            <h3>اخبار روز</h3>
        </div>
        <div class="content">
            <ul class="list">
                @foreach ($rooz_posts as $post)
                <li><a  href="http://127.0.0.1:8000/posts/{{$post->id}}" target="_blank">{{$post->title}}</a> <span>۱۰۹
                        بازدید، ۰
                        نظر</span></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</div>
@endsection