<html lang="fa"><head>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="language" content="fa">
  <meta name="theme-color" content="#42615a">
  <meta name="fontiran.com:license" content="G35LF">
    <title>سایت خبری</title>
    <link rel="stylesheet" href="/css/app.css">
  <meta name="description" content="جدیدترین اخبار و تحلیل ها؛ آخرین اخبار سیاسی، حوادث، ورزشی، فرهنگی، هنری و اجتماعی کشور و جهان">
  <link rel="stylesheet" href="https://vom.ir/components/homepage/style.css?v1">
  <link rel="alternate" type="application/rss+xml" title="صدای میانه" href="/rss.xml">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://vom.ir/favicon.ico">
    {{-- <link rel="stylesheet" type="text/css" href="https://vimg.ir/styles/main.css">
    <link rel="stylesheet" type="text/css" href="https://vimg.ir/styles/topbar.css">
    <link rel="stylesheet" type="text/css" href="https://vimg.ir/css/sweetalert.css"> --}}
    <link rel="publisher" href="https://plus.google.com/+VomIr">
  </head>
  <body>
  {{-- <nav id="topbar" class="navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" title="صدای میانه" href="/"><span class="icon-vom"></span></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <form id="search_form" class="navbar-form navbar-right" action="https://vom.ir/search.php">
          <div class="input-group">
            <input id="search_box" name="q" type="text" class="form-control input-sm" placeholder="جستجو...">
            <span class="input-group-btn">
              <button id="search_button" class="btn btn-default btn-sm" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </span>
          </div>
  <div id="search_result" class="list-group" style="width: 122px;"></div>
        </form>
        <ul class="nav navbar-nav navbar-left">
          
          @if(Auth::check())
          <li><a href="/setting">{{ Auth::user()->name }}</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">خروج</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          @else
            <li><a href="/login">ورود</a></li>
            <li><a href="/signup">ثبت نام</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav> --}}
  {{-- <header id="header" style="background-image: url(https://vimg.ir/theme/header.jpg);">
  </header> --}}
  <header>
    <div class="wrapper" style="width:100%">
      <img src="{{ asset('images/download (442).jpg') }}" style="width:100%;height:236px" alt="">
    </div>
  </header>
  <nav id="nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <ul class="nav navbar-nav">
        <li><a href="/">صفحه نخست</a></li>
        <li><a href="/posts/create">ارسال مطلب بدون عضویت</a></li>      <li><a href="/archive">آرشیو مطالب</a></li>
        <li><a href="/userlist">فهرست اعضا</a></li>
        <li><a href="/comments">آخرین دیدگاه&zwnj;ها</a></li>
        <li><a href="/contacts/create">ارتباط با ما</a></li>
        {{-- <li><a href="/abouts/create">درباره ما</a></li> --}}
      </ul>
      {{-- <ul class="nav navbar-nav navbar-left">
        <li><a href="https://telegram.me/vomir" style="background-color: #0088cc; color: #fff;"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> کانال تلگرام صدای میانه</a></li>
      </ul> --}}
    </div>
  </nav>
  <div class="container">
  @yield('main')
  </div>
  <footer id="footer">
  <p style="color: blue">سایت خبری</p><i class="fa fa-newspaper-o" style="font-size:36px;color:blue"></i>
  </footer>
  <script src="/js/app.js"></script>
  @yield('scripts')
  </body></html>