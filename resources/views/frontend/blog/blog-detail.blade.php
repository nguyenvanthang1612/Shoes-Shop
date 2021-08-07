@extends('frontend.layouts.app')

@section('title')
    Blog
@endsection

@section('content')
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
                                
                                <!-- Info panel -->
                                <div class="info-panel">
                                    <ul>
                                        <li>{{ $blog->created_at }}</li>
                                        <li><a href="#">{{ $blog->user_name }}</a></li>
                                    </ul>
                                </div>
                                
                                <!-- Header -->
                                <div class="header">
                                    <h1>
                                        {{ $blog->title }}
                                    </h1>
                                </div>
                                
                                <!-- Item body -->
                                <div class="item-body">
                                    {!! $blog->content !!}
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
                                
                                <div class="fb-comments" data-href="{{ route('frontend.blog.blog-detail', $blog->id) }}" data-width="100%" data-numposts="5"></div>
                            </div>
                        </div>
                        <!-- END: COMMENTS -->
                        
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection