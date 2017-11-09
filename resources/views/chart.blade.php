@extends('layouts.main')
@section('title', __('Biểu đồ'))
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="row">
        <div class="cls-chart-temp">
          <div id="chart-temp"></div>
        </div>
      </div>
      <div class="row">
        <div class="cls-chart-ph">
          <div id="chart-ph"></div>
        </div>
      </div>
    </section>
  </div>
@endsection