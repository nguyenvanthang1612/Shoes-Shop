@extends('layouts.app');

@section('title')
    Shop list
@endsection
            
@section('content')
            <!-- 
        BLOCK POPULAR ON SHOP
        =============================================== -->
        <div class="container-fluid block">
            <div class="row">
                
                    <div class="container">                        
                        <div class="row">
                            
                            <!-- Item list -->
                            <div class="col-md-8 col-lg-9 shop-items-set">
                                
                                <!-- Paginations -->
                                <div class="row pagination-block hidden-xs">
                                    <div class="col-xs-12">
                                        
                                        <div class="wrap">
                                           
                                            <!-- Pagination -->
                                            <ul class="pagination">

                                                <li>
                                                    <a href="#">
                                                        <span><i class="icofont icofont-rounded-left"></i></span>
                                                    </a>
                                                </li>

                                                <li><a href="#">01</a></li>
                                                <li class="active"><a href="#">02</a></li>
                                                <li><a href="#">03</a></li>
                                                <li><a href="#">04</a></li>
                                                <li><a href="#">05</a></li>

                                                <li>
                                                    <a href="#">
                                                        <span><i class="icofont icofont-rounded-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>

                                            <!-- Switch style on shop item -->
                                            <ul class="swither active">
                                                <li class="cols">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </li>
                                                <li class="rows">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <!-- Item list -->
                                <div class="row item-wrapper">
                                    
                                    <!-- Shop item 1 / timer -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw timer"
                                         data-timer-date="2018, 2, 5, 0, 0, 0">

                                        <div class="wrap">

                                            <!-- Image & Caption -->
                                            <div class="body">

                                                <!-- Header -->
                                                <div class="comp-header st-4 text-uppercase">

                                                    T-shirt
                                                    <span>
                                                        fake Brand
                                                    </span>

                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            24 members rate it
                                                        </div>
                                                    </div>

                                                    <!-- Badge -->
                                                    <span class="sale-badge item-badge text-uppercase bg-green">
                                                        New
                                                    </span>
                                                </div>

                                                <!-- Image -->
                                                <div class="image">
                                                    <img class="hover" src="images/shop/img-01-1.jpg" alt="">
                                                    <img class="main" src="images/shop/img-01.jpg" alt="">
                                                </div>

                                                <!-- Caption -->
                                                <div class="caption">
                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            24 members
                                                            <span>like it</span>
                                                        </div>
                                                    </div>

                                                    <!-- Timer -->
                                                    <div class="timer-body">
                                                        <span class="sale text-red">Sale</span>
                                                        <span class="tdtimer-d"></span>d 
                                                        <span class="tdtimer-h"></span>h 
                                                        <span class="tdtimer-m"></span>m 
                                                        <span class="tdtimer-s"></span>s 
                                                    </div>

                                                    <!-- Features list -->
                                                    <ul class="features">
                                                        <li>
                                                            <i class="icofont icofont-shield"></i>
                                                            <span>24 days. Money Back Guarantee</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-ship"></i>
                                                            <span>Free shipping</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-hand"></i>
                                                            <span>Free help and setup</span>
                                                        </li>
                                                    </ul>

                                                    <!-- Text -->
                                                    <p class="text">
                                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Buy btn & more link -->
                                            <div class="info">

                                                <!-- Buy btn -->
                                                <a href="#" class="btn-material btn-price">

                                                    <!-- Price -->
                                                    <span class="price">

                                                        <!-- Currency -->
                                                        <span class="curr">
                                                            $
                                                        </span>

                                                        <!-- Sale price -->
                                                        <span class="sale">
                                                            <span>234<small>.00</small></span>
                                                        </span>

                                                        <!-- Price -->
                                                        <span class="price">
                                                            175<small>.50</small>
                                                        </span>
                                                    </span>

                                                    <!-- Quantity -->
                                                    <span class="qnt-select">
                                                        <span class="plus">
                                                            <i class="icofont icofont-plus"></i>
                                                        </span>
                                                        <span class="view-sum">
                                                            01
                                                        </span>
                                                        <span class="minus">
                                                            <i class="icofont icofont-minus"></i>
                                                        </span>
                                                    </span>

                                                    <!-- Icon card -->
                                                    <span class="icon-card">
                                                        <i class="icofont icofont-cart-alt"></i>
                                                    </span>
                                                </a>

                                                <!-- Favorite added -->
                                                <a href="#" class="favorite-link active">
                                                    <i class="icofont icofont-star"></i>
                                                    to favorite
                                                </a>

                                                <!-- More link -->
                                                <a href="#" class="more-link">More info</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Shop item -->

                                    <!-- Shop item 2 -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

                                        <div class="wrap">

                                            <!-- Image & Caption -->
                                            <div class="body">

                                                <!-- Header -->
                                                <div class="comp-header st-4 text-uppercase">

                                                    Jacket
                                                    <span>
                                                        fake Brand
                                                    </span>

                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            124 members rate it
                                                        </div>
                                                    </div>

                                                    <!-- Badge -->
                                                    <!--span class="sale-badge item-badge text-uppercase bg-green">
                                                        New
                                                    </span-->
                                                </div>

                                                <!-- Image -->
                                                <div class="image">
                                                    <img class="main" src="images/shop/img-02.jpg" alt="">
                                                </div>

                                                <!-- Caption -->
                                                <div class="caption">
                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            124 members
                                                            <span>like it</span>
                                                        </div>
                                                    </div>

                                                    <!-- Timer -->
                                                    <div class="timer-body">
                                                        <span class="sale text-red">Sale</span>
                                                        <span class="tdtimer-d"></span>d 
                                                        <span class="tdtimer-h"></span>h 
                                                        <span class="tdtimer-m"></span>m 
                                                        <span class="tdtimer-s"></span>s 
                                                    </div>

                                                    <!-- Features list -->
                                                    <ul class="features">
                                                        <li>
                                                            <i class="icofont icofont-shield"></i>
                                                            <span>24 days. Money Back Guarantee</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-ship"></i>
                                                            <span>Free shipping</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-hand"></i>
                                                            <span>Free help and setup</span>
                                                        </li>
                                                    </ul>

                                                    <!-- Text -->
                                                    <p class="text">
                                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Buy btn & more link -->
                                            <div class="info">

                                                <!-- Buy btn -->
                                                <a href="#" class="btn-material btn-price">

                                                    <!-- Price -->
                                                    <span class="price">

                                                        <!-- Currency -->
                                                        <span class="curr">
                                                            $
                                                        </span>

                                                        <!-- Sale price
                                                        <span class="sale">
                                                            <span>234<small>.00</small></span>
                                                        </span> -->

                                                        <!-- Price -->
                                                        <span class="price">
                                                            234<small>.00</small>
                                                        </span>
                                                    </span>

                                                    <!-- Quantity -->
                                                    <span class="qnt-select">
                                                        <span class="plus">
                                                            <i class="icofont icofont-plus"></i>
                                                        </span>
                                                        <span class="view-sum">
                                                            01
                                                        </span>
                                                        <span class="minus">
                                                            <i class="icofont icofont-minus"></i>
                                                        </span>
                                                    </span>

                                                    <!-- Icon card -->
                                                    <span class="icon-card">
                                                        <i class="icofont icofont-cart-alt"></i>
                                                    </span>
                                                </a>

                                                <!-- Favorite added -->
                                                <a href="#" class="favorite-link">
                                                    <i class="icofont icofont-star"></i>
                                                    to favorite
                                                </a>

                                                <!-- More link -->
                                                <a href="#" class="more-link">More info</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Shop item -->

                                    <!-- Shop item 3 -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

                                        <div class="wrap">

                                            <!-- Image & Caption -->
                                            <div class="body">

                                                <!-- Header -->
                                                <div class="comp-header st-4 text-uppercase">

                                                    Grey shoes
                                                    <span>
                                                        fake Brand
                                                    </span>

                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            24 members rate it
                                                        </div>
                                                    </div>

                                                    <!-- Badge
                                                    <span class="sale-badge item-badge text-uppercase bg-green">
                                                        New
                                                    </span> -->
                                                </div>

                                                <!-- Image -->
                                                <div class="image">
                                                    <img class="hover" src="images/shop/img-08-1.jpg" alt="">
                                                    <img class="main" src="images/shop/img-08.jpg" alt="">
                                                </div>

                                                <!-- Caption -->
                                                <div class="caption">
                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            24 members
                                                            <span>like it</span>
                                                        </div>
                                                    </div>

                                                    <!-- Timer -->
                                                    <div class="timer-body">
                                                        <span class="sale text-red">Sale</span>
                                                        <span class="tdtimer-d"></span>d 
                                                        <span class="tdtimer-h"></span>h 
                                                        <span class="tdtimer-m"></span>m 
                                                        <span class="tdtimer-s"></span>s 
                                                    </div>

                                                    <!-- Features list -->
                                                    <ul class="features">
                                                        <li>
                                                            <i class="icofont icofont-shield"></i>
                                                            <span>24 days. Money Back Guarantee</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-ship"></i>
                                                            <span>Free shipping</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-hand"></i>
                                                            <span>Free help and setup</span>
                                                        </li>
                                                    </ul>

                                                    <!-- Text -->
                                                    <p class="text">
                                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Buy btn & more link -->
                                            <div class="info">

                                                <!-- Buy btn -->
                                                <a href="#" class="btn-material btn-price">

                                                    <!-- Price -->
                                                    <span class="price">

                                                        <!-- Currency -->
                                                        <span class="curr">
                                                            $
                                                        </span>

                                                        <!-- Sale price
                                                        <span class="sale">
                                                            <span>234<small>.00</small></span>
                                                        </span> -->

                                                        <!-- Price -->
                                                        <span class="price">
                                                            275<small>.50</small>
                                                        </span>
                                                    </span>

                                                    <!-- Quantity -->
                                                    <span class="qnt-select">
                                                        <span class="plus">
                                                            <i class="icofont icofont-plus"></i>
                                                        </span>
                                                        <span class="view-sum">
                                                            01
                                                        </span>
                                                        <span class="minus">
                                                            <i class="icofont icofont-minus"></i>
                                                        </span>
                                                    </span>

                                                    <!-- Icon card -->
                                                    <span class="icon-card">
                                                        <i class="icofont icofont-cart-alt"></i>
                                                    </span>
                                                </a>

                                                <!-- Favorite added -->
                                                <a href="#" class="favorite-link">
                                                    <i class="icofont icofont-star"></i>
                                                    to favorite
                                                </a>

                                                <!-- More link -->
                                                <a href="#" class="more-link">More info</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Shop item -->

                                    <!-- Shop item 4 -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

                                        <div class="wrap">

                                            <!-- Image & Caption -->
                                            <div class="body">

                                                <!-- Header -->
                                                <div class="comp-header st-4 text-uppercase">

                                                    Food President
                                                    <span>
                                                        fake Brand
                                                    </span>

                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            24 members rate it
                                                        </div>
                                                    </div>

                                                    <!-- Badge
                                                    <span class="sale-badge item-badge text-uppercase bg-green">
                                                        New
                                                    </span> -->
                                                </div>

                                                <!-- Image -->
                                                <div class="image">
                                                    <img class="main" src="images/shop/img-09.jpg" alt="">
                                                </div>

                                                <!-- Caption -->
                                                <div class="caption">
                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            24 members
                                                            <span>like it</span>
                                                        </div>
                                                    </div>

                                                    <!-- Timer -->
                                                    <div class="timer-body">
                                                        <span class="sale text-red">Sale</span>
                                                        <span class="tdtimer-d"></span>d 
                                                        <span class="tdtimer-h"></span>h 
                                                        <span class="tdtimer-m"></span>m 
                                                        <span class="tdtimer-s"></span>s 
                                                    </div>

                                                    <!-- Features list -->
                                                    <ul class="features">
                                                        <li>
                                                            <i class="icofont icofont-shield"></i>
                                                            <span>24 days. Money Back Guarantee</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-ship"></i>
                                                            <span>Free shipping</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-hand"></i>
                                                            <span>Free help and setup</span>
                                                        </li>
                                                    </ul>

                                                    <!-- Text -->
                                                    <p class="text">
                                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Buy btn & more link -->
                                            <div class="info">

                                                <!-- Buy btn -->
                                                <a href="#" class="btn-material btn-price">

                                                    <!-- Price -->
                                                    <span class="price">

                                                        <!-- Currency -->
                                                        <span class="curr">
                                                            $
                                                        </span>

                                                        <!-- Sale price
                                                        <span class="sale">
                                                            <span>534<small>.00</small></span>
                                                        </span> -->

                                                        <!-- Price -->
                                                        <span class="price">
                                                            575<small>.50</small>
                                                        </span>
                                                    </span>

                                                    <!-- Quantity -->
                                                    <span class="qnt-select">
                                                        <span class="plus">
                                                            <i class="icofont icofont-plus"></i>
                                                        </span>
                                                        <span class="view-sum">
                                                            01
                                                        </span>
                                                        <span class="minus">
                                                            <i class="icofont icofont-minus"></i>
                                                        </span>
                                                    </span>

                                                    <!-- Icon card -->
                                                    <span class="icon-card">
                                                        <i class="icofont icofont-cart-alt"></i>
                                                    </span>
                                                </a>

                                                <!-- Favorite added -->
                                                <a href="#" class="favorite-link">
                                                    <i class="icofont icofont-star"></i>
                                                    to favorite
                                                </a>

                                                <!-- More link -->
                                                <a href="#" class="more-link">More info</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Shop item -->

                                    <!-- Shop item 5 -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

                                        <div class="wrap">

                                            <!-- Image & Caption -->
                                            <div class="body">

                                                <!-- Header -->
                                                <div class="comp-header st-4 text-uppercase">

                                                    Shoes for walking
                                                    <span>
                                                        fake Brand
                                                    </span>

                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            24 members rate it
                                                        </div>
                                                    </div>

                                                    <!-- Badge
                                                    <span class="sale-badge item-badge text-uppercase bg-green">
                                                        New
                                                    </span> -->
                                                </div>

                                                <!-- Image -->
                                                <div class="image">
                                                    <img class="main" src="images/shop/img-10.jpg" alt="">
                                                </div>

                                                <!-- Caption -->
                                                <div class="caption">
                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li class="active">
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            24 members
                                                            <span>like it</span>
                                                        </div>
                                                    </div>

                                                    <!-- Timer -->
                                                    <div class="timer-body">
                                                        <span class="sale text-red">Sale</span>
                                                        <span class="tdtimer-d"></span>d 
                                                        <span class="tdtimer-h"></span>h 
                                                        <span class="tdtimer-m"></span>m 
                                                        <span class="tdtimer-s"></span>s 
                                                    </div>

                                                    <!-- Features list -->
                                                    <ul class="features">
                                                        <li>
                                                            <i class="icofont icofont-shield"></i>
                                                            <span>24 days. Money Back Guarantee</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-ship"></i>
                                                            <span>Free shipping</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-hand"></i>
                                                            <span>Free help and setup</span>
                                                        </li>
                                                    </ul>

                                                    <!-- Text -->
                                                    <p class="text">
                                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Buy btn & more link -->
                                            <div class="info">

                                                <!-- Buy btn -->
                                                <a href="#" class="btn-material btn-price">

                                                    <!-- Price -->
                                                    <span class="price">

                                                        <!-- Currency -->
                                                        <span class="curr">
                                                            $
                                                        </span>

                                                        <!-- Sale price
                                                        <span class="sale">
                                                            <span>234<small>.00</small></span>
                                                        </span> -->

                                                        <!-- Price -->
                                                        <span class="price">
                                                            175<small>.50</small>
                                                        </span>
                                                    </span>

                                                    <!-- Quantity -->
                                                    <span class="qnt-select">
                                                        <span class="plus">
                                                            <i class="icofont icofont-plus"></i>
                                                        </span>
                                                        <span class="view-sum">
                                                            01
                                                        </span>
                                                        <span class="minus">
                                                            <i class="icofont icofont-minus"></i>
                                                        </span>
                                                    </span>

                                                    <!-- Icon card -->
                                                    <span class="icon-card">
                                                        <i class="icofont icofont-cart-alt"></i>
                                                    </span>
                                                </a>

                                                <!-- Favorite added -->
                                                <a href="#" class="favorite-link active">
                                                    <i class="icofont icofont-star"></i>
                                                    to favorite
                                                </a>

                                                <!-- More link -->
                                                <a href="#" class="more-link">More info</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Shop item -->

                                    <!-- Shop item 6 -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

                                        <div class="wrap">

                                            <!-- Image & Caption -->
                                            <div class="body">

                                                <!-- Header -->
                                                <div class="comp-header st-4 text-uppercase">

                                                    Men's shorts
                                                    <span>
                                                        fake Brand
                                                    </span>

                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            not yet rated
                                                        </div>
                                                    </div>

                                                    <!-- Badge
                                                    <span class="sale-badge item-badge text-uppercase bg-green">
                                                        New
                                                    </span> -->
                                                </div>

                                                <!-- Image -->
                                                <div class="image">
                                                    <img class="main" src="images/shop/img-11.jpg" alt="">
                                                </div>

                                                <!-- Caption -->
                                                <div class="caption">
                                                    <!-- Rate -->
                                                    <div class="rate">

                                                        <ul class="stars">
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont icofont-star"></i>
                                                            </li>
                                                        </ul>

                                                        <div class="rate-info">
                                                            not yet rated
                                                        </div>
                                                    </div>

                                                    <!-- Timer -->
                                                    <div class="timer-body">
                                                        <span class="sale text-red">Sale</span>
                                                        <span class="tdtimer-d"></span>d 
                                                        <span class="tdtimer-h"></span>h 
                                                        <span class="tdtimer-m"></span>m 
                                                        <span class="tdtimer-s"></span>s 
                                                    </div>

                                                    <!-- Features list -->
                                                    <ul class="features">
                                                        <li>
                                                            <i class="icofont icofont-shield"></i>
                                                            <span>24 days. Money Back Guarantee</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-ship"></i>
                                                            <span>Free shipping</span>
                                                        </li>
                                                        <li>
                                                            <i class="icofont icofont-hand"></i>
                                                            <span>Free help and setup</span>
                                                        </li>
                                                    </ul>

                                                    <!-- Text -->
                                                    <p class="text">
                                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Buy btn & more link -->
                                            <div class="info">

                                                <!-- Buy btn -->
                                                <a href="#" class="btn-material btn-price">

                                                    <!-- Price -->
                                                    <span class="price">

                                                        <!-- Currency -->
                                                        <span class="curr">
                                                            $
                                                        </span>

                                                        <!-- Sale price
                                                        <span class="sale">
                                                            <span>234<small>.00</small></span>
                                                        </span> -->

                                                        <!-- Price -->
                                                        <span class="price">
                                                            789<small>.00</small>
                                                        </span>
                                                    </span>

                                                    <!-- Quantity -->
                                                    <span class="qnt-select">
                                                        <span class="plus">
                                                            <i class="icofont icofont-plus"></i>
                                                        </span>
                                                        <span class="view-sum">
                                                            01
                                                        </span>
                                                        <span class="minus">
                                                            <i class="icofont icofont-minus"></i>
                                                        </span>
                                                    </span>

                                                    <!-- Icon card -->
                                                    <span class="icon-card">
                                                        <i class="icofont icofont-cart-alt"></i>
                                                    </span>
                                                </a>

                                                <!-- Favorite added -->
                                                <a href="#" class="favorite-link">
                                                    <i class="icofont icofont-star"></i>
                                                    to favorite
                                                </a>

                                                <!-- More link -->
                                                <a href="#" class="more-link">More info</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Shop item -->
                                    
                                </div>
                                
                                <!-- Paginations -->
                                <div class="row pagination-block bottom">
                                    <div class="col-xs-12">
                                        
                                        <div class="wrap">
                                           
                                            <!-- Pagination -->
                                            <ul class="pagination">

                                                <li>
                                                    <a href="#">
                                                        <span><i class="icofont icofont-rounded-left"></i></span>
                                                    </a>
                                                </li>

                                                <li><a href="#">01</a></li>
                                                <li class="active"><a href="#">02</a></li>
                                                <li><a href="#">03</a></li>
                                                <li><a href="#">04</a></li>
                                                <li><a href="#">05</a></li>

                                                <li>
                                                    <a href="#">
                                                        <span><i class="icofont icofont-rounded-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>

                                            <!-- Switch style on shop item -->
                                            <ul class="swither">
                                                <li class="cols active">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </li>
                                                <li class="rows">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div><!-- ./ Item list -->
                            
                            <!-- Asside -->
                            <div class="col-md-4 col-lg-3 asside">

                                <!-- Block setup -->
                                <div class="inblock sdw">

                                    <div class="wrap bg-white">

                                        <!-- Header -->
                                        <h3 class="header text-uppercase">Price</h3>

                                        <!-- Price amount -->
                                        <div class="price-slider"
                                             data-price-first="75"
                                             data-price-last="423"
                                             data-price-max="850"
                                             data-price-curr="$">

                                            <div class="range"></div>

                                            <div class="amoutn">
                                                <input type="text" class="first" readonly>
                                                <input type="text" class="last" readonly>
                                            </div>
                                        </div><!-- / Price amount -->

                                        <!-- Divider -->
                                        <div class="divider"></div><!-- / Divider -->

                                        <!-- Size selecting -->
                                        <div class="sizer">

                                            <!-- Header -->
                                            <h3 class="header text-uppercase">Size</h3>

                                            <!-- Sizes -->
                                            <ul class="selecter">
                                                <li data-sizer-id="1">M</li>
                                                <li data-sizer-id="2">L</li>
                                                <li data-sizer-id="3">SL</li>
                                                <li class="active" data-sizer-id="4">XL</li>
                                                <li data-sizer-id="5">XXL</li>
                                            </ul>

                                            <div class="range"></div>

                                            <div class="amoutn">
                                                <span class="first">SL</span>
                                                <span class="last">XXL</span>
                                            </div>
                                        </div><!-- / Size selecting -->

                                        <!-- Divider -->
                                        <div class="divider"></div><!-- / Divider -->

                                        <!-- Header -->
                                        <h3 class="header text-uppercase">Color</h3>

                                        <!-- Color selecting -->
                                        <div class="color-selecting">

                                            <!-- Sizes -->
                                            <ul class="selecter">
                                                <li class="gray" data-color-id="1"></li>
                                                <li class="black" data-color-id="2"></li>
                                                <li class="red active" data-color-id="3"></li>
                                                <li class="purp" data-color-id="4"></li>
                                                <li class="blue" data-color-id="5"></li>
                                                <li class="aqua" data-color-id="6"></li>
                                                <li class="green" data-color-id="7"></li>
                                                <li class="yellow" data-color-id="8"></li>
                                            </ul>
                                        </div><!-- / Color selecting -->
                                    </div>
                                </div><!-- Block setup -->

                                <!-- Asside nav -->
                                <div class="asside-nav bg-white hidden-xs">
                                    <div class="header text-uppercase text-white bg-blue">
                                        Category
                                    </div>

                                    <ul class="nav-vrt bg-white">
                                        <li class="active">
                                            <a href="#" class="btn-material">Man line
                                                <i class="nav-icon-open icofont icofont-plus"></i>
                                                <i class="nav-icon-close icofont icofont-minus"></i>
                                            </a>

                                            <div class="sub-nav bg-grey-light">
                                                <ul class="sub">
                                                    <li>
                                                        <a href="#" class="btn-material">Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Pants</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Footwear</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Belts</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Bags</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Perfume</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Jewerly</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#" class="btn-material">Woman
                                                <i class="nav-icon-open icofont icofont-plus"></i>
                                                <i class="nav-icon-close icofont icofont-minus"></i>
                                            </a>

                                            <div class="sub-nav bg-grey-light">
                                                <ul class="sub">
                                                    <li>
                                                        <a href="#" class="btn-material">Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Pants</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Footwear</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Belts</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Bags</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Perfume</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn-material">Jewerly</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#" class="btn-material">Jewerly</a>
                                        </li>

                                        <li>
                                            <a href="#" class="btn-material">Electronics</a>
                                        </li>
                                    </ul>

                                </div><!-- / Asside nav -->

                                <!-- Block tags -->
                                <div class="inblock padding-none hidden-xs">

                                    <div class="wrap">

                                        <!-- Header -->
                                        <h3 class="header text-uppercase">Tags</h3>
                                        
                                        <!-- Tags list -->
                                        <ul class="tags">
                                            <li><a href="#">e-shop</a></li>
                                            <li><a href="#">Bootstrap</a></li>
                                            <li><a href="#">Material</a></li>
                                            <li><a href="#">SEO</a></li>
                                            <li><a href="#">WordPress</a></li>
                                            <li><a href="#">Drupal</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Web Design</a></li>
                                            <li><a href="#">Main Blog</a></li>
                                            <li><a href="#">Landing Page</a></li>
                                        </ul>
                                    </div>
                                </div><!-- Block tags -->
                                
                                <!-- List categories for mobile -->
                                <div class="inblock padding-none visible-xs">
                                    <div class="mobile-category nav-close">
                                        
                                        <!-- Header -->
                                        <div class="header bg-blue">
                                            <span class="head">Category</span>

                                            <span class="btn-swither" >
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </div>

                                        <ul class="nav-vrt bg-white">
                                            <li class="active">
                                                <a href="#" class="btn-material">Man line
                                                    <i class="nav-icon-open icofont icofont-plus"></i>
                                                    <i class="nav-icon-close icofont icofont-minus"></i>
                                                </a>

                                                <div class="sub-nav bg-grey-light">
                                                    <ul class="sub">
                                                        <li>
                                                            <a href="#" class="btn-material">Shirts</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Pants</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Footwear</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Belts</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Bags</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Perfume</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Jewerly</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" class="btn-material">Woman
                                                    <i class="nav-icon-open icofont icofont-plus"></i>
                                                    <i class="nav-icon-close icofont icofont-minus"></i>
                                                </a>

                                                <div class="sub-nav bg-grey-light">
                                                    <ul class="sub">
                                                        <li>
                                                            <a href="#" class="btn-material">Shirts</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Pants</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Footwear</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Belts</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Bags</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Perfume</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn-material">Jewerly</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" class="btn-material">Jewerly</a>
                                            </li>

                                            <li>
                                                <a href="#" class="btn-material">Electronics</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div><!-- ./ Asside -->
                        </div>
                    </div>
                    
            </div><!-- / Parallax wrapper -->
        </div>
        <!-- END: POPULAR ON SHOP -->
        
        <!-- 
        BLOCK SUBSCRIBE
        =============================================== -->
        <div class="container-fluid">
            
            <div class="row parallax-wrap">
                
                <div class="container block">

                    <div class="row">

                        <div class="col-md-5">

                            <!-- Header -->
                            <span class="comp-header st-18 text-uppercase">
                                Subscribe <br>
                                <span class="text-white">on latest news</span>
                            </span>
                        </div>


                        <div class="col-md-7">

                            <!-- Subscribe form -->
                            <form class="subscribe sdw">
                                <div class="wrap">

                                    <div class="fields">

                                        <!-- Name -->
                                        <div class="name">
                                            <input type="text" placeholder="Name">
                                        </div>

                                        <!-- Email -->
                                        <div class="email">
                                            <input type="text" placeholder="Email">
                                        </div>

                                        <!-- Divider (dotts) -->
                                        <div class="divider">
                                            <span></span>
                                        </div>
                                    </div>

                                    <!-- Send btn -->
                                    <div class="send-btn">
                                        <button>
                                            <i class="icofont icofont-send-mail"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Parallax block -->
                <div class="parallax bg-grey-light opc-7"
                     data-parallax-image="images/blocks/bg-02.jpg"
                     data-speed-direction="-.2"></div><!-- / Parallax block -->
            </div><!-- / Parallax wrapper -->
        </div>
        <!-- END: SUBSCRIBE -->
            
        <!-- 
        BLOCK COUNTER
        =============================================== -->
        <div class="container block">
            
            <div class="row">
                
                <!-- Counter -->
                <div class="col-sm-3">

                    <div class="counter">

                        <div class="wrap text-blue">
                            25 789
                            <span>items sold</span>
                        </div>
                    </div>
                </div>
                
                <!-- Counter -->
                <div class="col-sm-3">

                    <div class="counter">

                        <div class="wrap text-blue">
                            1 580
                            <span>happy customers</span>
                        </div>
                    </div>
                </div>
                
                <!-- Counter -->
                <div class="col-sm-3">

                    <div class="counter">

                        <div class="wrap text-blue">
                            987
                            <span>items in store</span>
                        </div>
                    </div>
                </div>
                
                <!-- Counter -->
                <div class="col-sm-3">

                    <div class="counter">

                        <div class="wrap text-blue">
                            12 580
                            <span>what else</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: COUNTER -->
            
        <!-- 
        SUBSTRATE
        =============================================== -->
        <div class="container-fluid">
           
            <div class="row">
               
                <div class="clearfix">
                   
                    <div class="substrate-wrap">
                       
                        <div class="substrate parallax-block"
                             style="position: absolute"
                             data-speed-direction=".1"
                             data-default-pos="-200"
                             data-parallax-block="true">
                            
                            <div class="text text-dark">
                                BRANDS
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: SUBSTRATE -->
            
        <!-- 
        BLOCK BRANDS
        =============================================== -->
        <div class="container space-bottom">
           
            <div class="row">
               
                <div class="col-xs-12">
                   
                   <div class="owl-carousel owl-default brands nav-bottom-right">
                       
                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="images/brands/img-2-01.png" alt="">
                           </div>
                       </div>
                       
                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="images/brands/img-2-02.png" alt="">
                           </div>
                       </div>
                       
                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="images/brands/img-2-03.png" alt="">
                           </div>
                       </div>
                       
                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="images/brands/img-2-04.png" alt="">
                           </div>
                       </div>
                       
                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="images/brands/img-2-05.png" alt="">
                           </div>
                       </div>
                       
                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="images/brands/img-2-06.png" alt="">
                           </div>
                       </div>
                       
                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="images/brands/img-2-07.png" alt="">
                           </div>
                       </div>
                       
                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="images/brands/img-2-08.png" alt="">
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <!-- END: BRANDS -->
@endsection
            

        

