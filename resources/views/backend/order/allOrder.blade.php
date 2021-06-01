@extends('backend.layouts.app')

@section('title')
    All order table
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
                    All order
                </li>
            </ol>
            <div class="clearfix"></div>
         </div>
          <!--End Page Title--> 
          
            <!--Start row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h2 class="header-title" style="text-align: center; font-size: 25px">Order List</h2>
                        <form method="POST" action="{{ url('admin/product/search') }}">
                           @csrf
                           <input type="text" class="form-control" name="search" placeholder="Search here..." 
                           style="width:50%; margin: auto; margin-bottom: 30px" />
                        </form>
                         <div class="table-responsive">
                          <table id="example" class="display table">
                                 <thead>
                                     <tr>
                                         <th>Id</th>
                                         <th>Email</th>
                                         <th>Total Price</th>
                                         <th>Buy at</th>
                                         <th></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($orders as $order)
                                       <tr>
                                           <td>{{ $order->id }}</td>
                                           <td>{{ $order->email }}</td>
                                           <td>{{ $order->total_price }}</td>
                                           <td>{{ $order->buy_at }}</td>
                                           <td>
                                               <a href="#" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                           </td>
                                       </tr>
                                     @endforeach
                                 </tbody>
                           </table>  
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



