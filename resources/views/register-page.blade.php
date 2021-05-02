@extends('layouts.app');

@section('title')
    Register
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
                                   
                                    <div class="panel-group" id="accordion">
                                       
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="profileInfo">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#bankTransrerColl">
                                                        <span class="panel-indicator"></span>
                                                        Profile info
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="bankTransrerColl" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <form class="form-horizontal">
                                                        
                                                        <div class="form-group pd-none">
                                                            <label for="frName" class="col-sm-3 control-label text-darkness">Your first name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="frName">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group pd-none">
                                                            <label for="lnName" class="col-sm-3 control-label text-darkness">Your last name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="lnName">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group pd-none">
                                                            <label for="slLogin" class="col-sm-3 control-label text-darkness">Select login</label>
                                                            <div class="col-sm-8">
                                                                <input type="text"
                                                                       class="form-control"
                                                                       id="slLogin">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group pd-none">
                                                            <label for="email" class="col-sm-3 control-label text-darkness">Enter your email</label>
                                                            <div class="col-sm-8">
                                                                <input type="email"
                                                                       class="form-control"
                                                                       id="email">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group pd-none">
                                                            <label for="password" class="col-sm-3 control-label text-darkness">Enter your password</label>
                                                            <div class="col-sm-8">
                                                                <input type="password"
                                                                       class="form-control"
                                                                       id="password">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="addressSet">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        <span class="panel-indicator"></span>
                                                        Address settings
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
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

                                                    </form>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#creditCard">
                                                        <span class="panel-indicator"></span>
                                                        Credit card payment
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="creditCard" class="panel-collapse collapse">
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
                                            <div class="panel-heading" id="headingOne">
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
                
            </div>
            <!-- END: CONTENT -->
            
        </div>
        
@endsection
        

