@extends('backend.layouts.app');

@section('title')
    Create Admin Account
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Form Basic</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Account</a>
                        </li>
                        <li class="active">
                            Create Account
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">Select Fields</h2>
                       
                        <form class="form-horizontal">
                          {{-- username --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Username</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="user_name" placeholder="username">
                            </div>
                          </div>

                          {{-- firstname --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">First name</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="first_name" placeholder="first name">
                            </div>
                          </div>

                          {{-- lastname --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Last name</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="last_name" placeholder="last name">
                            </div>
                          </div>
                          
                          {{-- email --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Email</label>
                            <div class="col-md-10">
                              <input id="example-email" name="example-email" class="form-control" placeholder="Email" type="email">
                            </div>
                          </div>
                          
                          {{-- password --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Password</label>
                            <div class="col-md-10">
                              <input class="form-control" type="password">
                            </div>
                          </div>

                          {{-- position --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Position</label>
                            <div class="col-md-10">
                              <select class="form-control" name="role">
                                <option value="">Select</option>
                              </select>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                              <button type="submit" class="btn btn-primary outline-btn">Submit</button>
                              <a href="{{ url('/admin') }}">
                                <button type="button" class="btn btn-danger outline-btn">Cancel</button>
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

