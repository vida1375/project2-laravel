@extends('layouts.app')

@section('main')
<script>
        function load_posts(p,get) {
            $(".loader").html('<img src="https://vom.ir/ajax-loader.gif" alt="صبر کنید..." style="margin:auto;width:auto;height:auto;" />');
            $("#posts_p"+p).load("https://vom.ir/archive?"+get+"page="+p+" .news-item");
            return false;
        }
        </script>
        
        <div class="row">
        <div class="col-md-3">
        
        <div class="box"><!--box:begin-->
        <div class="title"><h3>فیلتر های جستجو</h3></div>
        <div class="content">
        <form>
        
          <div class="form-group">
            <label style="display: block;">از تاریخ</label>
            <select class="form-control input-sm" name="bd" style="width: 24%; display: inline;">
            <option selected="selected">1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>    </select>
            <select class="form-control input-sm" name="bm" style="width: 38%; display: inline;">
            <option value="1" selected="selected">فروردین</option><option value="2">اردیبهشت</option><option value="3">خرداد</option><option value="4">تیر</option><option value="5">مرداد</option><option value="6">شهریور</option><option value="7">مهر</option><option value="8">آبان</option><option value="9">آذر</option><option value="10">دی</option><option value="11">بهمن</option><option value="12">اسفند</option>    </select>
            <select class="form-control input-sm" name="by" style="width: 34%; display: inline;">
            <option selected="selected">1388</option><option>1389</option><option>1390</option><option>1391</option><option>1392</option><option>1393</option><option>1394</option><option>1395</option><option>1396</option><option>1397</option><option>1398</option><option>1399</option>    </select>
          </div>
        
          <div class="form-group">
            <label style="display: block;">تا تاریخ</label>
            <select class="form-control input-sm" name="ed" style="width: 24%; display: inline;">
            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option selected="selected">29</option><option>30</option><option>31</option>    </select>
            <select class="form-control input-sm" name="em" style="width: 38%; display: inline;">
            <option value="1">فروردین</option><option value="2">اردیبهشت</option><option value="3">خرداد</option><option value="4">تیر</option><option value="5">مرداد</option><option value="6">شهریور</option><option value="7">مهر</option><option value="8">آبان</option><option value="9">آذر</option><option value="10">دی</option><option value="11">بهمن</option><option value="12" selected="selected">اسفند</option>    </select>
            <select class="form-control input-sm" name="ey" style="width: 34%; display: inline;">
            <option>1388</option><option>1389</option><option>1390</option><option>1391</option><option>1392</option><option>1393</option><option>1394</option><option>1395</option><option>1396</option><option>1397</option><option>1398</option><option selected="selected">1399</option>    </select>
          </div>
        
          <div class="form-group">
            <label>بخش</label>
            <select class="form-control input-sm" name="section"><option value="0" selected="selected">همه</option><option value="1">مطالب آزاد</option><option value="2">اخبار ایران و جهان</option><option value="3">اخبار ادارات و روابط عمومی ها</option></select>
          </div>
        
          <div class="form-group">
            <label>سرویس</label>
            <select class="form-control input-sm" name="service">
            <option value="0" selected="selected">همه</option><option value="1">سیاسی</option><option value="2">اقتصادی</option><option value="3">اجتماعی</option><option value="4">علمی</option><option value="5">فرهنگی</option><option value="6">هنری</option><option value="7">ورزشی</option><option value="8">حوادث</option><option value="9">گوناگون</option><option value="10">عکس</option>    </select>
          </div>
        
          <div class="form-group">
            <label>نام کاربری نویسنده</label>
            <input class="form-control input-sm" name="author" type="text" placeholder="username" value="" style="direction: ltr;" />
          </div>
          
          <div class="form-group">
            <label>مرتب سازی بر اساس:</label>
            <select class="form-control input-sm" name="orderby">
                <option value="posted" selected>تاریخ انتشار</option>
                <option value="hits" >بازدید</option>
                <option value="comments" >کامنت ها</option>
            </select>
          </div>
          
          <div class="form-group">
            <label>صفحه</label>
            <input class="form-control input-sm" name="page" type="text" value="1" style="width: 50px; display: inline;" /> از 8180  </div>
        
          <button type="submit" class="btn btn-primary btn-sm">جستجو</button>
        
        </form>
        
        </div>
        </div><!--box:end-->
        </div>
        <div class="col-md-6">

                <div class="box"><!--box:begin-->
                <div class="title"><h3>آرشیو مطالب</h3></div>
                <div class="content">
                        @foreach ($posts as $post)
                    <div class="row news-item">
                    <div class="col-xs-3"><img alt="وجود قرص در یکی از برندهای معروف ڪیڪ در شهر میانه" src="{{ $post->image_url() }}" class="img-thumbnail img-responsive" /></div>
                    <div class="col-xs-9">
                                <h3><a href="http://127.0.0.1:8000/posts/{{$post->id}}" target="_blank">{{$post->title}}</a></h3>
                    <p class="text-justify"> {!!$post->text_1!!}</p>
                    <div class="details">
                      <div><span class="glyphicon glyphicon-list-alt"></span> کد خبر: {{$post->id}}</div>
                    </div>
                    </div>
                    </div>
                    @endforeach
                </div>
                </div>
        </div>        
@endsection