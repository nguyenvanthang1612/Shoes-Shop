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
 
                    <h2 class="header-title text-center">Login</h2>

                    {{-- @if ( Session::has('error') )
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
                    @endif --}}
                     
                    <form method="post" action="#">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="Password" name="password" />
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="Confirm Password" name="confirm_password" />
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
