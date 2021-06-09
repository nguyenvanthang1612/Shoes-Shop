@extends('frontend.layouts.app')

@section('title')
Update profile
@endsection

@section('content')
<!--
        BREADCRUMBS
        =============================================== -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <ol class="breadcrumb bg-blue">
                <li><a href="{{ url('/') }}">{{ __('Homepage') }}</a></li>
                <li class="active">{{ __('Register') }}</li>
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
                                {{ __('Edit profile') }}
                            </h1>
                        </div>
                    </div>
                    <!-- Authirize form -->

                    <div class="row">

                        <form class="form-horizontal" method="POST" action="{{ route('frontend.user.update-profile') }}">
                            @csrf
                            @method('PUT')
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="profileInfo">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion"
                                                href="#bankTransrerColl">
                                                <span class="panel-indicator"></span>
                                                {{ __('Profile info') }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="bankTransrerColl" class="panel-collapse collapse in">
                                        <div class="panel-body">

                                            <div class="form-group pd-none register-field">
                                                <label for="frName"
                                                    class="col-sm-3 control-label text-darkness">
                                                    {{ __('Your first name') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="frName"
                                                        name="first_name" value="{{ old('first_name',$user->first_name) }}"/>
                                                    @error('first_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group pd-none register-field">
                                                <label for="lnName"
                                                    class="col-sm-3 control-label text-darkness">
                                                    {{ __('Your last name') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="lnName"
                                                        name="last_name" value="{{ old('last_name', $user->last_name) }}"/>
                                                    @error('last_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group pd-none register-field">
                                                <label for="email"
                                                    class="col-sm-3 control-label text-darkness">
                                                    {{ __('Enter your email') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" value="{{ old('email', $user->email) }}">
                                                    @error('email')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group pd-none register-field">
                                                <label for="telephone"
                                                    class="col-sm-3 control-label text-darkness">
                                                    {{ __('Enter your Telephone') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="telephone"
                                                        name="telephone" value="{{ old('telephone', $user->telephone) }}">
                                                    @error('telephone')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" id="addressSet">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseTwo">
                                                <span class="panel-indicator"></span>
                                                {{ __('Address') }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="form-group pd-none register-field">
                                                <label for="route" class="col-sm-3 control-label text-darkness">
                                                    {{ __('Address') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="address"
                                                        name="address" value="{{ old('address', $userAddress->address)  }}" />
                                                </div>
                                            </div>

                                            <div class="form-group pd-none register-field">
                                                <label for="locality"
                                                    class="col-sm-3 control-label text-darkness">{{ __('City') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $userAddress->city) }}">
                                                </div>
                                            </div>
                                            <div class="form-group pd-none register-field">
                                                <label for="country"
                                                    class="col-sm-3 control-label text-darkness">{{ __('Country') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="country"
                                                        name="country" value="{{ old('country', $userAddress->country) }}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-7">
                                    <button type="submit"
                                        class="sdw-hover btn btn-material btn-yellow ripple-cont">
                                        {{ __('Update profile') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- END: CONTENT -->
    </div>
</div>
@endsection
