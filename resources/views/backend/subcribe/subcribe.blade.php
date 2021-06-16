@extends('backend.layouts.app')

@section('title')
    {{ __('Subcribe List') }}
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
              
        <!--Start Page Title-->
         <div class="page-title-box">
              <h4 class="page-title">{{ __('Subcribe List') }}</h4>
              <ol class="breadcrumb">
                  <li>
                      <a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a>
                  </li>
                  <li class="active">
                      <a href="#">{{ __('Subcribe List') }}</a>
                  </li>
              </ol>
              <div class="clearfix"></div>
           </div>
            <!--End Page Title-->          
         
         
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                     <div class="white-box">
                        <h2 class="header-title" style="text-align: center; font-size: 25px">{{ __('Subcribe List') }}</h2>
                        <form method="GET" action="{{ url('admin/subcribe/search') }}">
                           <input type="text" class="form-control" name="search" placeholder="{{ __('Search here') }}..."
                           style="width:50%; margin: auto; margin-bottom: 30px" />
                        </form>
                          <div class="table-responsive">
                           <table class="display table">
                                  <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>{{ __('Name') }}</th>
                                          <th>{{ __('Email') }}</th>
                                          <th>{{ __('Subcribed At') }}</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($subcribes as $subcribe)
                                        <tr>
                                            <td>{{ $subcribe->id }}</td>
                                            <td>{{ $subcribe->name }}</td>
                                            <td>{{ $subcribe->email }}</td>
                                            <td>{{ $subcribe->created_at }}</td>
                                        </tr>
                                      @endforeach
                                  </tbody>
                            </table>  
                            {{ $subcribes->links('vendor.pagination.bootstrap-4') }}
                          </div>
                     </div>
                 </div>
             </div>
             <!--End row-->
      </div>
      <!-- End Wrapper-->
    <!--End main content -->
@endsection

