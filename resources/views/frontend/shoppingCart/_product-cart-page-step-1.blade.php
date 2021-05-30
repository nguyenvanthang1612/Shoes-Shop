@if(Session::has("Cart"))
                    <div class="list-body">
                        <!-- Item -->
                        @foreach(Session::get('Cart')->products as $item)
                            <div class="item">
                                <div class="product">
                                    <img src="{{ asset('storage/backend/product/'.$item['productInfo']->img) }}" alt="">

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
                                            <span>{{number_format($item['productInfo']->price)}}</span><small></small>
                                        </span>
                                    </span>
                                </div>

                                <div class="qnt">
                                    <span>
                                        <span class="minus" data-productid={{ $item['productInfo']->id }} data-idCart={{ $item['productInfo']->id }}>
                                            <i class="icofont icofont-minus"></i>
                                        </span>
                                        <span class="input">
                                            <input type="number" min="0" value="{{$item['quantity']}}" data-productid={{ $item['productInfo']->id }}
                                            class="cart-item" />
                                        </span>
                                        <span class="plus" data-productid={{ $item['productInfo']->id }} data-idCart={{ $item['productInfo']->id }}>
                                            <i class="icofont icofont-plus"></i>
                                        </span>
                                    </span>
                                </div>

                                <div class="total">
                                    <i class="icofont icofont-cur-dollar"></i>
                                    <span>{{number_format($item['price'])}}</span>
                                </div>

                                <div class="rmv text-center">
                                    <button class="remove-btn" data-idcart="{{ $item['productInfo']->id }}">
                                        <i class="icofont icofont-close-line"></i>
                                    </button>
                                </div>
                            </div>
                            @endforeach
                        </div><!-- / List body -->

                        <!-- Footer -->
                        <div class="list-footer bg-blue">
                            <a href="#" class="btn btn-default btn-material">
                                <i class="icofont icofont-cart-alt"></i>
                                <h4>$ {{ number_format(Session::get('Cart')->totalPrice) }}</h4>
                                <span class="body">Make a purchase</span>
                            </a>
                            <a href="#" class="btn btn-text-white">
                                <span class="body">remove selected</span>
                            </a>
                        </div><!-- / Footer -->
                    @else
                        <div class="product">
                            Không có sản phẩm trong giỏ hàng
                        </div>
                    @endif
