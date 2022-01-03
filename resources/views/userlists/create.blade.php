@extends('layouts.app')

@section('main')
<div class="row">
        <div class="col-md-6 col-md-offset-3">
        
        <div class="box"><!--box:begin-->
        <div class="title"><h3>فهرست اعضا</h3></div>
        @foreach ($posts as $post)
        <div class="content clearfix">
        <a href="https://vom.ir/tahernaebi" target="_blank" class="media">
        <div class="media-right">
        {{-- <img class="media-object" src="https://vimg.ir/images/2723d092b63885e0d7c260cc007e8b9dfd1bd294fbebefa4c1ea7e8990cca20a.jpg" alt="">
        </div> --}}
        <div class="media-body"><strong>{{$post->name}}</strong></div>
        </a>
        </div>
        @endforeach
        </div>
        </div>
        
@endsection