@if(Session::has("Cart") != null)

<!-- Dropdown items list -->
    @foreach(Session::get('Cart')->products as $item)
    <!-- Item -->
    <li>
        <div class="wrap">

            <!-- Image -->
            <div class="image">
                <img src="{{ asset('storage/backend/product/'. $item['productInfo']->img) }}" alt="">
            </div>

            <!-- Caption -->
            <div class="caption">
                <span class="comp-header st-1 text-uppercase">
                {{ $item['productInfo']->name }}
                    <span>
                    </span>
                    <span>
                    {{ $item['productInfo']->brand }}
                    </span>
                </span>

                <span class="price">
                    <span class="text-grey-dark">$</span>
                    {{ $item['productInfo']->price }} <small class="text-grey-dark">$</small> x {{$item['quantity']}}
                </span>


            </div>


            <!-- Remove btn -->
            <button type="submit" class="remove-btn" data-idCart="{{$item['productInfo']->id}}">
                X
            </button>
        </div>
    </li>
    @endforeach
   <li><h5>Total: {{Session::get('Cart')->totalPrice}}đ</h5></li>
   <input hidden id="total-quantity-cart" type="number" value="{{Session::get('Cart')->totalQuantity}}"/>
   <li class="more-btn sdw">
       <a href="{{ url('/listCart') }}" class="btn-material btn-primary">
           View order <i class="icofont icofont-check-circled"></i>
       </a>
   </li>
@endif

