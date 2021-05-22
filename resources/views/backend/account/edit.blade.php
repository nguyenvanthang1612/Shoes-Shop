@extends('backend.layouts.app');

@section('title')
    Edit Account
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Edit Form</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Account</a>
                        </li>
                        <li class="active">
                            Edit Account
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">Edit Admin </h2>
                       
                        <form class="form-horizontal" action='{{ url("/admin/account/edit/$account->id") }}' method="POST" enctype="multipart/form-data">
                          @method('PUT')
                          @csrf
                          {{-- username --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Username</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="user_name" placeholder="user name" value="{{ old('user_name', $account->user_name) }}">
                              @error('user_name')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          {{-- firstname --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">First name</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="first_name" placeholder="first name" value="{{ old('first_name', $account->first_name) }}">
                              @error('first_name')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          {{-- lastname --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Last name</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="last_name" placeholder="last name" value="{{ old('last_name', $account->last_name) }}">
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
                              <input id="example-email" name="email" class="form-control" placeholder="Email" type="text" value="{{ old('email', $account->email) }}">
                              @error('email')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          {{-- telephone --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Telephone</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="telephone" placeholder="Telephone" value="{{ old('telephone', $account->telephone) }}">
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
                              <label class="col-sm-2 control-label">Image</label>
                              <div class="col-sm-10">
                                  <img src="{{ asset('storage/backend/account/'.$account->avatar) }}" />
                                  <div class="fallback">
                                    <input type="hidden" name="avatar" value="{{ $account->avatar }}" />
                                    <input type="file" name="avatar">
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
                              <button type="submit" class="btn btn-primary outline-btn">Submit</button>
                              <a href="{{ url('/admin/account/admin_management') }}">
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

