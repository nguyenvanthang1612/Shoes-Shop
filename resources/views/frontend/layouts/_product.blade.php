<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw timer" data-timer-date="2018, 2, 5, 0, 0, 0">

    <div class="wrap" >

        <!-- Image & Caption -->
        <div class="body">

            <!-- Header -->
            <div class="comp-header st-4 text-uppercase">

                <a href="{{ route('frontend.product.show', $product->id) }}">{{$product->name}}</a>

            </div>

            <!-- Image -->
            <div class="image">
                <img class="main feature-thumbnail" src='{{ asset('storage/backend/product/'.$product->thumbnail) }}'
                    alt="" />
            </div>

            <!-- Caption -->
            <div class="caption">
                <!-- Rate -->
                <div class="rate">
                    <div class="rate-info">
                        {{ __('BRAND') }}
                        <span>{{$product->brand}}</span>
                    </div>
                </div>
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

                <!-- Text -->
                {{-- {!! $product->desc !!} --}}
            </div>
        </div>

        <!-- Buy btn & more link -->
        <div class="info">

            <!-- Buy btn -->
            <a onclick='addCart("{{$product->id}}")' href="javascript:" class="btn-material btn-price">

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
            
            
            <a href='{{  route('frontend.product.show', $product->id) }}' class="more-link">{{ __('More info') }}</a>

            <!-- More link -->
        </div>
    </div>
</div>
