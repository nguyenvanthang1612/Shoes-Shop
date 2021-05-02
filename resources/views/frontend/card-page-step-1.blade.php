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
                        <div class="wrap bg-white">
                           
                            <!-- Header -->
                            <div class="list-header text-uppercase">

                                <div class="check hidden-xs hidden-sm">
                                    <div class="checkbox vers-2">
                                        <input type="checkbox" id="checkAll">
                                        <label for="checkAll">
                                            <i class="icofont icofont-check-alt"></i>
                                        </label>
                                    </div>
                                </div>

                                <div class="product">
                                    Product
                                </div>

                                <div class="price hidden-xs hidden-sm">
                                    Price
                                </div>

                                <div class="qnt hidden-xs hidden-sm">
                                    Quantity
                                </div>

                                <div class="total hidden-xs hidden-sm">
                                    Total
                                </div>

                                <div class="rmv hidden-xs hidden-sm">
                                    Remove
                                </div>
                            </div><!-- / Header -->
                            
                            <!-- List body -->
                            <div class="list-body">
                                
                                <!-- Item -->
                                <div class="item">
                                    
                                    <!-- Checkbox -->
                                    <div class="check hidden-xs">
                                        <div class="checkbox vers-2">
                                            <input type="checkbox" id="item-check-1">
                                            <label for="item-check-1">
                                                <i class="icofont icofont-check-alt"></i>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="product">
                                        <img src="images/shop/img-01.jpg" alt="">
                                        
                                        <span class="comp-header st-8 text-uppercase">
                                            T-Shirt
                                            <span>
                                                Men collections
                                            </span>
                                            <span>
                                                fake brand
                                            </span>
                                        </span>
                                    </div>

                                    <div class="price hidden-xs">
                                        <span class="disclam hidden-sm">Sale</span>
                                        <span class="price">
                                            <i class="icofont icofont-cur-dollar"></i>
                                            <span class="prc">
                                                <span>257</span><small>.20</small>
                                            </span>
                                        </span>
                                        <span class="old hidden-xs hidden-sm">
                                            <i class="icofont icofont-cur-dollar"></i>
                                            <span>
                                                557<small>.00</small>
                                            </span>
                                        </span>
                                    </div>

                                    <div class="qnt">
                                        <span>
                                            <span class="minus">
                                                <i class="icofont icofont-minus"></i>
                                            </span>
                                            <span class="input">
                                                <input type="text" value="02">
                                            </span>
                                            <span class="plus">
                                                <i class="icofont icofont-plus"></i>
                                            </span>
                                        </span>
                                    </div>

                                    <div class="total">
                                        <i class="icofont icofont-cur-dollar"></i>
                                        <span>514.40</span>
                                    </div>

                                    <div class="rmv text-center">
                                        <button class="remove-btn">
                                            <i class="icofont icofont-close-line"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Item -->
                                <div class="item">
                                    
                                    <!-- Checkbox -->
                                    <div class="check hidden-xs">
                                        <div class="checkbox vers-2">
                                            <input type="checkbox" id="item-check-2">
                                            <label for="item-check-2">
                                                <i class="icofont icofont-check-alt"></i>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="product">
                                        <img src="images/shop/img-02.jpg" alt="">
                                        
                                        <span class="comp-header st-8 text-uppercase">
                                            T-Shirt
                                            <span>
                                                Men collections
                                            </span>
                                            <span>
                                                fake brand
                                            </span>
                                        </span>
                                    </div>

                                    <div class="price hidden-xs">
                                        <span class="price">
                                            <i class="icofont icofont-cur-dollar"></i>
                                            <span class="prc">
                                                <span>520</span><small>.20</small>
                                            </span>
                                        </span>
                                    </div>

                                    <div class="qnt">
                                        <span>
                                            <span class="minus">
                                                <i class="icofont icofont-minus"></i>
                                            </span>
                                            <span class="input">
                                                <input type="text" value="01">
                                            </span>
                                            <span class="plus">
                                                <i class="icofont icofont-plus"></i>
                                            </span>
                                        </span>
                                    </div>

                                    <div class="total">
                                        <i class="icofont icofont-cur-dollar"></i>
                                        <span>520.20</span>
                                    </div>

                                    <div class="rmv text-center">
                                        <button class="remove-btn">
                                            <i class="icofont icofont-close-line"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Item -->
                                <div class="item">
                                    
                                    <!-- Checkbox -->
                                    <div class="check hidden-xs">
                                        <div class="checkbox vers-2">
                                            <input type="checkbox" id="item-check-3">
                                            <label for="item-check-3">
                                                <i class="icofont icofont-check-alt"></i>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="product">
                                        <img src="images/shop/img-03.jpg" alt="">
                                        
                                        <span class="comp-header st-8 text-uppercase">
                                            T-Shirt
                                            <span>
                                                Men collections
                                            </span>
                                            <span>
                                                fake brand
                                            </span>
                                        </span>
                                    </div>

                                    <div class="price hidden-xs">
                                        <span class="price">
                                            <i class="icofont icofont-cur-dollar"></i>
                                            <span class="prc">
                                                <span>748</span><small>.00</small>
                                            </span>
                                        </span>
                                    </div>

                                    <div class="qnt">
                                        <span>
                                            <span class="minus">
                                                <i class="icofont icofont-minus"></i>
                                            </span>
                                            <span class="input">
                                                <input type="text" value="01">
                                            </span>
                                            <span class="plus">
                                                <i class="icofont icofont-plus"></i>
                                            </span>
                                        </span>
                                    </div>

                                    <div class="total">
                                        <i class="icofont icofont-cur-dollar"></i>
                                        <span>748.00</span>
                                    </div>

                                    <div class="rmv text-center">
                                        <button class="remove-btn">
                                            <i class="icofont icofont-close-line"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Item -->
                                <div class="item">
                                    
                                    <!-- Checkbox -->
                                    <div class="check hidden-xs">
                                        <div class="checkbox vers-2">
                                            <input type="checkbox" id="item-check-4">
                                            <label for="item-check-4">
                                                <i class="icofont icofont-check-alt"></i>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="product">
                                        <img src="images/shop/img-05.jpg" alt="">
                                        
                                        <span class="comp-header st-8 text-uppercase">
                                            T-Shirt
                                            <span>
                                                Men collections
                                            </span>
                                            <span>
                                                fake brand
                                            </span>
                                        </span>
                                    </div>

                                    <div class="price hidden-xs">
                                        <span class="price">
                                            <i class="icofont icofont-cur-dollar"></i>
                                            <span class="prc">
                                                <span>257</span><small>.20</small>
                                            </span>
                                        </span>
                                    </div>

                                    <div class="qnt">
                                        <span>
                                            <span class="minus">
                                                <i class="icofont icofont-minus"></i>
                                            </span>
                                            <span class="input">
                                                <input type="text" value="02">
                                            </span>
                                            <span class="plus">
                                                <i class="icofont icofont-plus"></i>
                                            </span>
                                        </span>
                                    </div>

                                    <div class="total">
                                        <i class="icofont icofont-cur-dollar"></i>
                                        <span>514.40</span>
                                    </div>

                                    <div class="rmv text-center">
                                        <button class="remove-btn">
                                            <i class="icofont icofont-close-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div><!-- / List body -->
                            
                            <!-- Footer -->
                            <div class="list-footer bg-blue">
                                <a href="card-page-step-2.html" class="btn btn-default btn-material">
                                    <i class="icofont icofont-cart-alt"></i>
                                    <span class="body">Make a purchase</span>
                                </a>
                                <a href="#" class="btn btn-text-white">
                                    <span class="body">remove selected</span>
                                </a>
                            </div><!-- / Footer -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT -->
        </div>
@endsection
        

