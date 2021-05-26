

        <nav class="navbar navbar-default">

            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="images/main-brand.png" alt="" class="brand">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <!-- Top panel / search / phone -->
                    <div class="top-panel">

                        <div class="phone text-blue">
                            <i class="icofont icofont-phone-circle"></i>



                            +1 234 567 89 10
                        </div>

                        <form class="search bg-grey-light btn-material">
                            <input type="text" class="search-form" id="top-search">
                            <label for="top-search">search</label>
                        </form>

                        @if (!Auth::check())
                            <div class="btn-cols">

                                <ul class="list-btn-group">
                                    <li>
                                        <a href='' data-toggle="modal" data-target="#myModal">
                                            Sign in
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{url("/register-page/create")}}'>
                                            <b>Sign up</b>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>

                    <ul class="nav navbar-nav navbar-right info-panel">

                        <!-- Profile -->
                        <li class="profile">
                            <span class="wrap">
                            @if(Auth::check())
                                <!-- Image -->
                                <span class="image bg-white">

                                    <!-- New message badge -->
                                    <span class="badge bg-blue hidden-xs hidden-sm"></span>


                                    <span class="icon">
                                        <a href='{{ url("/user/index-page", [Auth::user()->id]) }}'><i class="icofont icofont-user-alt-4 text-blue" ></i></a>
                                    </span>


                                    <!--img src="images/profile/profile-img.jpg" alt=""-->
                                </span>
                            @endif
                                <!-- Info -->
                                <span class="info">
                                    <!-- Name -->
                                    @if(Auth::check())
                                    <span class="name text-uppercase" value="">{{ Auth::user()->user_name }}</span>
                                    <a href='{{ url("/user/edit-page", [Auth::user()->id]) }}'>edit profile</a>
                                    <a href='{{ url("/logout") }}'>Logout</a>

                                    @endif
                                </span>
                            </span>
                        </li>

                        <!-- Cart -->
                        <li class="cart">

                            <div id="change-item-cart">
                                                        
                            </div>

                        </li>

                    </ul>

                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                categories <i class="icofont icofont-curved-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                            @foreach($categories as $category)
                                <li><a href='{{url("/products/categories/$category->id/list")}}'>{{$category->name_category}}</a></li>
                            @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">
                                new
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                pages <i class="icofont icofont-curved-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="shop-list.html">Shop category</a></li>
                                <li><a href="shop-item.html">Shop item</a></li>
                                <li><a href="card-page-step-1.html">Shopping card. Step 1</a></li>
                                <li><a href="card-page-step-2.html">Shopping card. Step 2</a></li>
                                <li><a href="card-page-step-3.html">Shopping card. Step 3</a></li>
                                <li><a href="register-page.html">Register page</a></li>
                                <li><a href="blog-item.html">Item blog</a></li>
                            </ul>
                        </li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->

        </nav>
        <!-- END: NAVBAR -->
