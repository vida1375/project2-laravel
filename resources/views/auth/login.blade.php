@extends('layouts.app')

@section('main')
<div class="container">
        <style>
                .ltr {
                  direction: ltr;
                }
                .username {
                    font-weight: bold;
                    border: medium none;
                    background-color: #FFF;
                    padding: 6px 2px;
                }
                .captcha {
                  width: 40px;
                  vertical-align: middle;
                  display: inline-block;
                }
         </style>
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="box">
            <div class="card">
            <div class="title"><h3>{{ __('ورود') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>

                            
                                <input id="email" type="email" placeholder="Email" class="form-control ltr @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز ورود') }}</label>

                            
                                <input id="password" type="password" placeholder="Password" class="form-control ltr @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                        </div>

                        <div class="form-group row">
                            
                                <div class="checkbox">
                                        <label  for="remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('مرا به خاطر بسپار') }}
                                     <p class="help-block">از این گزینه فقط در موبایل و رایانه شخصی خود استفاده کنید.</p>
                                    </label>
                                </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ورود') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('رمز ورود خودرا فراموش کرده اید؟') }}
                                    </a>
                                @endif
                                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
