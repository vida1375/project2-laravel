@extends('layouts.app')

@section('main')
<div class="row">
<div class="col-md-8 col-md-offset-2">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif  

<form method="POST"  action="/posts" class="form-horizontal" enctype="multipart/form-data">
  @csrf
<div class="box">
<div class="title"><h3>ارسال مطلب جدید</h3></div>
<div class="content">
<div class="form-group">
  <label  class="col-sm-2 control-label">عنوان مطلب:</label>
    <div class="col-sm-10"><input class="form-control" type="text" id="title" name="title"/></div>
</div>
<div class="form-group">
<label  class="col-sm-2 control-label">تصویر مطلب:</label>
<div class="col-sm-3"><input type="file" name="image" id="image" /></div>
</div>
<span id="text_1" class="help-block">فرمت تصویرانتخاب شده بایدjpgوحجم آن کمتر از 1مگابایت باشد;در غیراینصورت آپلود نمیشود!سعی کنید نسبت تصویر9.16(wide)باشد مثل450*800پیکسل.</span>
<textarea id="content" name="text_1" cols="80" rows="10"></textarea>
</div>
</div>
<div class="box">
<div class="title"><h3>گزینه های مطلب</h3></div>
<div class="content">
<div class="form-group">
<label class="col-sm-2 control-label">وضعیت انتشار:</label>
<div class="col-sm-4"><select name="release_status" id="release_status" class="form-control"><option value="درانتظار بررسی">در انتظار بررسی</option></select></div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">دسته بندی:</label>
<div class="col-sm-4"><select name="grouping" id="grouping" class="form-control"><option value="مطالب آزاد" >مطالب آزاد</option><option value="اخبار ایران وجهان" >اخبار ایران و جهان</option><option value="اخبار ادارات وروابط عمومی">اخبار ادارات و روابط عمومی ها</option></select></div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">موضوع مطلب:</label>
<div class="col-sm-4"><select name="subject" id="subject" class="form-control">
<option value="سیاسی">سیاسی</option>
<option value="اقتصادی">اقتصادی</option>
<option value="اجتماعی">اجتماعی</option>
<option value="علمی">علمی</option>
<option value="فرهنگی">فرهنگی</option>
<option value="هنری">هنری</option>
<option value="ورزشی">ورزشی</option>
<option value="حوادث">حوادث</option>
<option value="گوناگون" selected>گوناگون</option>
<option value="عکس">عکس</option>
</select></div>
</div>
</div>
</div>

<div class="box">
<div class="title"><h3>مشخصات کاربر</h3></div>
<div class="content">
  <div class="form-group">
<label class="col-sm-2 control-label">نام شما:</label>
<div class="col-sm-10"><input type="text" id="name" name="name" /> (اختیاری)</div>
  </div>
  <div class="form-group">
<label class="col-sm-2 control-label">آدرس ایمیل شما:</label>
<div class="col-sm-10"><input type="email" id="email" name="email" /> (اختیاری)</div>
  </div>
</div>
</div>


<p style="text-align: center;"> <button type="submit"  class="btn btn-mianeh">ذخیره </button></p>

</form>
</div>
</div>
@endsection

@section('scripts')
<script>
ClassicEditor
    .create( document.querySelector( '#content' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection