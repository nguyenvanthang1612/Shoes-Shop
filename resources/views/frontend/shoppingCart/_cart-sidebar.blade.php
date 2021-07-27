<div class="product-list float-block">
    <div class="wrap bg-white">

        <!-- Asside nav -->
        <div class="asside-nav bg-grey-lightness hidden-xs">
            <div class="header text-uppercase text-white bg-blue">
                {{ __('Cart') }}
            </div>

            <ul class="list-2">
                <li>
                    <span class="head">{{ __('Number of items') }}:</span>
                    <span class="sub">{{ count(session('Cart')->products) }}</span>
                </li>
                <li>
                    <span class="head">{{ __('Total price') }}:</span>
                    <span class="sub">$ {{ session('Cart')->totalPrice }}</span>
                </li>
            </ul>

            <div class="asside-btn text-center">
                <a href="{{ route('frontend.cart.list-cart') }}" class="btn btn-primary btn-material">
                    <span class="body">{{ __('View order') }}</span>
                    <i class="icon icofont icofont-check-circled"></i>
                </a>
            </div>

        </div><!-- / Asside nav -->

    </div>
</div>
