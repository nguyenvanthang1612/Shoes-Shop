<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  {{-- add thêm --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('backend/assets/images/logo-icon1.png') }}" type="image/png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.js" 
    integrity="sha512-CAv0l04Voko2LIdaPmkvGjH3jLsH+pmTXKFoyh5TIimAME93KjejeP9j7wSeSRXqXForv73KUZGJMn8/P98Ifg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>@yield('title')</title>

    <!--Begin  Page Level  CSS -->
    <link href="{{  asset('backend/assets/plugins/morris-chart/morris.css')  }}" rel="stylesheet">
    <link href="{{  asset('backend/assets/plugins/jquery-ui/jquery-ui.min.css')  }}" rel="stylesheet"/>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{  asset('backend/assets/plugins/datatables/css/jquery.dataTables.min.css')  }}" rel="stylesheet" type="text/css"/>
    <link href="{{  asset('backend/assets/plugins/datatables/css/jquery.dataTables-custom.css')  }}" rel="stylesheet" type="text/css"/>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{  asset('backend/assets/plugins/summernote-master/summernote.css')  }}" rel="stylesheet" type="text/css"/>
     <!--End  Page Level  CSS -->
    <link href="{{  asset('backend/assets/css/icons.css')  }}" rel="stylesheet">
    <link href="{{  asset('backend/assets/css/bootstrap.min.css')  }}" rel="stylesheet">
    <link href="{{  asset('backend/assets/css/style.css')  }}" rel="stylesheet">
    <link href="{{  asset('backend/assets/css/responsive.css')  }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    {{-- <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  --}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="sticky-header">
    @include('backend.layouts._nav')
    <div class="main-content">
        @include('backend.layouts._header')
        @yield('content')
        @include('backend.layouts._footer')
    </div>
    <!--Begin core plugin -->
    <script src="{{  asset('backend/assets/js/jquery.min.js')  }}"></script>
    <script src="{{  asset('backend/assets/js/bootstrap.min.js')  }}"></script>
    <script src="{{  asset('backend/assets/plugins/moment/moment.js')  }}"></script>
    <script src="{{  asset('backend/assets/js/jquery.slimscroll.js ')  }}"></script>
    <script src="{{  asset('backend/assets/js/jquery.nicescroll.js')  }}"></script>
    <script src="{{  asset('backend/assets/js/functions.js')  }}"></script>
    <!-- End core plugin -->

    <!--Begin Page Level Plugin-->
    {{-- <script src="{{  asset('backend/assets/plugins/morris-chart/morris.js')  }}"></script>
    <script src="{{  asset('backend/assets/plugins/morris-chart/raphael-min.js')  }}"></script> --}}
    <script src="{{  asset('backend/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')  }}"></script>
    <!--Begin Page Level Plugin-->
    <script src="{{  asset('backend/assets/plugins/datatables/js/jquery.dataTables.min.js')  }}"></script>
    <script src="{{  asset('backend/assets/pages/table-data.js')  }}"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{  asset('backend/assets/plugins/summernote-master/summernote.min.js')  }}"></script>
    <script src="{{  asset('backend/assets/pages/compose.js')  }}"></script>
     <!--End Page Level Plugin, sao lai url thay vi asset nó sẵn thế ạ-->
     <script src={{ url('ckeditor/ckeditor.js') }}></script>
     <script>
        CKEDITOR.replace('ckeditor');
    </script>
    @yield('js')

</body>

</html>
