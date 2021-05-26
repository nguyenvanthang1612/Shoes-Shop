@if(Session::has("Cart") != null)

<a href="#" class="cart-icon hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
@if(Session::has("Cart") != null)
    <span class="badge bg-blue" id="show-total-quantity">{{Session::get('Cart')->totalQuantity}}</span>
@else
    <span class="badge bg-blue" id="show-total-quantity">0</span>
@endif
    <i class="icofont icofont-cart-alt"></i>
</a>

<a href="#" class="visible-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <i class="icofont icofont-cart-alt"></i>
    Shopping cart
</a>

<!-- Dropdown items list -->
<ul class="dropdown-menu">

    @foreach(Session::get('Cart')->products as $item)
    <!-- Item -->
    <li>
        <div class="wrap">

            <!-- Image -->
            <div class="image">
                <img src="{{$item['productInfo']->img}}" alt="">
            </div>

            <!-- Caption -->
            <div class="caption">
                <span class="comp-header st-1 text-uppercase">
                {{$item['productInfo']->name}}
                    <span>
                    </span>
                    <span>
                    {{$item['productInfo']->brand}}
                    </span>
                </span>

                <span class="price">
                    <span class="text-grey-dark">$</span>
                    {{$item['productInfo']->price}} <small class="text-grey-dark">.00đ</small> x {{$item['quantity']}}
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
   <input hidden id="total-quanty-cart" type="number" value="{{Session::get('Cart')->totalQuantity}}"/>
   <li class="more-btn sdw">
       <a href="card-page-step-1.html" class="btn-material btn-primary">
           View order <i class="icofont icofont-check-circled"></i>
       </a>
   </li>


</ul>

@endif

