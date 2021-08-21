        <!-- 
        BLOCK LATEST ON BLOG
        =============================================== -->
        <div class="container-fluid block space-top">
            <div class="row">
                    <div class="container">
                        <div class="row">
                           
                            <!-- Asside -->
                            <div class="col-md-4 col-lg-3 asside">
                                
                                <div class="inblock padding-none">

                                    <div class="wrap">
                                
                                        <span class="comp-header st-16 text-uppercase">
                                            {{ __('Latest') }}
                                            <span class="text-grey">
                                                {{ __('on blog') }}
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="inblock padding-none hidden-xs">
                                    <span class="sdw-wrap">
                                        <a href="{{ url('/blogs') }}" class="sdw-hover btn btn-material btn-yellow btn-lg">
                                            <span class="body">
                                                {{ __('View all blogs') }}
                                            </span>
                                        </a>
                                        <span class="sdw"></span>
                                    </span>
                                </div>
                                
                                <!-- List categories for mobile -->
                                <div class="inblock padding-none visible-xs">
                                    <div class="mobile-category nav-close">
                                        
                                        <!-- Header -->
                                        <div class="header bg-blue">
                                            <span class="head">Category</span>

                                            <span class="btn-swither" >
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </div>

                                        <ul class="nav-vrt bg-white">
                                            <li class="active">
                                                <a href="#" class="btn-material">Man line
                                                    <i class="nav-icon-open icofont icofont-curved-right"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="btn-material">Woman</a>
                                            </li>

                                            <li>
                                                <a href="#" class="btn-material">Jewerly</a>
                                            </li>

                                            <li>
                                                <a href="#" class="btn-material">Electronics</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div><!-- ./ Asside -->
                            
                            <!-- Item list -->
                            <div class="col-md-8 col-lg-9">
                                <div class="owl-carousel owl-default latest-on-blog nav-bottom-right">
                                    
                                    @foreach ($featureBlogs as $blog)
                                        @if ($blog->status === 0)
                                            <!-- Item 1 -->
                                            <div class="blog-item">
                                                <div class="wrap" style="width:261.59px; height:365.8px">
                                                    
                                                    <!-- Image -->
                                                    <div class="image">
                                                        <img style="width: 261px; height: 147px" src="{{ asset("storage/backend/blog/{$blog->image}") }}" >
                                                    </div>
                                                    
                                                    <!-- Caption -->
                                                    <div class="caption">
                                                        
                                                        <!-- Header -->
                                                        <h3 class="header">
                                                        
                                                            <!-- Date -->
                                                            <span class="date">
                                                                {{ $blog->created_at }}
                                                            </span>
                                                            
                                                            <span class="text-uppercase">
                                                                {{ $blog->title }}
                                                            </span>
                                                        </h3>
                                                        
                                                        {{-- <!-- Text -->
                                                        <p class="text">Fugiat mollitia vero, id eligendi non suscipit <span class="hidden-xs">laboriosam maiores, perspiciatis ullam eveniet molestiae, nesciunt est ipsa veniam consequuntur in totam.</span></p> --}}
                                                        
                                                        <!-- More link -->
                                                        <a href="{{ route('frontend.blog.blog-detail', $blog->id) }}" class="more-info">{{ __('More info') }}</a>
                                                        
                                                        {{-- <!-- Rate -->
                                                        <div class="rate inline">

                                                            <ul class="stars">
                                                                <li class="active">
                                                                    <i class="icofont icofont-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont icofont-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont icofont-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont icofont-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont icofont-star"></i>
                                                                </li>
                                                            </ul>

                                                            <div class="rate-info">
                                                                23 members
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    
                                </div>
                            </div><!-- ./ Item list -->
                        </div>
                    </div>
            </div>
        </div>
        <!-- END: LATEST ON BLOG -->