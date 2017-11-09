@extends('layouts.main')
@section('title', __('Trang chủ'))
@section('meta')
  <meta http-equiv="refresh" content="10">
@endsection
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="text-center">
        <h1> {{ __('Chào mừng bạn đến với hồ nuôi tôm  TP Đà Nẵng ')}}</h1>
        <h3>
          {{ __('Trạng thái hiện tại của hồ nuôi') }}
        </h3>
      </div>
      @if(isset($data))
      <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <table class="table table-bordered">
                  <thead>
                    <th class="text-center">{{ __('Thời gian') }}</th>
                    <th class="text-center">{{ __('Nhiệt độ') }}</th>
                    <th class="text-center">{{ __('Độ pH') }}</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">{{\Carbon\Carbon::createFromTimestamp($data->date)}}</td>
                      @if($data->temp > 35)
                        <td class="text-center">
                          <label class="danger">{{$data->temp}}</label>
                        </td>
                      @elseif($data->temp < 27)
                        <td class="text-center">
                          <label class="warning">{{$data->temp}}</label>
                        </td>
                      @else
                        <td class="text-center">
                          <label class="normal">{{$data->temp}}</label>
                        </td>
                      @endif
                      @if($data->pH < 7)
                        <td class="text-center">
                          <label class="danger">{{$data->pH}}</label>
                        </td>
                      @elseif($data->pH > 7)
                        <td class="text-center">
                          <label class="warning">{{$data->pH}}</label>
                        </td>
                      @else
                        <td class="text-center">
                          <label class="normal">{{$data->pH}}</label>
                        </td>
                      @endif
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
      </div>
      <div class="row">
        <div class="col-md-8">

          <div class="small-box bg-aqua col-md-3">
            <div class="inner text-center">
              <h4>{{ __('Trạng thái') }}</h4>
            </div>
          </div>
          <div class="col-md-11">
            <div class="cls-temp-warning">
              @if($data->temp < 27)
                <p class="cls-lb-info">
                  <strong class="cls-lb-info">{{ __('Nhiệt độ:') }}</strong>
                  <strong class="warning">{{ __('Thấp') }}</strong>
                </p>
              @endif
              @if($data->temp  >= 27 && $data->temp <= 35)
                <p>
                  <strong class ="cls-lb-info">{{ __('Nhiệt độ:') }}</strong>
                  <strong class="normal">{{ __('Bình thường') }}</strong>
                </p>
              @endif
              @if($data->temp > 35)
                <p>
                    <strong class ="cls-lb-info">{{ __('Nhiệt độ:') }}</strong>
                    <strong class="danger">{{ __('Cao') }}</strong>
                </p>
              @endif
              @if($data->pH < 7)
                <p class="cls-lb-info">
                  <strong class="cls-lb-info">{{ __('Độ pH:') }}</strong>
                  <strong class="danger">{{ __('Thấp') }}</strong>
                </p>
              @elseif($data->pH  == 7)
                <p>
                  <strong class ="cls-lb-info">{{ __('Độ pH:') }}</strong>
                  <strong class="normal">{{ __('Bình thường') }}</strong>
                </p>
              @else
                <p>
                  <h3>
                    <strong class ="cls-lb-info">{{ __('Độ pH:') }}</strong>
                    <strong class="warning">{{ __('Cao') }}</strong>
                  </h3>
                </p>
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="small-box bg-red col-md-3">
            <div class="inner text-center">
              <h4>{{ __('Cảnh báo') }}</h4>
            </div>
          </div>
          <div class="col-md-11">

            <div class="cls-temp-warning">
              @if($data->temp < 27)
                <p class="cls-lb-info">
                  <strong class="cls-lb-info">{{ __('Nhiệt độ:') }}</strong>
                  <strong class="warning">{{ __('Cần tăng nhiệt độ nước') }}</strong>
                </p>
              @elseif($data->temp >= 27 && $data->temp <= 35)
                <p>
                  <strong class ="cls-lb-info">{{ __('Nhiệt độ:') }}</strong>
                  <strong class="normal">{{ __('Bình thường') }}</strong>
                </p>
              @else
                <p>
                  <strong class ="cls-lb-info">{{ __('Nhiệt độ:') }}</strong>
                  <strong class="danger">{{ __('Cần giảm nhiệt độ nước') }}</strong>
                </p>
              @endif
              @if($data->pH < 7)
                <p class="cls-lb-info">
                  <strong class="cls-lb-info">{{ __('Độ pH:') }}</strong>
                  <strong class="danger">{{ __('Cần tăng độ pH') }}</strong>
                </p>
              @elseif($data->pH == 7)
                <p>
                  <strong class ="cls-lb-info">{{ __('Độ pH:') }}</strong>
                  <strong class="normal">{{ __('Bình thường') }}</strong>
                </p>
              @else
                <p>
                  <h3>
                    <strong class ="cls-lb-info">{{ __('Độ pH:') }}</strong>
                    <strong class="warning">{{ __('Cần giảm độ pH') }}</strong>
                  </h3>
                </p>
              @endif
            </div>
          </div>
        </div>
      </div>
    @else
    <h1 class="text-center"> {{ __('Chưa có dữ liệu')}}</h1>
    @endif
    </section>
  </div>
@endsection