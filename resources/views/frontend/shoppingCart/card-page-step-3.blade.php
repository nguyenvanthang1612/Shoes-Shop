@extends('frontend.layouts.app');

@section('title')
    Step 3
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

            @include('frontend.shoppingCart._step', [
                'step' => 3
            ])

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
                                        Do you have a
                                        <span>
                                            promotional code?
                                        </span>
                                    </h1>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter your promocode">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="sdw-hover btn btn-material btn-primary ripple-cont">
                                        <span class="body">Activate promo code </span>
                                        <i class="icon icofont icofont-check-circled"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- / Authirize form -->

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="panel-group" id="accordion">

                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#bankTransrerColl">
                                                        <span class="panel-indicator"></span>
                                                        Direct bank transfer
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="bankTransrerColl" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <form class="form-horizontal">
                                                        <div class="form-group pd-none">
                                                            <label for="bankTransfer" class="col-sm-3 control-label text-darkness">Your bank</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="bankTransfer">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-sm-offset-3 col-sm-7">
                                                                <a href="#" class="sdw-hover btn btn-material btn-yellow ripple-cont">Next</a>
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
                                                        Credit card payment
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse in">
                                                <div class="panel-body">

                                                    <div class="col-xs-2">

                                                        <div class="form-group pd-none">
                                                            <div class="checkbox vers-2 pd-none">
                                                                <input type="radio" name="group1" id="item-check-1">
                                                                <label for="item-check-1">
                                                                    <i class="icofont icofont-check-alt"></i>
                                                                    <span class="text-icon icofont icofont-american-express"></span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group pd-none">
                                                            <div class="checkbox vers-2 pd-none">
                                                                <input type="radio" name="group1" id="item-check-2">
                                                                <label for="item-check-2">
                                                                    <i class="icofont icofont-check-alt"></i>
                                                                    <span class="text-icon icofont icofont-visa"></span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group pd-none">
                                                            <div class="checkbox vers-2 pd-none">
                                                                <input type="radio" name="group1" id="item-check-3">
                                                                <label for="item-check-3">
                                                                    <i class="icofont icofont-check-alt"></i>
                                                                    <span class="text-icon icofont icofont-mastercard"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-10 col-sm-5">
                                                        <div class="form-group">
                                                            <label for="cardHolder">Card holder first name</label>
                                                            <input type="password" class="form-control" id="cardHolder">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-10 col-sm-5">
                                                        <div class="form-group">
                                                            <label for="cardHolderLast">Card holder last name</label>
                                                            <input type="password" class="form-control" id="cardHolderLast">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-10 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="cardNum">Card number</label>
                                                            <input type="password" class="form-control" id="cardNum">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-5 col-sm-2">
                                                        <div class="form-group">
                                                            <label for="expiryDate">Expiry Date</label>
                                                            <input type="password" class="form-control" id="expiryDate">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-5 col-sm-2">
                                                        <div class="form-group">
                                                            <label for="cvc">CVV/CVC</label>
                                                            <input type="password" class="form-control" id="cvc">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-offset-2 col-sm-8">
                                                                <button type="button" class="btn btn-primary btn-material">
                                                                    <span class="body">Save method</span>
                                                                    <i class="icon icofont icofont-check-circled"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingPayPall">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#payPall">
                                                        <span class="panel-indicator"></span>
                                                        PayPal account
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="payPall" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <form class="form-horizontal">
                                                        <div class="form-group pd-none">
                                                            <label for="PayPal" class="col-sm-3 control-label text-darkness">PayPal account</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="PayPal">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-sm-offset-3 col-sm-7">
                                                                <a href="#" class="sdw-hover btn btn-material btn-yellow ripple-cont">Next</a>
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


