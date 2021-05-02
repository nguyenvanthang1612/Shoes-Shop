@extends('layouts.app');

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
                        <li><a href="#">Blog category</a></li>
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
                            <div class="row shop-item-page">
                                
                                <!-- ITEM GALLERY BLOCK -->
                                <div class="col-sm-4 col-md-5 fix-height">
                                    <div class="item-gallery float-block">
                                       
                                        <div class="owl-carousel image">
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-01.jpg" alt="">
                                            </div>
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-02.jpg" alt="">
                                            </div>
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-03.jpg" alt="">
                                            </div>
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-04.jpg" alt="">
                                            </div>
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-05.jpg" alt="">
                                            </div>
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-06.jpg" alt="">
                                            </div>
                                        </div>

                                        <div class="owl-carousel image-nav hidden-xs">
                                            <div class="item">
                                                <img src="images/shop/item-page/img-01.jpg" alt="">
                                            </div>
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-02.jpg" alt="">
                                            </div>
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-03.jpg" alt="">
                                            </div>
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-04.jpg" alt="">
                                            </div>
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-05.jpg" alt="">
                                            </div>
                                           
                                            <div class="item">
                                                <img src="images/shop/item-page/img-06.jpg" alt="">
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
                                                T-Shirt 
                                                <span class="text-dark">
                                                    Men collections
                                                </span>
                                                <span class="text-dark">
                                                    Fake brand
                                                </span>
                                            </h1>
                                        </div>
                                        
                                        <!-- Sale info -->
                                        <div class="col-md-5 hidden-xs sale-info timer"
                                             data-timer-date="2018, 2, 5, 0, 0, 0">
                                            
                                            <span class="sale-info text-red"><span>Sale</span> -20%</span>

                                            <!-- Timer -->
                                            <div class="timer-body">
                                                <span class="tdtimer-d"></span>d 
                                                <span class="tdtimer-h"></span>h 
                                                <span class="tdtimer-m"></span>m 
                                                <span class="tdtimer-s"></span>s 
                                            </div>
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
                                                
                                                <!-- Sale price -->
                                                <span class="sale">
                                                    <span>$234<small>.00</small></span>
                                                </span>

                                                <!-- Price -->
                                                <span class="price">
                                                   
                                                    <!-- Currency -->
                                                    <span class="curr">$</span>
                                                    225<small>.00</small>
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
                                            <div class="rate">

                                                <div class="rate-info">
                                                    <span class="head">Rating</span> 
                                                    <span class="post-head"> 24 members rate it</span>
                                                </div>

                                                <ul class="stars">
                                                    <li class="active">
                                                        <i class="icofont icofont-star"></i>
                                                    </li>
                                                    <li class="active">
                                                        <i class="icofont icofont-star"></i>
                                                    </li>
                                                    <li class="active">
                                                        <i class="icofont icofont-star"></i>
                                                    </li>
                                                    <li class="active">
                                                        <i class="icofont icofont-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="icofont icofont-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <button class="favorite btn-material">
                                                <i class="icofont icofont-star"></i>
                                                Add to favorite
                                            </button>
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
                                                <li>M</li>
                                                <li>L</li>
                                                <li>SL</li>
                                                <li class="active">XL</li>
                                                <li>XXL</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            
                                            <!-- Header -->
                                            <span class="head">color</span>
                                            
                                            <!-- Color selecting -->
                                            <div class="color-selecting">
                                               
                                                <!-- Sizes -->
                                                <ul class="selecter">
                                                    <li class="gray" data-color-id="1"></li>
                                                    <li class="black" data-color-id="2"></li>
                                                    <li class="red active" data-color-id="3"></li>
                                                    <li class="purp" data-color-id="4"></li>
                                                    <li class="blue" data-color-id="5"></li>
                                                    <li class="aqua" data-color-id="6"></li>
                                                    <li class="green" data-color-id="7"></li>
                                                    <li class="yellow" data-color-id="8"></li>
                                                </ul>
                                            </div><!-- / Color selecting -->
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
                                                Provident, similique quos ipsum quis porro hic, est libero sunt qui fuga, a, debitis! Molestias, explicabo ratione numquam consectetur dolor ad atque quia maiores nam dignissimos quaerat sed laborum expedita provident consequatur ut maxime placeat nesciunt incidunt itaque deserunt recusandae voluptate beatae distinctio?
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
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis hic magni neque sint sapiente ducimus voluptate. Velit vero, cumque quam omnis architecto eum, facere tempora saepe reiciendis ut sunt. Quas aliquam, ipsum voluptas, ut deleniti earum ullam nam incidunt sit vitae veniam rem dicta tenetur vero ab atque consequuntur, quo eos voluptatibus nulla. Quaerat eveniet vel delectus ut autem quasi temporibus illum expedita nemo aut, fugit reiciendis veritatis maiores asperiores ratione cumque, hic eum. Id soluta ipsam quae eveniet illo dolor, molestiae, quam adipisci obcaecati maxime atque nesciunt nisi, sequi aspernatur saepe dolores sunt minima voluptatem hic velit consequatur. Dolorum!
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
                            
                            <!-- Block setup -->
                            <div class="inblock sdw">

                                <div class="wrap bg-white">

                                    <!-- Header -->
                                    <h3 class="header text-uppercase">Price</h3>

                                    <!-- Price amount -->
                                    <div class="price-slider"
                                         data-price-first="75"
                                         data-price-last="423"
                                         data-price-max="850"
                                         data-price-curr="$">

                                        <div class="range"></div>

                                        <div class="amoutn">
                                            <input type="text" class="first" readonly>
                                            <input type="text" class="last" readonly>
                                        </div>
                                    </div><!-- / Price amount -->

                                    <!-- Divider -->
                                    <div class="divider"></div><!-- / Divider -->

                                    <!-- Size selecting -->
                                    <div class="sizer">

                                        <!-- Header -->
                                        <h3 class="header text-uppercase">Size</h3>

                                        <!-- Sizes -->
                                        <ul class="selecter">
                                            <li data-sizer-id="1">M</li>
                                            <li data-sizer-id="2">L</li>
                                            <li data-sizer-id="3">SL</li>
                                            <li class="active" data-sizer-id="4">XL</li>
                                            <li data-sizer-id="5">XXL</li>
                                        </ul>

                                        <div class="range"></div>

                                        <div class="amoutn">
                                            <span class="first">SL</span>
                                            <span class="last">XXL</span>
                                        </div>
                                    </div><!-- / Size selecting -->

                                    <!-- Divider -->
                                    <div class="divider"></div><!-- / Divider -->

                                    <!-- Header -->
                                    <h3 class="header text-uppercase">Color</h3>

                                    <!-- Color selecting -->
                                    <div class="color-selecting">

                                        <!-- Sizes -->
                                        <ul class="selecter">
                                            <li class="gray" data-color-id="1"></li>
                                            <li class="black" data-color-id="2"></li>
                                            <li class="red active" data-color-id="3"></li>
                                            <li class="purp" data-color-id="4"></li>
                                            <li class="blue" data-color-id="5"></li>
                                            <li class="aqua" data-color-id="6"></li>
                                            <li class="green" data-color-id="7"></li>
                                            <li class="yellow" data-color-id="8"></li>
                                        </ul>
                                    </div><!-- / Color selecting -->
                                </div>
                            </div><!-- Block setup -->

                            <!-- Asside nav -->
                            <div class="asside-nav bg-white hidden-xs">
                                <div class="header text-uppercase text-white bg-blue">
                                    Category
                                </div>

                                <ul class="nav-vrt bg-white">
                                    <li class="active">
                                        <a href="#" class="btn-material">Man line
                                            <i class="nav-icon-open icofont icofont-plus"></i>
                                            <i class="nav-icon-close icofont icofont-minus"></i>
                                        </a>

                                        <div class="sub-nav bg-grey-light">
                                            <ul class="sub">
                                                <li>
                                                    <a href="#" class="btn-material">Shirts</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Pants</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Footwear</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Belts</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Bags</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Perfume</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Jewerly</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" class="btn-material">Woman
                                            <i class="nav-icon-open icofont icofont-plus"></i>
                                            <i class="nav-icon-close icofont icofont-minus"></i>
                                        </a>

                                        <div class="sub-nav bg-grey-light">
                                            <ul class="sub">
                                                <li>
                                                    <a href="#" class="btn-material">Shirts</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Pants</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Footwear</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Belts</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Bags</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Perfume</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-material">Jewerly</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" class="btn-material">Jewerly</a>
                                    </li>

                                    <li>
                                        <a href="#" class="btn-material">Electronics</a>
                                    </li>
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
        

