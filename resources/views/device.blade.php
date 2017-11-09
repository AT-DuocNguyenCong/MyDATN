@extends('layouts.main')
@section('title', __('Thiết bị'))
@section('meta')
  <meta http-equiv="refresh" content="10">
@endsection
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="text-center">
        <h1>
          {{ __('Trạng thái các thiết bị trong hồ nuôi') }}
        </h1>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"></h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <table class="table table-bordered">
              <thead>
                <th class="text-center">{{ __('STT') }}</th>
                <th class="text-center">{{ __('Thiết bị') }}</th>
                <th class="text-center">{{ __('Trạng thái') }}</th>
                <th class="text-center">{{ __('Tùy chọn') }}</th>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td class="text-center">{{ __("Máy quạt")}}</td>
                  <td class="text-center">
                    @if($device1 == 1)
                      <label class="danger">{{ __("Bật") }}</label>
                    @else
                      <label class="normal">{{ __("Tắt") }}</label>
                    @endif
                  </td>
                  <td class="text-center">
                    <form class="inline" method="GET" action="{{route('status.device')}}">
                      <input type="hidden" name="device1" value="on">
                      <button type="submit" class="btn btn-primary">{{'Bật'}}</button>
                    </form>
                    <form class="inline" method="GET" action="{{route('status.device')}}">
                      <input type="hidden" name="device1" value="off">
                      <button type="submit" class="btn btn-warning">{{'Tắt'}}</button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td class="text-center">{{ __("Máy bơm dung dịch")}}</td>
                  <td class="text-center">
                    @if($device2 == 1)  
                      <label class="danger">{{ __("Bật") }}</label>
                    @else
                      <label class="normal">{{ __("Tắt") }}</label>
                    @endif
                  </td>
                  <td class="text-center">
                    <form class="inline" method="GET" action="{{route('status.device')}}">
                      <input type="hidden" name="device2" value="on">
                      <button type="submit" class="btn btn-primary">{{'Bật'}}</button>
                    </form>
                    <form class="inline" method="GET" action="{{route('status.device')}}">
                      <input type="hidden" name="device2" value="off">
                      <button type="submit" class="btn btn-warning">{{'Tắt'}}</button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row"></div>
    </section>
  </div>
  @php
    $port = fopen("/dev/ttyACM0", "w+");
    sleep(2);
    if (request('device1') == 'on') {
      fwrite($port, 'turnon1');
    }
    if (request('device1') == 'off') {
      fwrite($port, 'turnoff1');
    }
    if (request('device2') == 'on') {
      fwrite($port, 'turnon2');
    }
    if (request('device1') == 'off') {
      fwrite($port, 'turnoff2');
    }
  @endphp
@endsection