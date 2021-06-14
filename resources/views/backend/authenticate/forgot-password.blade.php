@extends('backend.authenticate.layouts.app');

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

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('admin/auth/forgot-password') }}">
                      @csrf

                      {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                      <label class="text-center m-b-25">Enter your email address below to reset your password</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter your email" name="email">
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary btn-block" >
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

