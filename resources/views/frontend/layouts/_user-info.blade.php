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

        <a href="#" class="cart-icon hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">

            <span class="badge bg-blue">3</span>

            <i class="icofont icofont-cart-alt"></i>
        </a>

        <a href="#" class="visible-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="icofont icofont-cart-alt"></i>
            Shopping cart
        </a>

        <!-- Dropdown items list -->
        <ul class="dropdown-menu">

            <!-- Item -->
            <li>
                <div class="wrap">

                    <!-- Image -->
                    <div class="image">
                        <img src="images/shop/img-01.jpg" alt="">
                    </div>

                    <!-- Caption -->
                    <div class="caption">
                        <span class="comp-header st-1 text-uppercase">
                            T-SHIPT
                            <span>
                                MEN COLLECTION
                            </span>
                            <span>
                                FAKE BRAND
                            </span>
                        </span>

                        <span class="price">
                            <span class="text-grey-dark">$</span>
                            257 <small class="text-grey-dark">.00</small>
                        </span>
                    </div>

                    <!-- Remove btn -->
                    <span class="remove-btn bg-blue">
                        <i class="icofont icofont-bucket"></i>
                    </span>
                </div>
            </li>

            <!-- Item -->
            <li>
                <div class="wrap">

                    <!-- Image -->
                    <div class="image">
                        <img src="images/shop/img-01.jpg" alt="">
                    </div>

                    <!-- Caption -->
                    <div class="caption">
                        <span class="comp-header st-1 text-uppercase">
                            T-SHIPT
                            <span>
                                MEN COLLECTION
                            </span>
                            <span>
                                FAKE BRAND
                            </span>
                        </span>

                        <span class="price">
                            <span class="text-grey-dark">$</span>
                            257 <small class="text-grey-dark">.00</small>
                        </span>
                    </div>

                    <!-- Remove btn -->
                    <span class="remove-btn bg-blue">
                        <i class="icofont icofont-bucket"></i>
                    </span>
                </div>
            </li>

            <!-- Item -->
            <li>
                <div class="wrap">

                    <!-- Image -->
                    <div class="image">
                        <img src="images/shop/img-01.jpg" alt="">
                    </div>

                    <!-- Caption -->
                    <div class="caption">
                        <span class="comp-header st-1 text-uppercase">
                            T-SHIPT
                            <span>
                                MEN COLLECTION
                            </span>
                            <span>
                                FAKE BRAND
                            </span>
                        </span>

                        <span class="price">
                            <span class="text-grey-dark">$</span>
                            257 <small class="text-grey-dark">.00</small>
                        </span>
                    </div>

                    <!-- Remove btn -->
                    <span class="remove-btn bg-blue">
                        <i class="icofont icofont-bucket"></i>
                    </span>
                </div>
            </li>


            <li class="more-btn sdw">
                <a href="card-page-step-1.html" class="btn-material btn-primary">
                    View order <i class="icofont icofont-check-circled"></i>
                </a>
            </li>


        </ul>
    </li>
</ul>
