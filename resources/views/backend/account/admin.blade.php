@extends('backend.layouts.app')

@section('title')
    {{ __('Admin Management') }}
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
              
        <!--Start Page Title-->
         <div class="page-title-box">
              <h4 class="page-title">{{ __('Account') }}</h4>
              <ol class="breadcrumb">
                  <li>
                      <a href="{{ route('admin.index') }}">{{ __('Dashboard') }}</a>
                  </li>
                  <li>
                      <a href="#">{{ __('Account') }}</a>
                  </li>
                  <li class="active">
                      {{ __('Admin Management') }}
                  </li>
              </ol>
              <div class="clearfix"></div>
           </div>
            <!--End Page Title-->          
         
         
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                     <div class="white-box">
                        <h2 class="header-title" style="text-align: center; font-size: 25px">{{ __('Admin Management') }}</h2>
                        <form method="POST" action="{{ url('admin/account/search/admin') }}">
                           @csrf
                           <input type="text" class="form-control" name="search" placeholder="{{ __('Search here') }}..." 
                           style="width:50%; margin: auto; margin-bottom: 30px" />
                        </form>
                          <div class="table-responsive">
                           <table class="display table">
                                  <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>{{ __('Name') }}</th>
                                          <th>{{ __('Email') }}</th>
                                          <th>{{ __('Telephone') }}</th>
                                          <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($accounts as $account)
                                        <tr>
                                            <td>{{ $account->id }}</td>
                                            <td>{{ $account->user_name }}</td>
                                            <td>{{ $account->email }}</td>
                                            <td>{{ $account->telephone }}</td>
                                            <td>
                                                <a class="btn btn-danger" data-id="{{ $account->id }}" name="delete" href="javascript:void(0)" 
                                                    onclick="document.getElementById('account-{{ $account->id }}').submit()"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <form action="
                                                delete/{{ $account->id }}" method="post" id="account-{{ $account->id }}">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                      @endforeach
                                  </tbody>
                            </table>  
                            {{ $accounts->links('vendor.pagination.bootstrap-4') }}
                          </div>
                     </div>
                 </div>
             </div>
             <!--End row-->
      </div>
      <!-- End Wrapper-->
    <!--End main content -->
@endsection

