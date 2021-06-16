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
                          <h2 class="header-title">{{ __('Revenue chart for the year') }}</h2>
                            
                            <canvas id="chart"  style="height:300px;"></canvas>
                            
                      </div>
                  </div>
                </div>
                <!--End row-->
			    </div>
        <!-- End Wrapper-->
      <!--End main content -->
@endsection

@section('js')
    <script>
        var xValues = @json($monthData) ;
        var yValues = @json($totalEarningData) ;
        var barColors = [
            'rgba(255, 99, 132, 0.2)', //1
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(209, 203, 207, 0.7)',
            'rgba(250, 125, 143, 0.2)',
            'rgba(151, 160, 140, 0.2)',
            'rgba(204, 203, 207, 0.2)',
            'rgba(205, 203, 207, 0.2)',
            'rgba(206, 203, 207, 0.2)'  //12
        ]

        new Chart("chart", {
            type: "bar",
            data: {
                labels: xValues, 
                datasets: [{
                    label: "Doanh thu trong năm",
                    data: yValues,
                    backgroundColor: barColors
                }]
            }
        })
    </script>
@endsection