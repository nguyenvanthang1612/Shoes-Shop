@extends('backend.layouts.app')

@section('title')
    {{ __('Category') }}
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
              
        <!--Start Page Title-->
         <div class="page-title-box">
              <h4 class="page-title">{{ __('Category') }}</h4>
              <ol class="breadcrumb">
                  <li>
                      <a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a>
                  </li>
                  <li class="active">
                      <a href="#">{{ __('Category') }}</a>
                  </li>
              </ol>
              <div class="clearfix"></div>
           </div>
            <!--End Page Title-->          
         
         
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                     <div class="white-box">
                         <h2 class="header-title">{{ __('Category') }}</h2>
                          <div class="table-responsive">
                           <table class="display table">
                                  <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>{{ __('Name') }}</th>
                                          <th>{{ __('Description') }}</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name_category }}</td>
                                            <td>{{ $category->desc }}</td>
                                        </tr>
                                      @endforeach
                                  </tbody>
                            </table>  
                          </div>
                     </div>
                 </div>
             </div>
             <!--End row-->
      </div>
      <!-- End Wrapper-->
    <!--End main content -->
@endsection

