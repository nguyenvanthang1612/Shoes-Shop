@extends('frontend.layouts.app')

@section('title')
    Shop Items
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
                        <li><a href="#">Product</a></li>
                        <li class="active">This item</li>
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
                            @foreach($items as $item)
                            <div class="row shop-item-page">

                                <!-- ITEM GALLERY BLOCK -->
                                <div class="col-sm-4 col-md-5 fix-height">
                                    <div class="item-gallery float-block">

                                        <div class="owl-carousel image">

                                            <div class="item">
                                                <img src="{{$item->img}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- / ITEM GALLERY BLOCK -->

                                <!-- CAPTION BLOCK -->
                                <div class="col-sm-8 col-md-7 get-height">

                                    <!-- Item header -->
                                    <div class="row item-header">

                                        <div class="col-md-7">

                                            <h1 class="comp-header st-12 text-uppercase text-blue">
                                            {{$item->name}}
                                                <span class="text-dark">

                                                </span>
                                                <span class="text-dark">
                                                {{$item->brand}}
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

                                            <span class="head">Price</span>

                                            <span class="price">


                                                <!-- Price -->
                                                <span class="price">

                                                    <!-- Currency -->
                                                    <span class="curr">$</span>
                                                    {{$item->price}}<small>.00</small>
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
                                                <li>{{$item->size}}</li>

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
                                                    <a href="#">Buy now</a>
                                                    <a class="text-blue" href="#">Put in cart</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="row description">
                                        <div class="col-xs-12">
                                            <h2 class="header">
                                                Description:
                                            </h2>

                                            <p>
                                                {{$item->desc}}
                                            </p>

                                            <dl class="dl-horizontal terms">
                                                <dt><span class="body">Leather</span></dt><dd>30%</dd>
                                                <dt><span class="body">Polyester</span></dt><dd>25%</dd>
                                                <dt><span class="body">Guarantee</span></dt><dd>36 month</dd>
                                                <dt><span class="body">Leather</span></dt><dd>30%</dd>
                                                <dt><span class="body">Polyester</span></dt><dd>25%</dd>
                                                <dt><span class="body">Guarantee</span></dt><dd>36 month</dd>
                                            </dl>
                                        </div>
                                    </div>

                                    <!-- Features panel -->
                                    <div class="row features-pan hidden-xs">
                                        <div class="col-xs-12">

                                            <ul class="row features-list">
                                                <li class="col-md-4">
                                                    <i class="icofont icofont-shield"></i>
                                                    <span>24 days. Money Back Guarantee</span>
                                                </li>
                                                <li class="col-md-4">
                                                    <i class="icofont icofont-ship"></i>
                                                    <span>Free shipping</span>
                                                </li>
                                                <li class="col-md-4">
                                                    <i class="icofont icofont-hand"></i>
                                                    <span>Free help and setup</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div><!-- / CAPTION BLOCK -->

                            </div>
                            @endforeach
                            <!-- END: MAIN INFO -->

                            <!--
                            DESCRIPTION & COMMENTS
                            =============================================== -->
                            <div class="row shop-item-info">
                                <div class="col-xs-12">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs hidden-xs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#description"
                                               data-toggle="tab">Description</a>
                                        </li>

                                        <li role="presentation">
                                            <a href="#comments"
                                               data-toggle="tab">Comments</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active description" id="description">

                                            <p>
                                               {{$item->desc}}
                                            </p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane comments" id="comments">

                                            <!-- Header -->
                                            <h3 class="header">Comments</h3>

                                            <!-- Comments -->
                                            <ul class="media-list">

                                                <!-- 1 comments -->
                                                <li class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="images/profile/profile-img.jpg" alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="#">John Doe</a>
                                                        </h4>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem a alias aut, aspernatur veritatis eius eligendi! Nam laboriosam, cumque consequuntur corrupti, nisi iusto explicabo iure quia nostrum odio aperiam dolores?

                                                        <span class="media-info">12 dec 2016
                                                            <a href="#">
                                                                <i class="icofont icofont-reply"></i>
                                                            </a>
                                                        </span>

                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object" src="images/profile/profile-img.jpg" alt="...">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">
                                                                    <a href="#">Anna Doe</a>
                                                                </h4>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem a alias aut, aspernatur veritatis eius eligendi! Nam laboriosam, cumque consequuntur corrupti, nisi iusto explicabo iure quia nostrum odio aperiam dolores?

                                                                <span class="media-info">12 dec 2016
                                                                    <a href="#">
                                                                        <i class="icofont icofont-reply"></i>
                                                                    </a>
                                                                </span>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>

                                                <!-- 2 comments -->
                                                <li class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="images/profile/profile-img.jpg" alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="#">Mark Smith</a>
                                                        </h4>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem a alias aut, aspernatur veritatis eius eligendi! Nam laboriosam, cumque consequuntur corrupti, nisi iusto explicabo iure quia nostrum odio aperiam dolores?

                                                        <span class="media-info">12 dec 2016
                                                            <a href="#">
                                                                <i class="icofont icofont-reply"></i>
                                                            </a>
                                                        </span>

                                                    </div>
                                                </li>

                                                <!-- 3 comments -->
                                                <li class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="images/profile/profile-img.jpg" alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="#">John Doe</a>
                                                        </h4>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem a alias aut, aspernatur veritatis eius eligendi! Nam laboriosam, cumque consequuntur corrupti, nisi iusto explicabo iure quia nostrum odio aperiam dolores?

                                                        <span class="media-info">12 dec 2016
                                                            <a href="#">
                                                                <i class="icofont icofont-reply"></i>
                                                            </a>
                                                        </span>

                                                    </div>
                                                </li>
                                            </ul>

                                            <!-- Paginations -->
                                            <div class="row pagination-wrap">
                                                <div class="col-sm-11 col-sm-offset-1">
                                                    <ul class="pagination">
                                                        <li>
                                                            <a href="#" aria-label="Previous">
                                                                <i class="icofont icofont-curved-left"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="#">01</a></li>
                                                        <li class="active"><a href="#">02</a></li>
                                                        <li><a href="#">03</a></li>
                                                        <li><a href="#">04</a></li>
                                                        <li><a href="#">05</a></li>
                                                        <li>
                                                            <a href="#" aria-label="Next">
                                                                <i class="icofont icofont-curved-right"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Form -->
                                            <div class="add-comment">

                                                <!-- Header -->
                                                <h3 class="header">Add new comments</h3>

                                                <form class="form-horizontal">

                                                    <div class="form-group">
                                                        <label for="inputName" class="col-sm-3 control-label">Enter your name</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputName">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputText" class="col-sm-3 control-label">Enter your message</label>
                                                        <div class="col-sm-7">
                                                            <textarea class="form-control" id="inputText" cols="30" rows="3"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-3 col-sm-7">
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="inputCheckBox1">
                                                                <label for="inputCheckBox1">
                                                                    <span class="checkbox-input">
                                                                        <span class="off">off</span>
                                                                        <span class="on">on</span>
                                                                    </span>
                                                                    get an answer to email
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-3 col-sm-7">
                                                            <button type="submit" class="btn btn-primary btn-material">
                                                                <span class="body">Send message</span>
                                                                <i class="icon icofont icofont-check-circled"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- END: DESCRIPTION & COMMENTS -->

                        </div>

                        <!-- Asside -->
                        <div class="visible-lg col-md-4 col-lg-3 asside">



                            <!-- Asside nav -->
                            <div class="asside-nav bg-white hidden-xs">
                                <div class="header text-uppercase text-white bg-blue">
                                    Category
                                </div>

                                <ul class="nav-vrt bg-white">
                                @foreach($categories as $category)
                                    <li class="active">
                                        <a href="#" class="btn-material">{{$category-> name_category}}
                                            <i class="nav-icon-open icofont icofont-plus"></i>
                                            <i class="nav-icon-close icofont icofont-minus"></i>
                                        </a>
                                    </li>
                                @endforeach


                                </ul>

                            </div><!-- / Asside nav -->

                            <!-- Block tags -->
                            <div class="inblock padding-none hidden-xs">

                                <div class="wrap">

                                    <!-- Header -->
                                    <h3 class="header text-uppercase">Tags</h3>

                                    <!-- Tags list -->
                                    <ul class="tags">
                                        <li><a href="#">e-shop</a></li>
                                        <li><a href="#">Bootstrap</a></li>
                                        <li><a href="#">Material</a></li>
                                        <li><a href="#">SEO</a></li>
                                        <li><a href="#">WordPress</a></li>
                                        <li><a href="#">Drupal</a></li>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">Main Blog</a></li>
                                        <li><a href="#">Landing Page</a></li>
                                    </ul>
                                </div>
                            </div><!-- Block tags -->

                        </div><!-- ./ Asside -->

                    </div>
                </div>
            </div>
        </div>

@endsection


