@extends('backend.Authenticate.layouts.app');

@section('title')
    locked
@endsection

@section('content')
     <!--Start login Section-->
  <section class="login-section">
    <div class="container">
        <div class="row">
            <div class="login-wrapper">
                <div class="login-inner">
                    
                    <div class="userimage">
                      <img src="assets/images/users/avatar-10.jpg"  alt="logo"/>
                    </div>
                        
                        <h2 class="header-title text-center">Welcome Back, John!</h2>
                     
                    <form>
                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="Enter password to unlock" >
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Unlock" class="btn btn-primary btn-block" >
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