@extends('backend.layouts.app')

@section('title')
    {{ __('Order') }}
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
                       
        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">{{ __('Order') }}</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a>
                </li>
                <li>
                    <a href="#">{{ __('Order') }}</a>
                </li>
                <li class="active">
                    {{ __('All Order') }}
                </li>
            </ol>
            <div class="clearfix"></div>
         </div>
          <!--End Page Title--> 
          
            <!--Start row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h2 class="header-title" style="text-align: center; font-size: 25px">{{ __('Order List') }}</h2>
                        <form method="POST" action="{{ url('admin/order/search') }}">
                           @csrf
                           <input type="text" class="form-control" name="search" placeholder="{{ __('Search here') }}..." 
                           style="width:50%; margin: auto; margin-bottom: 30px" />
                        </form>
                         <div class="table-responsive">
                          <table class="display table">
                                 <thead>
                                     <tr>
                                         <th>Id</th>
                                         <th>{{ __('Full Name') }}</th>
                                         <th>{{ __('Email') }}</th>
                                         <th>{{ __('Telephone') }}</th>
                                         <th>{{ __('Total Price') }}</th>
                                         <th>{{ __('Buy at') }}</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($orders as $order)
                                       <tr>
                                           <td>{{ $order->id }}</td>
                                           <td>{{ $order->full_name }}</td>
                                           <td>{{ $order->email }}</td>
                                           <td>{{ $order->telephone }}</td>
                                           <td>{{ number_format($order->total_price) }}$</td>
                                           <td>{{ $order->buy_at }}</td>
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



