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
                                    Edit profile
                                </h1>
                            </div>
                        </div>
                        <!-- Authirize form -->

                        <div class="row">

                            <div class="col">
                                <form method="POST" action="{{ route('frontend.index.update') }}">
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
                                                        <label for="frName" class="col-sm-3 control-label text-darkness">Your first name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text"
                                                                    class="form-control"
                                                                    id="frName" name="first_name" value="{{$userData->first_name}}">
                                                        </div>
                                                        @error('first_name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group pd-none">
                                                        <label for="lnName" class="col-sm-3 control-label text-darkness">Your last name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text"
                                                                    class="form-control"
                                                                    id="lnName" name="last_name" value="{{$userData->last_name}}">
                                                        </div>
                                                        @error('last_name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group pd-none">
                                                        <label for="email" class="col-sm-3 control-label text-darkness">Enter your email</label>
                                                        <div class="col-sm-8">
                                                            <input type="email"
                                                                    class="form-control"
                                                                    id="email" name="email" value="{{$userData->email}}">
                                                        </div>
                                                        @error('email')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
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


