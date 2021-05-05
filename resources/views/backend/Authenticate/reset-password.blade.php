@extends('backend.Authenticate.layouts.app');

@section('title')
    Reset Password
@endsection

@section('content')
     <!--Start login Section-->
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="login-wrapper">
                    <div class="login-inner">
                        
                        <div class="logo">
                        <img src="assets/images/logo-dark.png"  alt="logo"/>
                        </div>
                            
                            <h2 class="header-title text-center">Reset Password </h2>
                        
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×
                            </button>
                            Enter your <b>Email</b> and instructions will be sent to you!
                        </div>
                        
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Enter Email" >
                            </div>
                            
                        
                            <div class="form-group">
                                <input type="submit" value="Reset" class="btn btn-primary btn-block" >
                            </div>
                            
                        </form>
                        
                        <div class="copy-text"> 
                        <p class="m-0">2017 &copy; Meter admin</p>
                        </div>
                    
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<!--End login Section-->
@endsection


    <!--Begin core plugin -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/moment/moment.js"></script>
    <script  src="assets/js/jquery.slimscroll.js "></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/functions.js"></script>
    <!-- End core plugin -->
       

</body>

</html>
