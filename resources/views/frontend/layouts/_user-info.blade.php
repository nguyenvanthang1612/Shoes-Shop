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
                <a href='{{ route('frontend.user.edit-profile') }}'>{{ __('Edit profile') }}</a>
                <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()">{{ __('Logout') }}</a>
                <form class="d-inline" action="{{ route('logout') }}" id="logout-form" method="POST">
                    @csrf
                </form>
            </span>
            @endif
        </span>
    </li>

    <!-- Cart -->
    <li class="cart">
        <a href="#" class="cart-icon hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">
            @if(Session::has("Cart"))
                <span class="badge bg-blue" id="show-total-quantity">{{ count(Session::get('Cart')->products) }}</span>
            @else
                <span class="badge bg-blue" id="show-total-quantity">0</span>
            @endif
                <i class="icofont icofont-cart-alt"></i>
        </a>

        <a href="#" class="visible-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="icofont icofont-cart-alt"></i>
            {{ __('Shopping cart') }}
        </a>
        </a>
        <!-- Dropdown items list -->
        <ul class="dropdown-menu">
            <div id="change-item-cart">
                @if(Session::has("Cart") != null)
                <!-- Dropdown items list -->
                @foreach(Session::get('Cart')->products as $item)
                <!-- Item -->
                <li>
                    <div class="wrap product-item">
                        <!-- Image -->
                        <div class="image">
                            <img src="{{ asset('storage/backend/product/'. $item['productInfo']->thumbnail) }}" alt="">
                        </div>

                        <!-- Caption -->
                        <div class="caption">
                            <span class="comp-header st-1 text-uppercase">
                                {{$item['productInfo']->name}}
                                <span>
                                </span>
                                <span>
                                    {{$item['productInfo']->brand}}
                                </span>
                            </span>

                            <span class="price">
                                <span class="text-grey-dark">$</span>
                                {{$item['productInfo']->price}} x {{$item['quantity']}}
                            </span>


                        </div>
                        <!-- Remove btn -->
                        <button type="submit" class="remove-btn product-delete-icon" data-idCart="{{$item['productInfo']->id}}">
                            <i class="icofont icofont-bucket"></i>
                        </button>
                    </div>
                </li>
                @endforeach
                <li>
                    <h5>{{ __('Total') }}: ${{Session::get('Cart')->totalPrice}}</h5>
                </li>
                <li class="more-btn sdw">
                    <a href="{{ url('/listCart') }}" class="btn-material btn-primary">
                        {{ __('View order') }} <i class="icofont icofont-check-circled"></i>
                    </a>
                </li>
                @endif

            </div>
        </ul>


    </li>
</ul>
