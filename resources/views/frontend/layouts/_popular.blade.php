<div class="container-fluid block bg-grey-lightness space-top">
    <div class="row">

            <div class="container space-top">

                <div class="row">

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
                            @foreach($categories as $category)
                                <li class="active">
                                    <a href="{{ route('product-categories-list', $category->id) }}" class="btn-material">{{$category->name_category}}
                                        <i class="nav-icon-open icofont icofont-plus"></i>
                                        <i class="nav-icon-close icofont icofont-minus"></i>
                                    </a>
                                </li>
                            @endforeach


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

                    <!-- Item list -->
                    <div class="col-md-8 col-lg-9 shop-items-set shop-items-full">

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
                                    <ul class="swither">
                                        <li class="cols">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                        <li class="rows active">
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
                        @foreach($products as $product)
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw timer"
                                    data-timer-date="2018, 2, 5, 0, 0, 0">

                                <div class="wrap">

                                    <!-- Image & Caption -->
                                    <div class="body">

                                        <!-- Header -->
                                        <div class="comp-header st-4 text-uppercase">

                                            {{$product->category->name_category}}
                                            <span>
                                                {{$product->name}}
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



                                        </div>

                                        <!-- Image -->
                                        <div class="image">

                                            <img style="width:253px;height:347px " class="main" src='{{$product->img}}' alt="">
                                        </div>

                                        <!-- Caption -->
                                        <div class="caption">
                                            <!-- Rate -->
                                            <div class="rate">



                                                <div class="rate-info">
                                                    BRAND
                                                    <span>{{$product->brand}}</span>
                                                </div>
                                            </div>

                                            <!-- Timer -->
                                            <div class="timer-body">
                                                <span class="sale text-red">Size</span>
                                                <span class="tdtimer-d"></span>{{$product->size}}

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
                                                {{$product->desc}}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Buy btn & more link -->
                                    <div class="info">

                                        <!-- Buy btn -->
                                        <a href="shop-item.html" class="btn-material btn-price">

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
                                        <a href='{{  url("products/$product->id/item") }}' class="more-link">More info</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


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
                                        <li class="cols">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                        <li class="rows active">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div><!-- ./ Item list -->
                </div>
            </div>

    </div><!-- / Parallax wrapper -->
</div>
