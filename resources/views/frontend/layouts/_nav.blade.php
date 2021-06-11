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
                        039 365 60 99
                </div>

                @if (!Auth::check())
                    <div class="btn-cols">
                        <ul class="list-btn-group">
                            <li>
                                <a href='' data-toggle="modal" data-target="#myModal">
                                    {{ __('Sign In') }}
                                </a>
                            </li>
                            <li>
                                <a href='{{ route('register') }}'>
                                    <b>{{ __('Sign Up') }}</b>
                                </a>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>

            {{-- Authentication information --}}
            @include('frontend.layouts._user-info')

            {{-- Nav bar --}}
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('/') }}">
                        {{ __('Home') }}
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ __('Categories') }} <i class="icofont icofont-curved-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                        <li>
                            <a href='{{ route('frontend.category-product.index', $category->id) }}'>{{$category->name_category}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ __('Languages') }} <i class="icofont icofont-curved-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a href="{!! route('change-language', ['en']) !!}">{{ __('English') }}</a></li>
                        <li><a href="{!! route('change-language', ['vi']) !!}">{{ __('Vietnamese') }}</a></li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

</nav>
<!-- END: NAVBAR -->
