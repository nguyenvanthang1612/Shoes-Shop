@extends('backend.layouts.app');

@section('title')
    index admin
@endsection

@section('content')
    
        <!-- phần thân từ đây -->
        <!--body wrapper start-->
        <div class="wrapper">
              
          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Dashboard1 </h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    
                    <li class="active">
                        Dashboard 1
                    </li>
                </ol>
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
                              <span>Total Sales </span>
                          </div>
                          <div class="info-icon text-primary ">
                              <i class="mdi mdi-cart"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                   
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{ $clientAccount }}</p>
                              <span>Daily visitors</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="mdi mdi-account-multiple"></i>	
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{ $totalEarning }}</p>
                              <span>Total Earning</span>
                          </div>
                          <div class="info-icon text-warning">
                              <i class="fa fa-dollar"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                              </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{ $orders }}</p>
                              <span>Pending Orders</span>
                          </div>
                          <div class="info-icon text-danger">
                              <i class="mdi mdi-weight"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
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
                              <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #FFAA00;"></i>Section B</h5>
                              </li>
                            </ul>
                            <div id="morris2"  style="height:300px;"></div>
                            
                      </div>
                  </div>
                </div>
                <!--End row-->
                  
                  
                   
			   
			    </div>
        <!-- End Wrapper-->
      <!--End main content -->
@endsection