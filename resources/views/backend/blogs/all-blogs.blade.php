@extends('backend.layouts.app')

@section('title')
    Blog
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
                       
        <!--Start Page Title-->
        <div class="page-title-box">
            <h4 class="page-title">Blog</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li class="active">
                    {{ __('All Blog') }}
                </li>
            </ol>
            <div class="clearfix"></div>
         </div>
          <!--End Page Title--> 
          
            <!--Start row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h2 class="header-title" style="text-align: center; font-size: 25px">{{ __('Blog List') }}</h2>
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
                                         <th>{{ __('Title') }}</th>
                                         <th>{{ __('Actor') }}</th>
                                         <th>{{ __('Status') }}</th>
                                         <th>{{ __('Created at') }}</th>
                                         <th></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($blogs as $blog)
                                       <tr>
                                           <td>{{ $blog->id }}</td>
                                           <td>{{ $blog->title }}</td>
                                           <td>{{ $blog->user_name }}</td>

                                           <?php if($blog->status == '0'){ ?> 
                                            <td><a href="{{url('admin/dashboard/status-update',$blog->id)}}" class="btn btn-success"><i class="ti-check"></i></a></td>
                                           <?php }else{ ?> 
                                            <td><a href="{{url('admin/dashboard/status-update',$blog->id)}}" class="btn btn-danger"><i class="ti-close"></i></a></td>
                                           <?php } ?>

                                           <td>{{ $blog->created_at }}</td>
                                           <td>
                                                <a href='{{ url("admin/dashboard/blog/$blog->id/edit") }}' class="btn btn-success"><i class="fa fa-pencil-square-o" ></i></a>
                                                <a class="btn btn-danger" data-id="{{ $blog->id }}" name="delete" href="javascript:void(0)" onclick="document.getElementById('blog-{{ $blog->id }}').submit()"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <form action="dashboard/blog/delete/{{ $blog->id }}" method="post" id="blog-{{ $blog->id }}">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                           </td>
                                       </tr>
                                     @endforeach
                                 </tbody>
                           </table>  
                           {{ $blogs->links('vendor.pagination.bootstrap-4') }}
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



