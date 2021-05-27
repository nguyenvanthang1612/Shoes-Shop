<nav class="navbar navbar-default">

    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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

            {{-- Authentication information --}}
            @if (Auth::check())
                @include('frontend.layouts._nav')
            @endif


            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Categories <i class="icofont icofont-curved-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                        <li><a
                                href='{{url("/products/categories/$category->id/list")}}'>{{$category->name_category}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

</nav>
<!-- END: NAVBAR -->
