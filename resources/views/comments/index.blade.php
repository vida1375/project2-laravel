@extends('layouts.app')

@section('main')
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="box">
<div class="title"><h3>آخرین دیدگاه ها</h3></div>
        <div class="content">
 @foreach ( $comments as $comment)
  <div id="comment153652" class="row comments-item c3">
 <div class="col-xs-1"><img id="avatar153652" alt="" src="./images/guest.jpg" class="img-circle img-responsive">
    </div>
    <div class="col-xs-11">
        <div class="clearfix">
        <div id="user153652" class="author pull-right">{{$comment->name}} {{$comment->post->title}}</div><div class="details pull-left"><span class="glyphicon glyphicon-calendar"></span> ۹۸/۹/۲۴ <span class="glyphicon glyphicon-time"></span> ۱۹:۱۷</div></div><div id="content153652" class="content">
            <p>{{$comment->text}}</p></div>
    <div class="actions"><button type="button" id="like153652" onclick="CLike(153652,1)" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="می&zwnj;پسندم"><span class="glyphicon glyphicon-thumbs-up"></span> 
    <span id="gnow153652"></span><span id="gnext153652">۱</span></button>
     <button type="button" id="dislike153652" onclick="CLike(153652,0)" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="نمی&zwnj;پسندم">
        <span class="glyphicon glyphicon-thumbs-down"></span> <span id="pnow153652"></span>
        <span id="pnext153652">۱</span></button> <div class="btn-group dropup"><button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span></button><ul class="dropdown-menu dropdown-menu-left"><li><a href="#" onclick="CommentEditing(153652,1); return false;"><span class="glyphicon glyphicon-pencil"></span> ویرایش</a></li><li><a href="#" onclick="CommentStatus(153652,2,this); return false;"><span class="glyphicon glyphicon-eye-close"></span> عدم انتشار</a></li><li><a href="#" onclick="if(confirm('مطمئن هستید؟'))CommentStatus(153652,4,this); return false;"><span class="glyphicon glyphicon-trash"></span> حذف</a></li></ul></div></div></div></div>
@endforeach
        </div>
</div>
</div>
</div>
@endsection
