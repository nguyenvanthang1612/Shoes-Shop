@extends('frontend.layouts.app')

@section('title')
Step 1
@endsection

@section('content')
<!--
        BREADCRUMBS
        =============================================== -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <ol class="breadcrumb bg-blue">
                <li><a href="#">Homepage</a></li>
                <li><a href="#">Blog category</a></li>
                <li class="active">This item</li>
            </ol>

        </div>
    </div>
</div>
<!-- END: BREADCRUMBS -->

<div class="container">
    <!-- STEPS =============================================== -->
    <div class="row block none-padding-top">
        <div class="col-xs-12">

            <ul class="steps row">
                <li class="active col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number bg-blue">
                        1
                    </div>
                    <span>
                        Confirm
                    </span>
                    products list

                    <span class="dir-icon hidden-xs">
                        <i class="icofont icofont-stylish-right text-yellow"></i>
                    </span>
                </li>

                <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number bg-grey">
                        2
                    </div>
                    <span>
                        Enter
                    </span>
                    your address

                    <span class="dir-icon">
                        <i class="icofont icofont-stylish-right"></i>
                    </span>
                </li>

                <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number bg-grey">
                        3
                    </div>
                    <span>
                        Select
                    </span>
                    payment method

                    <span class="dir-icon hidden-sm hidden-md">
                        <i class="icofont icofont-stylish-right"></i>
                    </span>
                </li>

                <li class="hidden-xs col-lg-3 hidden-sm hidden-md">
                    <div class="icon number bg-grey">
                        4
                    </div>
                    <span>
                        Confirm
                    </span>
                    your order
                </li>
            </ul>
        </div>
    </div>
    <!-- END: STEPS -->

    <!--
            CONTENT
            =============================================== -->
    <div class="row block none-padding-top">
        <div class="col-xs-12">

            <div class="product-list">
                <div class="wrap bg-white" id="list-cart">
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
                    <div id="products-step-1">
                        @include('frontend.shoppingCart._product-cart-page-step-1')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT -->
</div>
@endsection

@push('js')
<script>
    $(document).on("click",".remove-btn" , function(){
        reloadProductInCartPage()
    });

    function reloadProductInCartPage()
    {
        $.ajax({
            url: route('frontend.cart.reload-products-in-cardpage'),
            type:'GET',
        }).done(function(response) {
            $("#products-step-1").html(response)
        });
    }

    $(document).on('change', ".cart-item", function() {
        const productId = $(this).data('productid')
        const quantity = $(this).val()
        post('cart/update-quantity', {id: productId, quantity}, function(response) {
            $("#products-step-1").html(response)
        });
        reloadCartItemInBadge()
    });

    $(document).on('click', ".minus", function() {
        $(this).unbind();
        const productId = $(this).data('productid')
        const cartItem = $(this).next('.input').find('input')
        // console.log($(this).next('.input').find('input').val());
        const quantity = parseInt(cartItem.val()) - 1 <= 0 ? 0 : parseInt(cartItem.val()) - 1

        if (quantity == 0) {
            removeItemOutOfCart($(this))
            reloadProductInCartPage();
        }
        else {
            post('cart/update-quantity', {id: productId, quantity}, function(response) {
            $("#products-step-1").html(response)
            reloadCartItemInBadge()
        });
        }

    });

    $(document).on('click', ".plus", function() {
        $(this).unbind();
        const productId = $(this).data('productid')
        const cartItem = $(this).prev('.input').find('input')
        // console.log($(this).next('.input').find('input').val());
        const quantity = parseInt(cartItem.val()) + 1

        post('cart/update-quantity', {id: productId, quantity}, function(response) {
            $("#products-step-1").html(response)
        });
        reloadCartItemInBadge()
    });

</script>
@endpush
