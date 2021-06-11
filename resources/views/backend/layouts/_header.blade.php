<!-- header section start-->
<div class="header-section">

    <a class="toggle-btn menu-collapsed"><i class="fa fa-bars"></i></a>

    <!--notification menu start -->
    <div class="menu-right">
        <ul class="notification-menu">
            <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                     @auth
                        <img src="{{ asset('storage/backend/account/'.Auth::user()->avatar) }}" style="width:30px;height:30px"/>
                     @endauth
                     @auth
                        {{ Auth::user()->user_name }}
                     @endauth
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                  <li> <a href='{{ url("admin/account/edit") }}'> <i class="fa fa-user"></i> {{ __('Edit profile') }} </a> </li>
                  <li> <a href='{{ url("admin/account/change-password") }}'><i class="fa fa-lock"></i>{{ __('Change password') }}</a> </li>
                  <li> <a href="{{ url('admin/auth/logout') }}"> <i class="fa fa-sign-out"></i> {{ __('Logout') }} </a> </li>
                </ul>
            </li>
        </ul>
    </div>
    <!--notification menu end -->

</div>
<!-- header section end-->