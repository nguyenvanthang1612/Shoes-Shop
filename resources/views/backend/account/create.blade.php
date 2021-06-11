@extends('backend.layouts.app');

@section('title')
    {{ __('Create Admin Account') }}
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">{{ __('Account') }}</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">{{ __('Dashboard') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ __('Account') }}</a>
                        </li>
                        <li class="active">
                            {{ __('Create Admin Account') }}
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">{{ __('Create Admin Account') }}</h2>
                       
                        <form class="form-horizontal" action="{{ url('admin/account/create_account') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          {{-- username --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Username') }}</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="user_name" placeholder="{{ __('Username') }}" value="{{ old('user_name') }}">
                              @error('user_name')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          {{-- firstname --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('First name') }}</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="first_name" placeholder="{{ __('First name') }}" value="{{ old('first_name') }}">
                              @error('first_name')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          {{-- lastname --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Last name') }}</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="last_name" placeholder="{{ __('Last name') }}" value="{{ old('last_name') }}">
                              @error('last_name')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>
                          
                          {{-- email --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Email</label>
                            <div class="col-md-10">
                              <input id="example-email" name="email" class="form-control" placeholder="Email" type="text" value="{{ old('email') }}">
                              @error('email')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>
                          
                          {{-- password --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Password') }}</label>
                            <div class="col-md-10">
                              <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" value="{{ old('password') }}">
                              @error('password')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          {{-- telephone --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Telephone') }}</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="telephone" placeholder="{{ __('Telephone') }}" value="{{ old('telephone') }}">
                              @error('telephone')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          {{-- Avatar --}}
                          <div class="form-group">
                            <div class="custom-file">
                              <label class="col-sm-2 control-label">{{ __('Avatar') }}</label>
                              <div class="col-sm-10">
                                  <div class="fallback">
                                    <input type="file" class="custom-file-input" id="customFile" name="avatar">
                                    @error('avatar')
                                        <div class="text-danger">
                                          <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                  </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                              <button type="submit" class="btn btn-primary outline-btn">{{ __('Submit') }}</button>
                              <a href="{{ url('/admin/account/admin_management') }}">
                                <button type="button" class="btn btn-danger outline-btn">{{ __('Cancel') }}</button>
                              </a>
                            </div>
                          </div>

                        </form>
                   </div>
                  </div>
              </div>
             <!--End row-->

			    </div>
        <!-- End Wrapper-->
      <!--End main content -->
@endsection

