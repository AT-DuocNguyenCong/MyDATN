@extends('layouts.main')
@section('title', __('Nhật kí theo dõi'))
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="text-center">
        <h1>
          {{ __('Nhật kí theo dõi hệ thống') }}
        </h1>
      </div>
      <div class="row">
        <div class="box box-primary">
          <table class="table table-bordered table-responsive table-striped" id="table-contain">
            <thead>
              <tr>
                <th class="text-center">{{__('STT')}}</th>
                <th class="text-center">{{ __('Thời gian') }}</th>
                <th class="text-center">{{ __('Nhiệt độ') }}</th>
                <th class="text-center">{{ __('Độ pH') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $value)
                <tr>
                  <td class="text-center">{{$value->id}}</td>
                  <td class="text-center">{{\Carbon\Carbon::createFromTimestamp($value->date)}}</td>
                  @if($value->temp > 35)
                    <td class="text-center">
                      <label class="danger">{{$value->temp}}</label>
                    </td>
                  @elseif($value->temp <27)
                    <td class="text-center">
                      <label class="warning">{{$value->temp}}</label>
                    </td>
                  @else
                    <td class="text-center">
                      <label class="normal">{{$value->temp}}</label>
                    </td>
                  @endif
                  @if($value->pH < 7)
                    <td class="text-center">
                      <label class="danger">{{$value->pH}}</label>
                    </td>
                  @elseif($value->pH > 7)
                    <td class="text-center">
                      <label class="warning">{{$value->pH}}</label>
                    </td>
                  @else
                    <td class="text-center">
                      <label class="normal">{{$value->pH}}</label>
                    </td>
                  @endif
                </tr>
              @endforeach
            </tbody>
          </table>
          <div>
            {{ $data->render() }}
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection