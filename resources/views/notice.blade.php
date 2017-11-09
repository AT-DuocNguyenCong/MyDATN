<!DOCTYPE html>
<html>
<head>
  <title>{{__('Đăng kí thành công')}}</title>
  <meta http-equiv="refresh" content="5;{{route('home')}}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
  <div class="panel panel-info">
    <div class="panel-heading text-center">
      <h1>{{__('Chào mừng')}} {{Auth::user()->username}} {{__('đến với hệ thống hỗ trợ nuôi tôm TP Đà Nẵng')}}</h1>
        <h2>{{__('Vui lòng đợi trong giây lát....')}}</h2>
    </div>
  </div>
</body>
</html>