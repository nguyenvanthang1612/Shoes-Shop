@extends('backend.layouts.app')

@section('title')
    {{ __('Statistical') }}
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
              
        <!--Start Page Title-->
         <div class="page-title-box">
              <h4 class="page-title">{{ __('Statistical') }}</h4>
              <ol class="breadcrumb">
                  <li>
                      <a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a>
                  </li>
                  <li class="active">
                      <a href="#">{{ __('Statistical') }}</a>
                  </li>
              </ol>
              <div class="clearfix"></div>
           </div>
            <!--End Page Title-->          
         
         
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                     <div class="white-box">
                         <h2 class="header-title">{{ __('Statistical') }}</h2>
                          <div class="table-responsive">
                           <table class="display table">
                                  <thead>
                                      <tr>
                                          <th>{{ __('Month') }}</th>
                                          <th>{{ __('Total') }}</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                        <tr>
                                            <td>{{ $month }}</td>
                                            <td>{{ $totalEarning }}</td>
                                        </tr>
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

