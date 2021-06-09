@extends('frontend.layouts.app')

@section('title')
    {{ __('Shop Items') }}
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
                        <li><a href="#">{{ __('Product') }}</a></li>
                        <li class="active">{{ __('This item') }}</li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- END: BREADCRUMBS -->

        <div class="container-fluid ">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-9">

                            <!--
                            MAIN INFO
                            =============================================== -->

                            <div class="row shop-item-page">

                                <!-- ITEM GALLERY BLOCK -->
                                <div class="col-sm-4 col-md-5">
                                    <div class="item-gallery float-block">
                                        <div class="owl-carousel image">
                                            @foreach($product->img as $image)
                                                <div class="item">
                                                    <img src="{{ asset('storage/backend/product/'.$image) }}" alt="" style="background-position: center">
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="owl-carousel image-nav hidden-xs">
                                            @foreach($product->img as $image)
                                                <div class="item">
                                                    <img src="{{ asset('storage/backend/product/'.$image) }}" alt="">
                                                </div>
                                            @endforeach
                                        </div>


                                    </div>
                                </div><!-- / ITEM GALLERY BLOCK -->

                                <!-- CAPTION BLOCK -->
                                <div class="col-sm-8 col-md-7 get-height">

                                    <!-- Item header -->
                                    <div class="row item-header">

                                        <div class="col-md-7">

                                            <h1 class="comp-header st-12 text-uppercase text-blue">
                                            {{$product->name}}
                                                <span class="text-dark">

                                                </span>
                                                <span class="text-dark">
                                                {{$product->brand}}
                                                </span>
                                            </h1>
                                        </div>



                                    </div>

                                    <!-- Divider -->
                                    <div class="divider-dotted"></div>

                                    <!-- Price & rating panel -->
                                    <div class="row price-pan">

                                        <!-- Price & rating -->
                                        <div class="col-md-12">

                                            <span class="head">{{ __('Price') }}</span>

                                            <span class="price">


                                                <!-- Price -->
                                                <span class="price">

                                                    <!-- Currency -->
                                                    <span class="curr">$</span>
                                                    {{$product->price}}<small>.00</small>
                                                </span>
                                            </span>

                                            <!-- Badge -->
                                            <span class="sale-badge item-badge text-uppercase bg-green hidden-xs">
                                                New
                                            </span>
                                        </div>

                                        <!-- Badge & Favorite -->
                                        <div class="col-md-12">

                                            <!-- Rate -->
                                        </div>
                                    </div>

                                    <!-- Divider -->
                                    <div class="divider-dotted"></div>

                                    <!-- Product customization panel -->
                                    <div class="row set-panel">

                                        <div class="col-md-6">

                                            <!-- Header -->
                                            <span class="head">size</span>

                                            <!-- Size panel -->
                                            <ul class="size-panel">
                                                <li>{{$product->size}}</li>

                                            </ul>
                                        </div>


                                    </div>

                                    <!-- Buy btn panel -->
                                    <div class="row">
                                        <div class="col-xs-12">

                                            <div class="buy-btn-panel bg-blue">

                                                <!-- Cart icon -->
                                                <div class="cart-icon">
                                                    <i class="icofont icofont-basket"></i>
                                                </div>

                                                <!-- Btns -->
                                                <div class="btns-wrap btn-material bg-white">
                                                    <a href="#">{{ __('Buy now') }}</a>
                                                    <a class="text-blue" onclick='addCart("{{$product->id}}")'  href="javascript:" >{{ __('Put in cart') }}</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Description -->


                                </div><!-- / CAPTION BLOCK -->

                            </div>
                            <!-- END: MAIN INFO -->

                            <!--
                            DESCRIPTION & COMMENTS
                            =============================================== -->
                            <div class="row shop-item-info">
                                <div class="col-xs-12">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs hidden-xs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#description" data-toggle="tab">{{ __('Description') }}</a>
                                        </li>

                                        <li role="presentation">
                                            <a href="#comments" data-toggle="tab">{{ __('Comments') }}</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active description" id="description">
                                            {!! $product->desc !!}
                                        </div>
                                        {{-- Comments --}}
                                        <div role="tabpanel" class="tab-pane comments" id="comments">
                                            <!-- Comments -->
                                            <div class="fb-comments" data-href="{{ route('frontend.product.show', $product->id) }}" data-width="100%" data-numposts="5"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- END: DESCRIPTION & COMMENTS -->

                        </div>

                        <!-- Asside -->
                        <div class="visible-lg col-md-4 col-lg-3 asside">



                            <!-- Asside nav -->
                            @include('frontend.layouts._category-sidenav')

                        </div><!-- ./ Asside -->

                    </div>
                </div>
            </div>
        </div>

@endsection


