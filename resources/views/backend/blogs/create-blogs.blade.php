@extends('backend.layouts.app')

@section('title')
  {{ __('Create Blog') }}
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">

              <!--Start Page Title-->
                {{-- <div class="white-box"> --}}
                  <div class="page-title-box">
                    <h4 class="page-title">{{ __('Blog') }}</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ __('Blog') }}</a>
                        </li>
                        <li class="active">
                            {{ __('Create Blog') }}
                        </li>
                    </ol>
                      <div class="clearfix"></div>
                  </div>
                {{-- </div> --}}
                  <!--End Page Title-->


             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">{{ __('Create Blog') }}</h2>

                        <form class="form-horizontal" action="{{ url('admin/dashboard/blog') }}" method="POST" enctype="multipart/form-data">

                          @csrf
                          {{-- title --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Title') }}</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="title" placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                              @error('title')
                                <div class="text-danger">
                                  <span>{{ $message }}</span>
                                </div>
                              @enderror
                            </div>
                          </div>

                          {{-- actor --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Actor') }}</label>
                            <div class="col-md-10">
                              <select class="form-control" name="user_id">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->user_name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                          {{-- content --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Content') }}</label>
                            <div class="col-md-10">
                              <textarea id="ckeditor" cols="30" rows="10" name="content" value="{{ old('content') }}"></textarea>
                              @error('content')
                                <div class="text-danger">
                                  <span>{{ $message }}</span>
                                </div>
                              @enderror
                            </div>
                          </div>

                          {{-- status --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Status') }}</label>
                            <div class="col-md-10">
                              <select class="form-control" name="status">
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                              </select>
                            </div>
                          </div>

                          {{-- image --}}
                          <div class="form-group">
                            <div class="custom-file">
                              <label class="col-sm-2 control-label">{{ __('Image') }}</label>
                              <div class="col-sm-10">
                                  <div class="fallback">
                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                    @error('image')
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
                              <button class="btn btn-primary outline-btn">{{ __('Submit') }}</button>
                              <a href="{{ url('/admin/dashboard/blog') }}">
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

