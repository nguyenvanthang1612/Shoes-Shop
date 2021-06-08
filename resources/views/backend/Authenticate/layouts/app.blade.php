<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{!! asset('backend/assets/images/logo-icon1.png') !!}" type="image/png">
  <title>@yield('title')</title>
  <link href="{!! asset('backend/assets/css/icons.css') !!}" rel="stylesheet">
  <link href="{!! asset('backend/assets/css/bootstrap.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('backend/assets/css/style.css') !!}" rel="stylesheet">
  <link href="{!! asset('backend/assets/css/responsive.css') !!}" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="sticky-header">

    @yield('content')

    <script src="{!! asset('backend/assets/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('backend/assets/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('backend/assets/plugins/moment/moment.js') !!}"></script>
    <script src="{!! asset('backend/assets/js/jquery.slimscroll.js ') !!}"></script>
    <script src="{!! asset('backend/assets/js/jquery.nicescroll.js') !!}"></script>
    <script src="{!! asset('backend/assets/js/functions.js') !!}"></script>
</body>

</html>