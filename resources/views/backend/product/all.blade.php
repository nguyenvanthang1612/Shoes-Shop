@extends('backend.layouts.app')

@section('title')
    All product table
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
                       
        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Product</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Product</a>
                </li>
                <li class="active">
                    All Collection
                </li>
            </ol>
            <div class="clearfix"></div>
         </div>
          <!--End Page Title--> 
          
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                     <div class="white-box">
                         <h2 class="header-title" style="text-align: center; font-size: 25px">All Collection</h2>
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
                                          <th>Name</th>
                                          <th>Category Name</th>
                                          <th>SKU</th>
                                          <th>size</th>
                                          <th>brand</th>
                                          <th>image</th>
                                          <th>quantity</th>
                                          <th>price</th>
                                          <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                     @foreach ($products as $product)
                                         <tr>
                                             <td>{{ $product->id }}</td>
                                             <td>{{ $product->name }}</td>
                                             <td>{{ $product->name_category }}</td>
                                             <td>{{ $product->SKU }}</td>
                                             <td>{{ $product->size }}</td>
                                             <td>{{ $product->brand }}</td>
                                             <td><img style="width: 40px; height: 40px" src="{{ asset('storage/backend/product/'.$product->img) }}" ></td>
                                             <td>{{ $product->quantity }}</td>
                                             <td>{{ number_format($product->price) }}$</td>
                                             <td>
                                                <a href='{{ url("admin/product/$product->id/edit") }}' class="btn btn-success"><i class="fa fa-pencil-square-o" ></i></a>
                                                <a class="btn btn-danger" data-id="{{ $product->id }}" name="delete" href="javascript:void(0)" onclick="document.getElementById('product-{{ $product->id }}').submit()"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <form action="product/delete/{{ $product->id }}" method="post" id="product-{{ $product->id }}">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </td>
                                         </tr>
                                     @endforeach
                                  </tbody>
                            </table>  
                            {{ $products->links('vendor.pagination.bootstrap-4') }}
                          </div>
                     </div>
                 </div>
             </div>
             <!--End row-->
      </div>
      <!-- End Wrapper-->
    <!--End main content -->
@endsection



