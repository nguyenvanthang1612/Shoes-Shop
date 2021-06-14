@extends('backend.authenticate.layouts.app')

@section('title')
    login
@endsection

@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>




@section('content')
     <!--Start login Section-->
  <section class="login-section">
    <div class="container">
        <div class="row">
            <div class="login-wrapper">
                <div class="login-inner">

                    <h2 class="header-title text-center">Login</h2>

                    @if ( Session::has('error') )
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>{{ Session::get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                                @foreach ($errors->all() as $error)
                                    <strong>{{ $error }}</strong>
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="display: flex; align-items: flex-end; justify-content: center">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif

                    <form method="post" action="{{ url('admin/auth/login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="Password" name="password" />
                        </div>

                        <div class="form-group">
                            <div class="pull-left">
                            <div class="checkbox primary">
                                <input  id="checkbox-2" type="checkbox" name="remember_token">
                                <label for="checkbox-2">Remember me</label>
                            </div>
                            </div>

                            <div class="pull-right">
                                <a href="{{ url('admin/auth/forgot-password') }}" class="a-link">
                                    <i class="fa fa-unlock-alt"></i> Forgot password?
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary btn-block" >
                        </div>

                    </form>

                     <div class="copy-text">
                        <p class="m-0">2021 &copy; Shoes Shop Company.</p>
                     </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--End login Section-->
@endsection
