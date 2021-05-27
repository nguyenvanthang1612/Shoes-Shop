@extends('backend.Authenticate.layouts.app')

@section('title')
    login
@endsection

{{-- @if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif --}}

<?php //Hiển thị thông báo lỗi?>




@section('content')
     <!--Start login Section-->
  <section class="login-section">
    <div class="container">
        <div class="row">
            <div class="login-wrapper">
                <div class="login-inner">
 
                    <h2 class="header-title text-center">Reset Password</h2>
                     
                    <form method="POST" action='{{ url("admin/auth/reset-password") }}'>
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email" value="{{ $email ?? old('email') }}"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="Password" name="password" />
                            @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="Confirm Password" name="confirm_password" />
                            @error('confirm_password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
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
