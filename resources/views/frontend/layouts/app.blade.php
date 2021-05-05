<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <!--link rel="icon" href="#"-->

        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{!! asset('frontend/assets/css/bootstrap.min.css') !!}">
        
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{!! asset('frontend/css/theme.min.css') !!}">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet">
        
        <!-- Icons -->
        <link href="{!! asset('frontend/assets/fonts/icofont/icofont.min.css') !!}" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>

    <body>
        <!-- 
        PRELOADER
        =============================================== -->
        {{-- <div class="preloader">
            <img src="images/preloader.gif" alt="">
        </div> --}}
        <!-- END: PRELOADER -->
        
        <!-- 
        NAVBAR
        =============================================== -->

        @include('frontend.layouts._nav')

        @yield('content')

        @include('frontend.layouts._footer')

        <script src="{!! asset('frontend/assets/js/jquery.min.js') !!}"></script>
        <script src="{!! asset('frontend/assets/js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('frontend/assets/js/jquery-ui.min.js') !!}"></script>
        <script src="{!! asset('frontend/assets/js/owl.carousel.min.js') !!}"></script><!-- OWL Carousel -->
        <script src="{!! asset('frontend/assets/js/lv-ripple.jquery.min.js') !!}"></script><!-- BTN Material effects --> 
        <script src="{!! asset('frontend/assets/js/SmoothScroll.min.js') !!}"></script><!-- SmoothScroll -->
        <script src="{!! asset('frontend/assets/js/jquery.TDPageEvents.min.js') !!}"></script><!-- Page Events -->
        <script src="{!! asset('frontend/assets/js/jquery.TDParallax.min.js') !!}"></script><!-- Parallax -->
        <script src="{!! asset('frontend/assets/js/jquery.TDTimer.min.js') !!}"></script><!-- Timer -->
        <script src="{!! asset('frontend/assets/js/selectize.min.js') !!}"></script><!-- Select customize -->
        <script src="{!! asset('frontend/js/main.min.js') !!}"></script>

        <!-- Google API -->
        <script src="https://maps.googleapis.com/maps/api/js?key=GOOGLE_MAPS_API_KEY&libraries=places&callback=initAutocomplete"
        async defer></script><!-- / Google API -->
    </body>
</html>