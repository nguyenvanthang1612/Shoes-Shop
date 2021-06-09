@if(Session::has("Cart") != null)
<!-- Dropdown items list -->
    @foreach(Session::get('Cart')->products as $item)
    <!-- Item -->
    <li>
        <div class="wrap product-item">

            <!-- Image -->
            <div class="image">
                <img src="{{ asset('storage/backend/product/'. $item['productInfo']->thumbnail) }}" alt="">
            </div>

            <!-- Caption -->
            <div class="caption">
                <span class="comp-header st-1 text-uppercase">
                {{ $item['productInfo']->name }}
                    <span></span>
                    <span>{{ $item['productInfo']->brand }}</span>
                </span>

                <span class="price">
                    <span class="text-grey-dark">$</span>
                    {{ $item['productInfo']->price }}  x {{$item['quantity']}}
                </span>
            </div>
            <!-- Remove btn -->
            <button class="remove-btn product-delete-icon" data-idCart="{{$item['productInfo']->id}}">
                <i class="icofont icofont-bucket"></i>
            </button>
        </div>
    </li>
    @endforeach
    <li>
        <h5>{{ __('Total') }}: ${{ Session::get('Cart')->totalPrice }}</h5>
        </li>
    <input hidden id="total-quantity-cart" type="number" value="{{ count(Session::get('Cart')->products) }}"/>
    <li class="more-btn sdw">
        <a href="{{ url('/listCart') }}" class="btn-material btn-primary">
            {{ __('View order') }} <i class="icofont icofont-check-circled"></i>
        </a>
    </li>
@endif

