@extends('frontend.layouts.app');

@section('title')
    Step 2
@endsection

@push('css')
<style>
    .float-block .wrap {
        padding-top: 0;
    }
</style>
@endpush

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
            STEPS
            =============================================== -->
            <div class="row block none-padding-top">
                <div class="col-xs-12">

                    <ul class="steps row">
                        <li class="hidden-xs col-xs-12 col-sm-4 col-md-4 col-lg-3">
                            <div class="icon number bg-blue">
                                1
                            </div>
                            <span>
                                Confirm
                            </span>
                            products list

                            <span class="dir-icon">
                                <i class="icofont icofont-stylish-right"></i>
                            </span>
                        </li>

                        <li class="col-sm-4 col-md-4 col-lg-3">
                            <div class="icon number bg-blue">
                                2
                            </div>
                            <span>
                                Enter
                            </span>
                            your address

                            <span class="dir-icon hidden-xs">
                                <i class="icofont icofont-stylish-right text-yellow"></i>
                            </span>
                        </li>

                        <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                            <div class="icon number bg-grey">
                                3
                            </div>
                            <span>
                                Select
                            </span>
                            payment method

                            <span class="dir-icon hidden-sm hidden-md">
                                <i class="icofont icofont-stylish-right"></i>
                            </span>
                        </li>

                        <li class="hidden-xs col-lg-3 hidden-sm hidden-md">
                            <div class="icon number bg-grey">
                                4
                            </div>
                            <span>
                                Confirm
                            </span>
                            your order
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: STEPS -->


            <!--
            CONTENT
            =============================================== -->
            <div class="row block none-padding-top">

                <div class="col-xs-12 col-md-8 col-lg-9 get-height">
                    <div class="sdw-block">
                        <div class="wrap bg-white">

                            <!-- Authirize form -->
                            <div class="row auth-form">

                                <!-- Header & nav -->
                                <div class="col-md-12">

                                    <!-- Header -->
                                    <h1 class="header text-uppercase">
                                        Authirization
                                        <span>
                                            required
                                        </span>
                                    </h1>

                                </div>

                                <div class="col-md-4">
                                    <!-- Text -->
                                    <span class="text">
                                        Magni labore ratione maiores, laborum quaerat molestiae excepturi. Corporis, necessitatibus earum.
                                    </span>

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

                                <div class="col-md-6 col-md-offset-1">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword2">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                        </div>
                                        <div class="checkbox padding">
                                            <input type="checkbox" id="inputCheckBox2">
                                            <label for="inputCheckBox2">
                                                <span class="checkbox-input">
                                                    <span class="off">off</span>
                                                    <span class="on">on</span>
                                                </span>
                                                remember password
                                            </label>
                                        </div>

                                        <span class="sdw-wrap">
                                            <button type="submit" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">Login</button>
                                            <span class="sdw"></span>
                                        </span>

                                        <ul class="addon-login-btn">
                                            <li>
                                                <a href="#">register</a>
                                            </li>
                                            <li>or</li>
                                            <li>
                                                <a href="#">restore password</a>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!-- / Authirize form -->

                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="panel-group" id="accordion">

                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        <span class="panel-indicator"></span>
                                                        Use addres from your profile
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <form class="form-horizontal">

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label pd-none">Shipping address:</label>
                                                            <div class="col-sm-9">
                                                                <span class="text">
                                                                    12A Questen, Mt Vernon, NY 10550, US
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-sm-offset-3 col-sm-7">
                                                                <a href="#" class="sdw-hover btn btn-material btn-yellow ripple-cont">Accept</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        <span class="panel-indicator"></span>
                                                        Use the new address
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse in">
                                                <div class="panel-body">

                                                    <form class="form-horizontal">

                                                        <!-- Authocompille -->
                                                        <div class="form-group pd-bottom">
                                                            <label for="autocomplete" class="col-sm-2 control-label">Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="autocomplete"
                                                                       placeholder="Enter your address"
                                                                       onFocus="geolocate()">
                                                            </div>
                                                        </div>

                                                        <div class="form-group pd-none">
                                                            <label for="route" class="col-sm-3 control-label text-darkness">Street address</label>
                                                            <div class="col-sm-6">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="route"
                                                                       disabled>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="street_number"
                                                                       disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-group pd-none">
                                                            <label for="locality" class="col-sm-3 control-label text-darkness">City</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="locality"
                                                                       disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-group pd-none">
                                                            <label for="administrative_area_level_1" class="col-sm-3 control-label text-darkness">State</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="administrative_area_level_1"
                                                                       disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-group pd-none">
                                                            <label for="postal_code" class="col-sm-3 control-label text-darkness">Zip code</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="postal_code"
                                                                       disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-group pd-none">
                                                            <label for="country" class="col-sm-3 control-label text-darkness">Country</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="country"
                                                                       disabled>
                                                            </div>
                                                        </div>
                                                        <!-- / Authocompille -->

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

                                                        <div class="form-group">
                                                            <label for="deliveryComp" class="col-sm-3 control-label text-darkness">Select a delivery method</label>
                                                            <div class="col-sm-8">
                                                                <select id="deliveryComp" class="select" data-placeholder="Delivery is not selected"></select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-sm-offset-3 col-sm-8">
                                                                <button type="button" class="btn btn-primary btn-material">
                                                                    <span class="body">Calculate shipping</span>
                                                                    <i class="icon icofont icofont-check-circled"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="form-group padding">
                                                            <label class="col-sm-3 control-label pd-none">Cost delivery:</label>
                                                            <div class="col-sm-9">
                                                                <span class="text">
                                                                    <b>$456</b>.00
                                                                </span>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <div class="col-sm-offset-3 col-sm-8">
                                                                <span class="sdw-wrap">
                                                                    <a href="card-page-step-3.html" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">Go to next step</a>
                                                                    <span class="sdw"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-lg-3 fix-height asside hidden-xs hidden-sm">
                    <div class="product-list float-block">
                        <div class="wrap bg-white">

                                <!-- Asside nav -->
                                <div class="asside-nav bg-grey-lightness hidden-xs">
                                    <div class="header text-uppercase text-white bg-blue">
                                        Category
                                    </div>

                                    <ul class="list-2">
                                        <li>
                                            <span class="head">Number of items:</span>
                                            <span class="sub">09</span>
                                        </li>
                                        <li>
                                            <span class="head">Discount:</span>
                                            <span class="sub">$20.00</span>
                                        </li>
                                        <li>
                                            <span class="head">Total price:</span>
                                            <span class="sub">$2 250.00</span>
                                        </li>
                                    </ul>

                                    <div class="asside-btn text-center">
                                        <a href="#" class="btn btn-primary btn-material">
                                            <span class="body">View order</span>
                                            <i class="icon icofont icofont-check-circled"></i>
                                        </a>
                                    </div>

                                </div><!-- / Asside nav -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT -->

        </div>
@endsection


