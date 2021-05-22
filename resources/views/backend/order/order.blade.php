@extends('backend.layouts.app')

@section('title')
    order table
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
              
        <!--Start Page Title-->
         <div class="page-title-box">
              <h4 class="page-title">Order Table</h4>
              <ol class="breadcrumb">
                  <li>
                      <a href="#">Dashboard</a>
                  </li>
                  <li>
                      <a href="#">Order</a>
                  </li>
                  <li class="active">
                      Order Table
                  </li>
              </ol>
              <div class="clearfix"></div>
           </div>
            <!--End Page Title-->          
         
         
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                     <div class="white-box">
                         <h2 class="header-title">Order Table</h2>
                          <div class="table-responsive">
                           <table id="example" class="display table">
                                  <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>Product Name</th>
                                          <th>SKU</th>
                                          <th>Quantity</th>
                                          <th>Price</th>
                                          <th>Client Name</th>
                                          <th>Email</th>
                                          <th>Telephone</th>
                                          <th>Address</th>
                                          <th>City</th>
                                          <th>Payment Type</th>
                                      </tr>
                                  </thead>
                                  <tfoot>
                                      <tr>
                                        <th>Id</th>
                                        <th>Product Name</th>
                                        <th>SKU</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Client Name</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Payment Type</th>
                                      </tr>
                                  </tfoot>
                                  <tbody>
                                      @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->product_name }}</td>
                                            <td>{{ $order->SKU }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>{{ $order->price }}</td>
                                            <td>{{ $order->client_name }}</td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->telephone }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->city }}</td>
                                            <td>{{ $order->payment_type }}</td>
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

