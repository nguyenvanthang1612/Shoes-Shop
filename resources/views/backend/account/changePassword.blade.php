@extends('backend.layouts.app');

@section('title')
    Create Admin Account
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Account</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Account</a>
                        </li>
                        <li class="active">
                             Change Password
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">Change Password </h2>
                       
                        <form class="form-horizontal" action='{{ url("admin/account/change-password/$account->id") }}' method="POST">
                          @method('PUT')
                          @csrf
                          {{-- current password --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Current Password</label>
                            <div class="col-md-10">
                              <input class="form-control" type="password" name="password" placeholder="Current Password" />
                              @error('password')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          {{-- new password --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">New Password</label>
                            <div class="col-md-10">
                              <input class="form-control" type="password" name="new_password" placeholder="New Password" />
                              @error('new_password')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          {{-- confirm password --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Confirm Password</label>
                            <div class="col-md-10">
                              <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" />
                              @error('confirm_password')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                              <button type="submit" class="btn btn-primary outline-btn">Submit</button>
                              <a href="{{ url('/admin/account/admin_management') }}">
                                <button type="button" class="btn btn-danger outline-btn">Cancel</button>
                              </a>
                            </div>
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

