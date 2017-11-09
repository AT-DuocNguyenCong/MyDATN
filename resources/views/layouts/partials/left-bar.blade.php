<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('images/user.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->username}}</p>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="{{ isActiveRoute('home') }}">
        <a href="{{ route('home') }}">
          <i class="fa fa-home" aria-hidden="true"></i> <span>{{ __('Trang chủ') }}</span>
        </a>
      </li>
      <li class="{{ isActiveRoute('data.index') }}">
        <a href="{{ route('data.index') }}">
          <i class="fa fa-calendar" aria-hidden="true"></i> <span>{{ __('Nhật kí theo dõi') }}</span>
        </a>
      </li>
      <li class=" {{isActiveRoute('chart.index')}}">
        <a href="{{ route('chart.index') }}">
          <i class="fa fa-bar-chart" aria-hidden="true"></i> <span>{{ __('Biểu đồ') }}</span>
        </a>
      </li>
      <li class="{{ isActiveRoute('status.device') }}">
        <a href="{{ route('status.device') }}">
          <i class="fa fa-tv" aria-hidden="true"></i> <span>{{ __('Trạng thái thiết bị') }}</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
