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
                        @include('frontend.layouts._category-sidenav')

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
                        {{ $products->links() }}

                        <!-- Item list -->
                        <div class="row item-wrapper" data-viewmode="details">
                        @foreach($products as $product)
                            @include('frontend.layouts._product')
                        @endforeach


                        </div>

                        {{ $products->links() }}

                    </div><!-- ./ Item list -->
                </div>
            </div>

    </div><!-- / Parallax wrapper -->
</div>
