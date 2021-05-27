@extends('backend.layouts.app');

@section('title')
    Create Admin Account
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Account</h4>
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
                   <div class="white-box" style="text-align: center">
                     <h2 class="header-title">Order Information</h2>
                       
                     <div class="col-md-6">
                        <div class="form-horizontal">
                            <div class="form-group">
                              <div >
                                <p class="form-control-static">Product Name : {{ $order->product_name }}</p>
                              </div>
                            </div>

                            <div class="form-group">

                              <div >
                                <p class="form-control-static">SKU : {{ $order->SKU }}</p>
                              </div>
                            </div>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-horizontal">
                          <div class="form-group">
                            <div class="col-sm-10">
                              <p class="form-control-static">Quantity : {{ $order->quantity }}</p>
                            </div>
                          </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                              <p class="form-control-static">All Price : {{ $order->price }}</p>
                            </div>
                          </div>
                        </div>
                     </div>
                   </div>

                   <div class="white-box" style="text-align: center">
                     <h2 class="header-title">Client Information</h2>
                       
                     <div class="col-md-6">
                      <div class="form-horizontal">
                        <div class="form-group">
                          <div class="col-sm-10">
                            <p class="form-control-static">Client Name : {{ $order->client_name }}</p>
                          </div>
                        </div>
  
                        <div class="form-group">
                          <div class="col-sm-10">
                            <p class="form-control-static">Email : {{ $order->email }}</p>
                          </div>
                        </div>
  
                        <div class="form-group">
                          <div class="col-sm-10">
                            <p class="form-control-static">Telephone : {{ $order->telephone }}</p>
                          </div>
                        </div>
                      </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-horizontal">
                          
                         <div class="form-group">
                          <div class="col-sm-10">
                            <p class="form-control-static">Address : {{ $order->address }}</p>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-10">
                            <p class="form-control-static">City : {{ $order->city }}</p>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-10">
                            <p class="form-control-static">Payment type : {{ $order->payment_type }}</p>
                          </div>
                        </div>
                        </div>
                     </div>
                   </div>
{{-- 
                  <div class="col-md-6">
                    <div class="white-box">
                      <h2 class="header-title">Client Information</h2>
                        
                      <div class="form-horizontal">
                         
 
                      </div>
                    </div>
                   </div> --}}

              </div>

             <div class="row">
                 

              </div>
             <!--End row-->

			    </div>
        <!-- End Wrapper-->
      <!--End main content -->
@endsection

