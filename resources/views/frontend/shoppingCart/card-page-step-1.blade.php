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
                <li><a href="#">{{ __('Homepage') }}</a></li>
                <li><a href="#">{{ __('Blog category') }}</a></li>
                <li class="active">{{ __('This item') }}</li>
            </ol>

        </div>
    </div>
</div>
<!-- END: BREADCRUMBS -->

<div class="container">
    <!-- STEPS =============================================== -->

    @include('frontend.shoppingCart._step', [
        'step' => 1
    ])
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
                            {{ __('Product') }}
                        </div>

                        <div class="price hidden-xs hidden-sm">
                            {{ __('Price') }}
                        </div>

                        <div class="qnt hidden-xs hidden-sm">
                            {{ __('Quantity') }}
                        </div>

                        <div class="total hidden-xs hidden-sm">
                            {{ __('Total') }}
                        </div>

                        <div class="rmv hidden-xs hidden-sm">
                            {{ __('Remove') }}
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

    $(document).on('change', ".cart-item", function() {
        const productId = $(this).data('productid')
        const quantity = $(this).val()
        post(route('frontend.cart.updateCartQuantity'), {id: productId, quantity}, function(response) {
            $("#products-step-1").html(response)
            reloadCartItemInBadge()
        });
    });

    $(document).on('click', ".minus", function() {
        $(this).unbind();
        const productId = $(this).data('productid')
        const cartItem = $(this).next('.input').find('input')
        // console.log($(this).next('.input').find('input').val());
        const quantity = parseInt(cartItem.val()) - 1 <= 0 ? 0 : parseInt(cartItem.val()) - 1

        if (quantity == 0) {
            removeItemOutOfCart($(this))
        }
        else {
            post(route('frontend.cart.updateCartQuantity'), {id: productId, quantity}, function(response) {
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

        post(route('frontend.cart.updateCartQuantity'), {id: productId, quantity}, function(response) {
            $("#products-step-1").html(response)
            reloadCartItemInBadge()
        });
    });

</script>
@endpush
