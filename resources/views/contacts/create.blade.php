@extends('layouts.app')

@section('main')
<div class="container">
        <style>
        .col-sm-2 {
        padding-left: 0;
        }
        </style>
        
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
        
        
        <div class="box">
        <div class="title"><h3>ارتباط با ما</h3></div>
        {{-- <div class="content">
        <p><strong>صاحب امتیاز و مدیرمسئول:</strong> محمدصادق نائبی</p>
        <p style="display: none"><strong>آدرس دفتر:</strong> میانه، خ امام، ساختمان رازی، واحد 201</p>
        </div> --}}
        </div>
        
        
        <div class="box"><!--box:begin-->
        <div class="title"><h3>ارسال پیام</h3></div>
        <div class="content">
        <p></p>
        <form class="form-horizontal"  action="/contacts" role="form" method="POST"enctype="multipart/form-data">
          @csrf
          <div class="form-group form-group-sm">
            <label class="col-sm-2 control-label">نام شما</label>
            <div class="col-sm-10">
              <input type="text" name="contact_name" id="contact_name" class="form-control" placeholder="نام شما">
            </div>
          </div>
        
          <div class="form-group form-group-sm">
            <label class="col-sm-2 control-label">آدرس ایمیل</label>
            <div class="col-sm-10">
              <input type="email" name="contact_email" id="contact_email"class="form-control" placeholder="Email" style="direction: ltr;">
            </div>
          </div>
        
          <div class="form-group form-group-sm">
            <label class="col-sm-2 control-label">شماره موبایل</label>
            <div class="col-sm-10">
              <input type="tel" name="contact_telephone" id="contact_telephone" class="form-control" placeholder="Mobile" style="direction: ltr;">
            </div>
          </div>
        
          <div class="form-group form-group-sm">
            <label class="col-sm-2 control-label">متن پیام</label>
            <div class="col-sm-10">
              <textarea name="contact_text" id="contact_text" class="form-control" rows="3" style="min-height: 100px;resize: vertical;" placeholder="متن پیام"></textarea>
            </div>
          </div>
        
          <div class="form-group form-group-sm">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary btn-sm">ارسال</button>
            </div>
          </div>
        </form>
        
        </div>
        </div><!--box:end-->
        
        </div>
        </div></div>
@endsection