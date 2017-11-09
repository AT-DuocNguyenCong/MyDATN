@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="cls-register">
      <nav class="navbar navbar-default">
        <ul class="nav navbar-nav navbar-right cls-nav-li">
          <li><a href="{{ route('login') }}">{{ __('Đăng nhập')}}</a></li>            
        </ul>     
      </nav>
    </div>
    <div class="row contain-row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"> {{ __('Đăng ký') }}</h1>
          </div>
          <div class="panel-body">
            <div class="col-md-10">
              <form class="form-horizontal cls-form-login" method="POST" action="">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                  <label for="username" class="col-md-5 control-label">{{ __('Tên đăng nhập') }}</label>
                  <div class="col-md-6">
                    <input id="username" type="text" class="form-control" name="username" required>
                    @if ($errors->has('username'))
                      <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-5 control-label">{{ __('Mật khẩu') }}</label>
                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" >
                    @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="password_confirm" class="col-md-5 control-label">{{ __('Xác nhận mật khẩu') }}</label>
                  <div class="col-md-6">
                    <input id="password_confirm" type="password" class="form-control" name="password_confirmation">
                  </div>
                </div>
                <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                  <label for="full_name" class="col-md-5 control-label">{{ __('Tên của bạn') }}</label> 
                  <div class="col-md-6">
                    <input id="full_name" type="text" class="form-control" name="full_name" required>
                    @if ($errors->has('full_name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('full_name') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary cls-btn-login btn-sm">
                      {{ __('Xác nhận')}}
                    </button>
                    <button type="reset" class="btn btn-warning btn-sm">{{ __('Nhập lại')}}</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
