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

<form method="POST"  action="/setting" class="form-horizontal" enctype="multipart/form-data">
  @csrf
<div class="box">
<div class="title"><h3>مشخصات کاربر</h3></div>
<div class="content">
  <div class="form-group">
<label class="col-sm-2 control-label">نام شما:</label>
<div class="col-sm-10"><input type="text" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" /></div>
  </div>
  <div class="form-group">
<label class="col-sm-2 control-label">آدرس ایمیل شما:</label>
<div class="col-sm-10"><input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" /></div>
  </div>
</div>
</div>


<p style="text-align: center;"> <button type="submit"  class="btn btn-primary">ذخیره </button></p>

</form>
</div>
</div>
@endsection
