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
                       
                        <form class="form-horizontal" action="{{ url('admin/categories') }}" method="POST">
                          @csrf
                          {{-- name --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="name" placeholder="name" value="{{ old('name') }}">
                              @error('name')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                              @enderror
                            </div>
                          </div>

                          {{-- description --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            
                            <div class="col-md-10">
                              <textarea id="ckeditor" cols="30" rows="10" name="desc" value="{{ old('desc') }}"></textarea>
                              @error('desc')
                                <div class="text-danger">
                                  <span>{{ $message }}</span>
                                </div>
                              @enderror
                            </div>
                            
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                              <button class="btn btn-primary outline-btn">Submit</button>
                              <a href="{{ url('/admin/categories') }}">
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

