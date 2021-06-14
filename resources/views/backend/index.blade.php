@extends('backend.layouts.app');

@section('title')
    {{ __('Index') }}
@endsection

@section('content')
    
        <!-- phần thân từ đây -->
        <!--body wrapper start-->
        <div class="wrapper">
              
          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">{{ __('Dashboard') }}</h4>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->          
           
                 <!--Start row-->
                 <div class="row">
                     <div class="container">
                         <div class="analytics-box">
                             
                         </div>
                     </div>
                 </div>
                 <!--End row-->
           
                  <!--Start row-->
                  <div class="row">
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{ $orderItem }}</p>
                              <span>{{ __('Total Sales') }}</span>
                          </div>
                          <div class="info-icon text-primary ">
                              <i class="mdi mdi-cart"></i>
                          </div>
                          
                       </div>
                   </div>
                   <!--End info box-->
                   
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{ $clientAccount }}</p>
                              <span>{{ __('Customers') }}</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="mdi mdi-account-multiple"></i>	
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{ $totalEarning }}</p>
                              <span>{{ __('Total Earning') }}</span>
                          </div>
                          <div class="info-icon text-warning">
                              <i class="fa fa-dollar"></i>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{ $orders }}</p>
                              <span>{{ __('Orders') }}</span>
                          </div>
                          <div class="info-icon text-danger">
                              <i class="mdi mdi-weight"></i>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                
                  </div>
                  <!--End row-->
 
                <!--Start row-->  
                <div class="row">
                  <div class="col-md-12">
                      <div class="white-box">
                          <h2 class="header-title">Total Revenue </h2>
                            <ul class="list-inline text-center m-t-10">
                              <li>
                                <h5><i class="fa fa-circle m-r-5" style="color:#03A9F3;"></i>Section A</h5>
                              </li>
                            </ul>
                            <canvas id="chart"  style="height:300px;"></canvas>
                            
                      </div>
                  </div>
                </div>
                <!--End row-->
			    </div>
        <!-- End Wrapper-->
      <!--End main content -->
@endsection