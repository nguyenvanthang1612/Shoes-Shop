@extends('frontend.layouts.app')

@section('title')
    Edit
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

        <!--
        CONTENT
        =============================================== -->
        <div class="row block none-padding-top">

            <div class="col-xs-12">
                <div class="sdw-block">
                    <div class="wrap bg-white">

                        <!-- Authirize form -->
                        <div class="row head-block">

                            <!-- Header & nav -->
                            <div class="col-md-12">

                                <!-- Header -->
                                <h1 class="header text-uppercase">
                                    New user
                                    <span>
                                        registration
                                    </span>
                                </h1>
                            </div>
                        </div>
                        <!-- Authirize form -->

                        <div class="row">

                            <!-- Header & nav -->
                            <div class="col-md-3">

                                <!-- Text -->
                                <p class="text">
                                    Magni labore ratione maiores, laborum quaerat molestiae excepturi. Corporis, necessitatibus earum.
                                </p>

                                <!-- Nav -->
                                <div class="asside-nav no-bg">
                                    <ul class="nav-vrt border">
                                        <li class="active">
                                            <a href="#" class="btn-material">Privacy policy</a>
                                        </li>

                                        <li>
                                            <a href="#" class="btn-material">Terms and conditions</a>
                                        </li>

                                        <li>
                                            <a href="#" class="btn-material">FAQ</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="col-md-9">
                                <form method="POST" action="{{ url('user/edit-page', [$userData->id]) }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="profileInfo">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#bankTransrerColl">
                                                        <span class="panel-indicator"></span>
                                                        Profile info
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="bankTransrerColl" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <div class="form-group pd-none">
                                                        <label for="text" class="col-sm-3 control-label text-darkness">Your User Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text"
                                                                    class="form-control"
                                                                    id="user_name" name="user_name" value="{{$userData->user_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group pd-none">
                                                        <label for="frName" class="col-sm-3 control-label text-darkness">Your first name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text"
                                                                    class="form-control"
                                                                    id="frName" name="first_name" value="{{$userData->first_name}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group pd-none">
                                                        <label for="lnName" class="col-sm-3 control-label text-darkness">Your last name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text"
                                                                    class="form-control"
                                                                    id="lnName" name="last_name" value="{{$userData->last_name}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group pd-none">
                                                        <label for="email" class="col-sm-3 control-label text-darkness">Enter your email</label>
                                                        <div class="col-sm-8">
                                                            <input type="email"
                                                                    class="form-control"
                                                                    id="email" name="email" value="{{$userData->email}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group pd-none">
                                                        <label for="telephone" class="col-sm-3 control-label text-darkness">Enter your Telephone</label>
                                                        <div class="col-sm-8">
                                                            <input type="text"
                                                                    class="form-control"
                                                                    id="telephone" name="telephone" value="{{$userData->telephone}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-3 col-sm-7">
                                                            <button type="submit" class="sdw-hover btn btn-material btn-yellow ripple-cont">
                                                                    Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END: CONTENT -->
        </div>
    </div>

@endsection


