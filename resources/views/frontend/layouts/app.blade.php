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
        <link rel="shortcut icon" href="{{ asset('frontend/images/blocks/logo-icon1.png') }}" type="image/png">
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
        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

        <link href="{!! asset('frontend/css/custom.css') !!}" rel="stylesheet"/>
    </head>

    <body>

        <!-- Messenger Plugin chat Code -->
        <div id="fb-root"></div>

        <!-- Your Plugin chat code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100157308964620");
        chatbox.setAttribute("attribution", "biz_inbox");
        window.fbAsyncInit = function() {
            FB.init({
            xfbml            : true,
            version          : 'v10.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="wjYoBBag"></script>

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

        @routes

        <!-- Google API -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
        $(function() {
            $("form#login-form").submit(function(e) {
                e.preventDefault();
                const username = $("#login-form [name='user_name']").val();
                const password = $("#login-form [name='password']").val();

                console.log(username, password)
                post(route("frontend.authenticate.login"), {
                    user_name: username,
                    password
                }, function(res) {
                    location.reload();
                }, function(err) {
                    $("#error-login").addClass('alert alert-danger alert-dismissible')
                    $("#error-login").text(err.responseJSON.message);
                })
            });
        });
        </script>
        <script>
            function addCart(id)
            {
                get(route('frontend.cart.add-cart', id), function(res) {
                    reloadCartItemInBadge()
                    alertify.success("{{ __('New Product Added') }}");
                }, function(err) {
                    console.error(err)
                })
            }

            function reloadProductInCartPage()
            {
                get(route('frontend.cart.reload-products-in-cardpage'), function(response) {
                    $("#products-step-1").html(response)
                });
            }

            $(document).on("click",".remove-btn" , function(){
                removeItemOutOfCart($(this));
            });

            function removeItemOutOfCart(item)
            {
                const productId = item.attr("data-idcart");

                get(route("frontend.cart.delete-item", productId), function() {
                    reloadCartItemInBadge();
                    reloadProductInCartPage();
                    alertify.success("{{ __('Product has been deleted') }}");
                })
            }

            function reloadCartItemInBadge()
            {
                get(route('frontend.cart.reloadCartItemInBadge'), function(response) {
                    renderCart(response)
                })
            }

            function renderCart(response)
            {
                $("#change-item-cart").empty();
                $("#change-item-cart").html(response);
                $("#show-total-quantity").text($("#total-quantity-cart").length != 0 ? $("#total-quantity-cart").val() : 0);
            }

            $('.swither').on("click", "li" , function(){
                    //<span data-idcart="2"></span>
                const viewMode = $(this).data('display');
                $(".item-wrapper").attr('data-viewmode', viewMode)
            });
        </script>

        @stack('js')
    </body>

</html>
