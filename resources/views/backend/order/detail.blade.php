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
                 <div class="col-md-6">
                   <div class="white-box">
                     <h2 class="header-title">Order Information</h2>
                       
                     <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Product Name : </label>
                            <div class="col-sm-10">
                              <p class="form-control-static">{{ $order->product_name }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">SKU : </label>
                            <div class="col-sm-10">
                              <p class="form-control-static">{{ $order->SKU }}</p>
                            </div>
                          </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Quantity : </label>
                            <div class="col-sm-10">
                              <p class="form-control-static">{{ $order->quantity }}</p>
                            </div>
                          </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">All Price : </label>
                            <div class="col-sm-10">
                              <p class="form-control-static">{{ $order->price }}</p>
                            </div>
                          </div>
                     </div>
                   </div>
                  </div>

                  <div class="col-md-6">
                    <div class="white-box">
                      <h2 class="header-title">Client Information</h2>
                        
                      <div class="form-horizontal">
                         <div class="form-group">
                             <label class="col-sm-2 control-label">Client Name : </label>
                             <div class="col-sm-10">
                               <p class="form-control-static">{{ $order->client_name }}</p>
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-sm-2 control-label">Email : </label>
                             <div class="col-sm-10">
                               <p class="form-control-static">{{ $order->email }}</p>
                             </div>
                           </div>
 
                         <div class="form-group">
                             <label class="col-sm-2 control-label">Telephone : </label>
                             <div class="col-sm-10">
                               <p class="form-control-static">{{ $order->telephone }}</p>
                             </div>
                           </div>
 
                         <div class="form-group">
                             <label class="col-sm-2 control-label">Address : </label>
                             <div class="col-sm-10">
                               <p class="form-control-static">{{ $order->address }}</p>
                             </div>
                           </div>

                         <div class="form-group">
                             <label class="col-sm-2 control-label">City : </label>
                             <div class="col-sm-10">
                               <p class="form-control-static">{{ $order->city }}</p>
                             </div>
                           </div>
 
                         <div class="form-group">
                             <label class="col-sm-2 control-label">Payment type : </label>
                             <div class="col-sm-10">
                               <p class="form-control-static">{{ $order->payment_type }}</p>
                             </div>
                           </div>
                      </div>
                    </div>
                   </div>

              </div>

             <div class="row">
                 

              </div>
             <!--End row-->

			    </div>
        <!-- End Wrapper-->
      <!--End main content -->
@endsection

