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
  <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" type="image/png">
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
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('css') --}}
    <link rel="stylesheet" href="{{ asset('css/image.css') }}">
    
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
    <script src="{{  asset('backend/assets/plugins/morris-chart/morris.js')  }}"></script>
    <script src="{{  asset('backend/assets/plugins/morris-chart/raphael-min.js')  }}"></script>
    <script src="{{  asset('backend/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')  }}"></script>
    <script src="{{  asset('backend/assets/pages/dashboard.js')  }}"></script>
    <!--Begin Page Level Plugin-->
    <script src="{{  asset('backend/assets/plugins/datatables/js/jquery.dataTables.min.js')  }}"></script>
    <script src="{{  asset('backend/assets/pages/table-data.js')  }}"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{  asset('backend/assets/plugins/summernote-master/summernote.min.js')  }}"></script>
    <script src="{{  asset('backend/assets/pages/compose.js')  }}"></script>
    <!--End Page Level Plugin-->
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
        CKEDITOR.replace('ckeditor')
    </script>
    {{-- delete with jquery --}}
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>