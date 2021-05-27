@extends('frontend.layouts.app');

@section('title')
    Step 1
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
            STEPS
            =============================================== -->
            <div class="row block none-padding-top">
                <div class="col-xs-12">

                    <ul class="steps row">
                        <li class="active col-xs-12 col-sm-4 col-md-4 col-lg-3">
                            <div class="icon number bg-blue">
                                1
                            </div>
                            <span>
                                Confirm
                            </span>
                            products list

                            <span class="dir-icon hidden-xs">
                                <i class="icofont icofont-stylish-right text-yellow"></i>
                            </span>
                        </li>

                        <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                            <div class="icon number bg-grey">
                                2
                            </div>
                            <span>
                                Enter
                            </span>
                            your address

                            <span class="dir-icon">
                                <i class="icofont icofont-stylish-right"></i>
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
                <div class="col-xs-12">

                    <div class="product-list">
                        <div class="wrap bg-white" id="list-cart">
                   


                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT -->
        </div>
@endsection


