<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta name="token" content="{{ csrf_token() }}" />
        <!--link rel="icon" href="#"-->

        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{!! asset('frontend/assets/css/bootstrap.min.css') !!}"/>

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{!! asset('frontend/css/theme.min.css') !!}"/>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet"/>

        <!-- Icons -->
        <link href="{!! asset('frontend/assets/fonts/icofont/icofont.min.css') !!}" rel="stylesheet"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @stack('css')
        <style>
            .navbar-default .navbar-nav ul.dropdown-menu {
                padding-bottom: 0;
            }

            .auth-form {
                padding-bottom: 80px;
                margin: 0;
            }

            .register-field {
                margin-bottom: 25px !important;
            }
        </style>
    </head>

    <body>
        <!--
        PRELOADER
        =============================================== -->
        <div class="preloader">
            <img src="{{ asset('frontend/images/preloader.gif') }}" alt="">
        </div>
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

        <!-- Alert js -->

        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>


        <!-- Google API -->
        <script src="https://maps.googleapis.com/maps/api/js?key=GOOGLE_MAPS_API_KEY&libraries=places&callback=initAutocomplete"
        async defer></script><!-- / Google API -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
        $(function() {
            $("form#login-form").submit(function(e) {
                e.preventDefault();
                const username = $("[name='user_name']").val();
                const password = $("[name='password']").val();

                post("{{ route('user.login') }}", {
                    user_name: username,
                    password
                }, function(res) {
                    location.reload();
                }, function(res) {
                    $("#error-login").addClass('alert alert-danger alert-dismissible')
                    $("#error-login").text(res.responseJSON.message);
                })
            });
        });
        </script>
<<<<<<< HEAD
        <script>
            function addCart(id)
            {
                $.ajax({
                    url: 'addCart/'+id,
                    type: 'GET',
                }).done(function(response)
                {
                    console.log(response);
                    renderCart(response);
                    alertify.success("Đã thêm sản phẩm mới");
                });



            }

            $(document).on("click",".remove-btn" , function(){
                    //<span data-idcart="2"></span>
                    $.ajax({
                    url:'deleteItemCart/'+$(this).attr("data-idCart"),
                    type:'GET',
                }).done(function(respone) {
                    $("#change-item-cart").empty();
                    $("#change-item-cart").html(response);
                    alertify.success('Đã xoá thành công sản phẩm');
                });
            });

            function renderCart(response)
            {
                $("#change-item-cart").empty();
                $("#change-item-cart").html(response);


            }
        </script>
=======
        @stack('js')
>>>>>>> b7042c6f6dbd3d18903b7fc9056127eff9ae1fc3
    </body>
</html>
