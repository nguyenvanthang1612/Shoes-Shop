@extends('frontend.layouts.app')

@section('title')
    index
@endsection

@section('content')
        <!--
        SLIDESHOW
        =============================================== -->
        @include('frontend.layouts._slideshow')
        <!-- END: SLIDESHOW -->

        <!--
        SUBSTRATE
        =============================================== -->
        <div class="container-fluid">

            <div class="row">

                <div class="clearfix">

                    <div class="substrate-wrap">

                        <div class="substrate parallax-block"
                            data-speed-direction=".3"
                            data-default-pos="-600"
                            data-parallax-block="true">

                            <div class="text text-darkness">
                                IN TREND
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: SUBSTRATE -->

        <!--
        BLOCK FEATURES
        =============================================== -->

        <!-- END: FEATURES -->
        @include('frontend.layouts._feature')
        <!--
        BLOCK BRAND INFO
        =============================================== -->
        <div class="container-fluid space-bottom space-bottom-shift">

            <!-- Parallax wrapper -->
            <div class="row parallax-wrap">

                <div class="container">
                    <div class="row">

                        <!-- Top frame -->
                        <div class="bnr-frame-top">
                            &nbsp;
                        </div><!-- / Top frame -->

                        <div class="col-xs-12">
                            <div class="row">

                                <div class="col-sm-6">

                                    <!-- Header -->
                                    <span class="comp-header st-20 text-uppercase text-white">
                                        <small>New Brands</small>
                                    </span>

                                    <!-- Button -->
                                    <p>
                                        <span class="sdw-wrap">
                                            <a href="#" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">View New Products</a>
                                            <span class="sdw"></span>
                                        </span>
                                    </p>
                                </div>

                                <!-- Carousel -->
                                <div class="col-sm-6">
                                    <div class="owl-carousel owl-default banner-brands nav-bottom-right nav-white">
                                    @foreach($products as $product)
                                        <div class="item">
                                            <h1> {{$product->brand}} </h1>
                                        </div>
                                    @endforeach


                                    </div>
                                </div><!-- / Carousel -->

                            </div>
                        </div>

                        <!-- Bottom frame -->
                        <div class="bnr-frame-bottom">
                            &nbsp;
                        </div><!-- / Bottom frame -->

                    </div>
                </div>

                <!-- Parallax block -->
                <div class="parallax bg-darkness opc-7"
                     data-parallax-image="{{ asset('frontend/images/blocks/bg-01.jpg') }}"
                     data-speed-direction="-.2"></div><!-- / Parallax block -->
            </div><!-- / Parallax wrapper -->
        </div>
        <!-- END: BRAND INFO -->

        <!--
        BLOCK POPULAR ON SHOP
        =============================================== -->
        @include('frontend.layouts._popular')
        <!-- END: POPULAR ON SHOP -->

        <!--
        BLOCK SUBSCRIBE
        =============================================== -->
        @include('frontend.layouts._subscribe')
        <!-- END: SUBSCRIBE -->

        <!--
        SUBSTRATE
        =============================================== -->
        <div class="container-fluid">

            <div class="row">

                <div class="clearfix">

                    <div class="substrate-wrap">

                        <div class="substrate parallax-block"
                             data-speed-direction=".3"
                             data-default-pos="-400"
                             data-parallax-block="true">

                            <div class="text text-dark">
                                POPULAR
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: SUBSTRATE -->

        <!--
        BLOCK LATEST ON BLOG
        =============================================== -->
        <div class="container-fluid block space-top">
            <div class="row">
                    <div class="container">
                        <div class="row">
                        <div class="container space-bottom">

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

                        </div>
                    </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">

                <div class="clearfix">

                    <div class="substrate-wrap">

                        <div class="substrate parallax-block"
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
                               <img src="{{ asset('frontend/images/brands/img-2-01.png') }}" alt="">
                           </div>
                       </div>

                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="{{ asset('frontend/images/brands/img-2-02.png') }}" alt="">
                           </div>
                       </div>

                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="{{ asset('frontend/images/brands/img-2-03.png') }}" alt="">
                           </div>
                       </div>

                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="{{ asset('frontend/images/brands/img-2-04.png') }}" alt="">
                           </div>
                       </div>

                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="{{ asset('frontend/images/brands/img-2-05.png') }}" alt="">
                           </div>
                       </div>

                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="{{ asset('frontend/images/brands/img-2-06.png') }}" alt="">
                           </div>
                       </div>

                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="{{ asset('frontend/images/brands/img-2-07.png') }}" alt="">
                           </div>
                       </div>

                       <!-- Item -->
                       <div class="img-item">
                           <div class="wrap">
                               <img src="{{ asset('frontend/images/brands/img-2-08.png') }}" alt="">
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <!-- END: BRANDS -->
@endsection




