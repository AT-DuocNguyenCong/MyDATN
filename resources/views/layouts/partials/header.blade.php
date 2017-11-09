<header class="main-header">
  <a href="" class="logo">
    <span class="logo-lg"><b>{{__('Admin ')}}</b> {{__('Management')}}</span>
  </a>
  <nav class="navbar navbar-static-top">
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('images/user.jpg') }}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{Auth::user()->full_name}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="{{ asset('images/user.jpg') }}" class="img-circle" alt="User Image">
              <p>
                {{Auth::user()->full_name}} - {{__('Web Developer')}}
                <small>{{__('Member since Jun. 2017')}}</small>
              </p>
            </li>
            <li class="user-footer">
              <div class="text-center">
                <form action="{{ route('logout') }}" method="POST">
                  {{csrf_field()}}
                  <button type="submit" class="btn" name="logout">
                    {{__('Log out')}}
                  </button>
                </form>
              </div>
            </li>
          </ul>
        </li>
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>