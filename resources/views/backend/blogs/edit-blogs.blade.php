@extends('backend.layouts.app')

@section('title')
  {{ __('Edit Blog') }}
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
                            {{ __('Edit Blog') }}
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
                     <h2 class="header-title">{{ __('Edit Blog') }}</h2>

                        <form class="form-horizontal" action='{{ url("admin/dashboard/blog/{$blog->id}") }}' method="POST" enctype="multipart/form-data">
                          @method('put')
                          @csrf
                          {{-- title --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Title') }}</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="title" placeholder="{{ __('Title') }}" value="{{ old('title', $blog->title) }}">
                              
                            </div>
                          </div>

                          {{-- actor --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Actor') }}</label>
                            <div class="col-md-10">
                              <select class="form-control" name="user_id">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $blog->user_id ? 'selected' : '' }}>{{ $user->user_name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                          {{-- content --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Content') }}</label>
                            <div class="col-md-10">
                              <textarea id="ckeditor" cols="30" rows="10" name="content" value="{{ $blog->content }}">{{ $blog->content }}</textarea>
                            </div>
                          </div>

                          {{-- status --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">{{ __('Status') }}</label>
                            <div class="col-md-10">
                              <select class="form-control" name="status">
                                <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Yes</option>
                                <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>No</option>
                              </select>
                            </div>
                          </div>

                          {{-- image --}}
                          <div class="form-group">
                            <div class="custom-file">
                              <label class="col-sm-2 control-label">{{ __('Image') }}</label>
                              <div class="col-sm-10">
                                <img src="{{ asset('storage/backend/blog/'.$blog->image) }}" style="width:220px; height:200px" />
                                  <div class="fallback">
                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                    <input type="hidden" name="image" value="{{ $blog->image }}" />
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

