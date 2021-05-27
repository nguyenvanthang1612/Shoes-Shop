<div class="container block">

            <!-- Block header -->
            <div class="row">

                <div class="col-xs-12">

                    <div class="block-header text-uppercase">

                        <h2 class="header">Features</h2>
                    </div>
                </div>
            </div>
            <!-- /. Block header -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="owl-carousel owl-default features nav-top-left">

                        <!-- Shop item 1 / timer -->
                        @foreach($featureProducts as $product)
                        <div class="shop-item hover-sdw timer" data-timer-date="2018, 2, 5, 0, 0, 0">

                            <div class="wrap">
                                <!-- Image & Caption -->
                                <div class="body">
                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">
                                        {{$product->name}}
                                        <span>{{$product->brand}}</span>
                                        <!-- Badge -->
                                        <span class="sale-badge item-badge text-uppercase bg-green">New</span>
                                    </div>

                                    <!-- Image -->
                                    <div class="image">
                                        <img class="main" height="250" src='{{ asset('storage/backend/product/'.$product->img) }}' alt="">
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
                                    <a  onclick='addCart("{{$product->id}}")'  href="javascript:" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">

                                            <!-- Currency -->
                                            <span class="curr">
                                                $
                                            </span>



                                            <!-- Price -->
                                            <span class="price">
                                                {{$product->price}}
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
                                    <a href='{{  route('frontend.product.show', $product->id) }}' class="more-link">More info</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- / Shop item -->
                    </div>
                </div>
            </div>
        </div>
