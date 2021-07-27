<div class="container block">

    <!-- Block header -->
    <div class="row">

        <div class="col-xs-12">

            <div class="block-header text-uppercase">

                <h2 class="header">{{ __('Features') }}</h2>
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
                                <img class="main" height="250" src='{{ asset('storage/backend/product/'.$product->thumbnail) }}' alt="">
                            </div>

                            <!-- Caption -->
                            <div class="caption">

                                <!-- Features list -->
                                <ul class="features">
                                    <li>
                                        <i class="icofont icofont-shield"></i>
                                        <span>{{ __('24 days. Money Back Guarantee') }}</span>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-ship"></i>
                                        <span>{{ __('Free shipping') }}</span>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-hand"></i>
                                        <span>{{ __('Free help and setup') }}</span>
                                    </li>
                                </ul>
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

                                <!-- Icon card -->
                                <span class="icon-card">
                                    <i class="icofont icofont-cart-alt"></i>
                                </span>
                            </a>

                            <!-- Favorite added -->
                            <span class="favorite-link active">
                                <i class="icofont icofont-star"></i>
                                {{ __('favorite') }}
                            </span>

                            <!-- More link -->
                            <a href='{{  route('frontend.product.show', $product->id) }}' class="more-link">{{ __('More info') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- / Shop item -->
            </div>
        </div>
    </div>
</div>
