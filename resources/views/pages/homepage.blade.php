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
    <div class="box">
      <div class="title">
        <h3>مطالب آزاد</h3>
      </div>
      <div class="content">
        @foreach ($azad_posts as $post)
        <div class="row news-item">
          <div class="col-xs-3 col-lg-2"><img
              alt=""
              src="{{ $post->image_url() }}"
              class="img-thumbnail img-responsive"></div>
          <div class="col-xs-9 col-lg-10">
            <h3><a href="http://127.0.0.1:8000/posts/{{$post->id}}" target="_blank">{{$post->title}}</a></h3>
            <p class="text-justify">{!!$post->text_1!!}</p>
            <div class="details">
              <div><span class="glyphicon glyphicon-list-alt"></span> کد خبر: {{$post->id}}</div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="box">
      <div class="title">
        <h3>اخبار ادارات و روابط عمومی ها</h3>
      </div>
      <div class="content">
        @foreach ($edarat_posts as $post)


        <div class="row news-item">
          <div class="col-xs-3 col-lg-2"><img
             alt=""
              src="{{ $post->image_url() }}"
              class="img-thumbnail img-responsive"></div>
          <div class="col-xs-9 col-lg-10">
            <h3><a href="http://127.0.0.1:8000/posts/{{$post->id}}" target="_blank">{{$post->title}}
                </a></h3>
            <p class="text-justify">{!!$post->text_1!!}</p>
            <div class="details">
              <div><span class="glyphicon glyphicon-list-alt"></span> کد خبر: {{$post->id}}</div>
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
          <li><a  href="http://127.0.0.1:8000/posts/{{$post->id}}" target="_blank">{{$post->title}}</a> <span>۲۶
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
          <li><a  href="http://127.0.0.1:8000/posts/{{$post->id}}" target="_blank">{{$post->title}}</a> <span>۲۸۷۰
              بازدید</span></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
    <div class="box">
      <div class="title">
        <h3>اخبار روز</h3>
      </div>
      <div class="content">
        <ul class="list">
          @foreach ($rooz_posts as $post)
          <li><a  href="http://127.0.0.1:8000/posts/{{$post->id}}" target="_blank">{{$post->title}}</a> </li>
          @endforeach
        </ul>
      </div>
    </div>
</div>
@endsection