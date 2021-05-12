@extends('backend.layouts.app');

@section('title')
    Kid product table
@endsection

{{-- @push('js')
    <script>
        function deleteItem(e)
        {
            const confirmDeletePost = confirm('Are you sure ?')
            if (confirmDeletePost)
            {
                axios.delete(`admin/categories/${e.getAttribute('data-id')}`)
                .then(res => location.reload())
                .catch(err => console.err(err))
            }
        }
    </script>
@endpush --}}

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
              
        <!--Start Page Title-->
         <div class="page-title-box">
              <h4 class="page-title">Data Table</h4>
              <ol class="breadcrumb">
                  <li>
                      <a href="#">Dashboard</a>
                  </li>
                  <li>
                      <a href="#">Table</a>
                  </li>
                  <li class="active">
                      Data Table
                  </li>
              </ol>
              <div class="clearfix"></div>
           </div>
            <!--End Page Title-->          
         
         
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                     <div class="white-box">
                         <h2 class="header-title">Basic example</h2>
                          <div class="table-responsive">
                           <table id="example" class="display table">
                                  <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Created at</th>
                                          <th>Updated at</th>
                                          <th></th>
                                      </tr>
                                  </thead>
                                  <tfoot>
                                      <tr>
                                          <th>Id</th>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Created at</th>
                                          <th>Updated at</th>
                                          <th></th>
                                      </tr>
                                  </tfoot>
                                  <tbody>
                                      @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->desc }}</td>
                                            <td>{{ $category->created_at }}</td>
                                            <td>{{ $category->updated_at }}</td>
                                            <td>
                                                <a href='{{ url("admin/categories/$category->id/edit") }}' class="btn btn-success">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteItem(this)" data-id="{{ $category->id }}">Delete</a>
                                                
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
      </div>
      <!-- End Wrapper-->
    <!--End main content -->
@endsection

