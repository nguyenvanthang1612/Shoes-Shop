@extends('frontend.layouts.app')

@section('title')
    Edit
@endsection

@section('content')
            <!--
        BREADCRUMBS
        =============================================== -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <ol class="breadcrumb bg-blue">
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">Blog category</a></li>
                        <li class="active">This item</li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- END: BREADCRUMBS -->

        <div class="container">

            <!--
            CONTENT
            =============================================== -->
            <div class="row block none-padding-top">

                <div class="col-xs-12">
                    <div class="sdw-block">
                        <div class="wrap bg-white">

                            <!-- Authirize form -->
                            <div class="row head-block">

                                <!-- Header & nav -->
                                <div class="col-md-12">

                                    <!-- Header -->
                                    <h1 class="header text-uppercase">
                                        New user
                                        <span>
                                            registration
                                        </span>
                                    </h1>
                                </div>
                            </div>
                            <!-- Authirize form -->

                            <div class="row ">

                                <!-- Header & nav -->
                                <div class="col-md-3">

                                    <!-- Text -->
                                    <p class="text">
                                        Magni labore ratione maiores, laborum quaerat molestiae excepturi. Corporis, necessitatibus earum.
                                    </p>

                                    <!-- Nav -->
                                    <div class="asside-nav no-bg">
                                        <ul class="nav-vrt border">
                                            <li class="active">
                                                <a href="#" class="btn-material">Privacy policy</a>
                                            </li>

                                            <li>
                                                <a href="#" class="btn-material">Terms and conditions</a>
                                            </li>

                                            <li>
                                                <a href="#" class="btn-material">FAQ</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                    <div class="col-md-9">
                    <form method="POST" action="{{ url('user/address-edit-page', [$userAddressData->id]) }}">
                        @method('PUT')
                        @csrf
                        <div class="panel panel-default">
                                            <div class="panel-heading" id="addressSet">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        <span class="panel-indicator"></span>
                                                        Address Edit
                                                    </a>
                                                </h4>
                                            </div>
                                             
                                                <div class="panel-body">
                                                        <div class="form-group pd-none">
                                                            <label for="route" class="col-sm-3 control-label text-darkness"> Strees Address</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="address" name="address"  value="{{$userAddressData->address}}"
                                                                       >
                                                            </div>
                                                        </div>

                                                        <div class="form-group pd-none">
                                                            <label for="locality" class="col-sm-3 control-label text-darkness">City</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="city" name="city"  value="{{$userAddressData->city}}"
                                                                       >
                                                            </div>
                                                        </div>
                                                        <div class="form-group pd-none">
                                                            <label for="country" class="col-sm-3 control-label text-darkness">Country</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="country" name="country"  value="{{$userAddressData->country}}"
                                                                       >
                                                            </div>
                                                        </div>

                                                        <div class="form-group pd-none">
                                                            <label for="telephone" class="col-sm-3 control-label text-darkness">Telephone</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="telephone" name="telephone"  value="{{$userAddressData->telephone}}"
                                                                       >
                                                            </div>
                                                        </div>

                                                        <div class="form-group pd-sm">
                                                            <div class="col-sm-offset-3 col-sm-7">
                                                                <div class="checkbox padding">
                                                                    <input type="checkbox" id="chackAddress" checked>
                                                                    <label for="chackAddress">
                                                                        <span class="checkbox-input">
                                                                            <span class="off">yes</span>
                                                                            <span class="on">no</span>
                                                                        </span>
                                                                        this delively addres is valid
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-sm-offset-3 col-sm-7">
                                                            <button type="submit" class="sdw-hover btn btn-material btn-yellow ripple-cont">
                                                                    UPDATE
                                                            </button>
                                                        </div>
                                                </div>

                                        </div>
                        </form>
                    </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- END: CONTENT -->

        </div>

@endsection


