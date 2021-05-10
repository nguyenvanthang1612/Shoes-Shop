@extends('backend.Authenticate.layouts.app');

@section('title')
    login
@endsection
 
@section('content')
     <!--Start login Section-->
  <section class="login-section">
    <div class="container">
        <div class="row">
            <div class="login-wrapper">
                <div class="login-inner">
 
                    <h2 class="header-title text-center">Login</h2>
                     
                    <form method="post" action="{{ url('admin/auth/login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Username" name="user_name">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="Password" name="password">
                        </div>

                        <div class="form-group">
                            <div class="pull-left">
                            <div class="checkbox primary">
                                <input  id="checkbox-2" type="checkbox">
                                <label for="checkbox-2">Remember me</label>
                            </div>
                            </div>
                            
                            <div class="pull-right">
                                <a href="reset-password.html" class="a-link">
                                    <i class="fa fa-unlock-alt"></i> Forgot password?
                                </a>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary btn-block" >
                        </div>
                        
                        <div class="form-group text-center">
                            Don't have an account?  <a href="registration.html">Sign Up </a>
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
