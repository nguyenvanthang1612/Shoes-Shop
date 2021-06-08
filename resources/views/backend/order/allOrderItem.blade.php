@extends('backend.layouts.app')

@section('title')
    Order Items
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
                       
        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Order</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Order</a>
                </li>
                <li class="active">
                    All Order Items
                </li>
            </ol>
            <div class="clearfix"></div>
         </div>
          <!--End Page Title--> 
          
            <!--Start row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h2 class="header-title" style="text-align: center; font-size: 25px">Order Items List</h2>
                        <form method="POST" action="{{ url('admin/order/order-item/search') }}">
                           @csrf
                           <input type="text" class="form-control" name="search" placeholder="Search here..." 
                           style="width:50%; margin: auto; margin-bottom: 30px" />
                        </form>
                         <div class="table-responsive">
                          <table id="example" class="display table">
                                 <thead>
                                     <tr>
                                         <th>Order Id</th>
                                         <th>Product Name</th>
                                         <th>Product Price</th>
                                         <th>Product Quantity</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($orders as $order)
                                       <tr>
                                           <td>{{ $order->order_id }}</td>
                                           <td>{{ $order->product_name }}</td>
                                           <td>{{ number_format($order->product_price) }}$</td>
                                           <td>{{ $order->product_quantity }}</td>
                                       </tr>
                                     @endforeach
                                 </tbody>
                           </table>  
                           {{ $orders->links('vendor.pagination.bootstrap-4') }}
                         </div>
                    </div>
                </div>
            </div>
            <!--End row-->
             <!--End row-->
      </div>
      <!-- End Wrapper-->
    <!--End main content -->
@endsection



