<ul class="nav navbar-nav navbar-right info-panel">

    <!-- Profile -->
    <li class="profile">
        <span class="wrap">

            <!-- Image -->
            @if(Auth::check())
                <span class="image bg-white">

                    <!-- New message badge -->
                    <span class="badge bg-blue hidden-xs hidden-sm"></span>

                        <span class="icon">
                            <a href='{{ url("/user/index-page", [Auth::user()->id]) }}'><i
                                    class="icofont icofont-user-alt-4 text-blue"></i></a>
                        </span>

                    <!--img src="images/profile/profile-img.jpg" alt=""-->
                </span>

                <!-- Info -->
                <span class="info">
                    <!-- Name -->
                        <span class="name text-uppercase" value="">{{ Auth::user()->user_name }}</span>
                        <a href='{{ url("/user/edit-page", [Auth::user()->id]) }}'>edit profile</a>
                        <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()">Logout</a>
                        <form class="d-inline" action="{{ route('logout') }}" id="logout-form" method="POST">
                            @csrf
                        </form>
                </span>
            @endif
        </span>
    </li>

    <!-- Cart -->
    <li class="cart">
        <a href="#" class="cart-icon hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            @if(Session::has("Cart") != null)
                <span class="badge bg-blue" id="show-total-quantity">{{Session::get('Cart')->totalQuantity}}</span>
            @else
                <span class="badge bg-blue" id="show-total-quantity">0</span>
            @endif
                <i class="icofont icofont-cart-alt"></i>
            </a>

            <a href="#" class="visible-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="icofont icofont-cart-alt"></i>
                Shopping cart
            </a>

        <!-- Dropdown items list -->
        <ul class="dropdown-menu">
        <div id="change-item-cart">

        </div>
        </ul>


    </li>
</ul>
