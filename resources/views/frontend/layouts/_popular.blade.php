<div class="container-fluid block bg-grey-lightness space-top">
    <div class="row">

            <div class="container space-top">

                <div class="row">

                    <!-- Asside -->
                    <div class="col-md-4 col-lg-3 asside">



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
