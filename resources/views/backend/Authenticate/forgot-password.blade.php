@extends('backend.Authenticate.layouts.app');

@section('title')
    Forgot Password
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
                        
                    <form>
                      <label class="text-center m-b-25">Enter your email address below to reset your password</label>
                        <div class="form-group">
                            <input type="password" class="form-control" >
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary btn-block" >
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

