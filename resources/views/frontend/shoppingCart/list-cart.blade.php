<!-- Header -->

<div class="list-header text-uppercase">
    <div class="product">
        Product
    </div>

    <div class="price hidden-xs hidden-sm">
        Price
    </div>

    <div class="qnt hidden-xs hidden-sm">
        Quantity
    </div>

    <div class="total hidden-xs hidden-sm">
        Total
    </div>

    <div class="rmv hidden-xs hidden-sm">
        Remove
    </div>
</div><!-- / Header -->

<!-- List body -->
<div class="list-body">
    <!-- Item -->
    @if(Session::has("Cart") != null)
    @foreach(Session::get('Cart')->products as $item)
    <div class="item">
        <div class="product">
            <img src="{{$item['productInfo']->img}}" alt="">

            <span class="comp-header st-8 text-uppercase">
                {{$item['productInfo']->name}}
                <span>

                </span>
                <span>
                    {{$item['productInfo']->brand}}
                </span>
            </span>
        </div>

        <div class="price hidden-xs">
            <span class="price">
                <i class="icofont icofont-cur-dollar"></i>
                <span class="prc">
                    <span>{{number_format($item['productInfo']->price)}}</span><small>$</small>
                </span>
            </span>
        </div>

        <div class="qnt">
            <span>
                <span class="minus">
                    <i class="icofont icofont-minus"></i>
                </span>
                <span class="input">
                    <input type="text" value="{{$item['quantity']}}">
                </span>
                <span class="plus">
                    <i class="icofont icofont-plus"></i>
                </span>
            </span>
        </div>

        <div class="total">
            <i class="icofont icofont-cur-dollar"></i>
            <span>{{number_format($item['price'])}}</span>
        </div>

        <div class="rmv text-center">
            <button class="remove-btn" onclick="deleteListCart({{ $item['productInfo']->id }});">
                <i class="icofont icofont-close-line"></i>
            </button>
        </div>
    </div>
    @endforeach
    @endif
</div><!-- / List body -->

<!-- Footer -->
<div class="list-footer bg-blue">
    <a href="card-page-step-2.html" class="btn btn-default btn-material">
        <i class="icofont icofont-cart-alt"></i>
        <h4>{{ number_format(Session::get('Cart')->totalPrice) }}</h4>
        <span class="body">Make a purchase</span>
    </a>
    <a href="#" class="btn btn-text-white">
        <span class="body">remove selected</span>
    </a>
</div><!-- / Footer -->
