@extends('layouts.app');

@section('title')
    Blog Items
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
                            <div class="row blog-item-page">
                                
                                <div class="col-md-12">
                                    
                                    <!-- Image -->
                                    <div class="image">
                                        <img src="images/blog/img-01-big.jpg" alt="">
                                    </div>
                                    
                                    <!-- Info panel -->
                                    <div class="info-panel">
                                        <ul>
                                            <li>12 december 2017</li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">John Doe</a></li>
                                        </ul>
                                    </div>
                                    
                                    <!-- Header -->
                                    <div class="header">
                                        <h1>
                                            Aliquam earum eum expedita quo quasi?
                                        </h1>
                                    </div>
                                    
                                    <!-- Item body -->
                                    <div class="item-body">
                                       
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam veniam quas beatae, provident facilis, voluptatibus accusamus alias eveniet. Id cupiditate commodi sed quis ex totam illo sint nesciunt explicabo quidem molestias inventore dolor, exercitationem ratione dignissimos laborum quam iure nisi, eaque quibusdam aspernatur rem doloremque dolores vitae. Minima saepe, rem assumenda natus tenetur non facere sed voluptatibus eligendi aperiam hic, quam dolor itaque modi autem enim dolore eum iure adipisci necessitatibus magni accusantium odio, molestiae deleniti! Tempora, corporis quibusdam ea voluptatum temporibus animi asperiores quisquam beatae modi id doloribus quod consequatur, reprehenderit maiores quidem velit neque, voluptas sapiente! Omnis quasi quas nihil natus illum.
                                        </p>
                                        
                                        <p>
                                            Nam voluptatibus atque adipisci, similique fuga nulla cum sequi eius! A suscipit, dolores illum animi ratione et sed dolor sequi quis illo error pariatur eligendi, nemo, voluptates quae, neque voluptas ut vitae! Quidem eum veritatis, tempore ab incidunt dolore quas sint deleniti pariatur, animi quod! Optio odio repellendus veritatis officiis unde illo porro aspernatur expedita ipsum. Dolores aliquam ea illo odit sunt, repellat temporibus non autem officiis harum provident ducimus architecto commodi rem impedit, suscipit quos, reprehenderit perferendis. Provident obcaecati ullam ex, tempore qui corporis doloremque. Perferendis vitae non blanditiis quod quisquam, numquam. Nostrum, eaque, dicta?
                                        </p>
                                    </div>
                                    
                                    <!-- Item info panel -->
                                    <div class="item-info-panel">
                                        
                                        <!-- Tags -->
                                        <ul class="item-tags">
                                            
                                            <li class="head">tags:</li>
                                            <li>
                                                <a href="#">e-shop</a>
                                            </li>
                                            <li>
                                                <a href="#">bootstrap</a>
                                            </li>
                                            <li>
                                                <a href="#">wordpress</a>
                                            </li>
                                            <li>
                                                <a href="#">creative</a>
                                            </li>
                                        </ul>
                                        
                                        <ul class="social">
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-social-facebook"></i>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-social-google-plus"></i>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-social-twitter"></i>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-social-vk"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- END: MAIN INFO -->
                            
                            <!--
                            COMMENTS
                            =============================================== -->
                            <div class="row">
                                <div class="col-xs-12 comments">
                                    
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
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputName">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="inputText" class="col-sm-3 control-label">Enter your message</label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control" id="inputText" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-6">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="inputCheckBox-2">
                                                        <label for="inputCheckBox-2">
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
                                                <div class="col-sm-offset-3 col-sm-6">
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
                            <!-- END: COMMENTS -->
                            
                            
                        </div>

                        <!-- Asside -->
                        <div class="visible-lg col-md-4 col-lg-3 asside">

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
        

