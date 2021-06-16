@extends('frontend.layouts.app')

@section('title')
Step 2
@endsection

@push('css')
<style>
    .float-block .wrap {
        padding-top: 0;
    }

</style>
@endpush

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

    <!--
            STEPS
            =============================================== -->
    @include('frontend.shoppingCart._step', [
        'step' => 2
    ])
    <!--
            CONTENT
            =============================================== -->
    <div class="row block none-padding-top">

        <div class="col-xs-12 col-md-8 col-lg-9 get-height">
            <div class="sdw-block">
                <div class="wrap bg-white">

                    @if (!Auth::check())
                    <!-- Authirize form -->
                    <div class="row auth-form">

                        <!-- Header & nav -->
                        <div class="col-md-12">

                            <!-- Header -->
                            <h1 class="header text-uppercase">
                               {{ __(' Authentication') }}
                                <span>
                                    {{ __('required') }}
                                </span>
                            </h1>

                        </div>

                        <div class="col">
                            <form action="{{ route('frontend.authenticate.login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="username">{{ __('Username') }}</label>
                                    <input type="text" name="user_name" class="form-control" id="username"
                                        placeholder="{{ __('Username') }}">
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="{{ __('Password') }}" name="password">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="checkbox padding">
                                    <input type="checkbox" id="inputCheckBox2">
                                    <label for="inputCheckBox2">
                                        <span class="checkbox-input">
                                            <span class="off">off</span>
                                            <span class="on">on</span>
                                        </span>
                                        {{ __('remember password') }}
                                    </label>
                                </div>

                                <span class="sdw-wrap">
                                    <button type="submit"
                                        class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">{{ __('Login') }}</button>
                                    <span class="sdw"></span>
                                </span>

                                <ul class="addon-login-btn">
                                    <li>
                                        <a href="{{ route('register') }}">{{ __('register') }}</a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    @endif
                    <!-- / Authirize form -->

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="panel-group" id="accordion">
                                @if (Auth::check())
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingOne">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseOne">
                                                <span class="panel-indicator"></span>
                                                {{ __('Use address from your profile') }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form class="form-horizontal" method="POST" action="{{ route('frontend.cart.update-shipping-address') }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="mode" value="1"/>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label pd-none">{{ __('Shipping address') }}:</label>
                                                    <div class="col-sm-9">
                                                        <span class="text">
                                                            @if (isset(Auth::user()->userAddress->address))
                                                                {{ Auth::user()->userAddress->address }}
                                                            @else
                                                                <a href="{{ route('frontend.user.edit-profile') }}" target="_blank">{{ __('Update shipping address') }}</a>
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label pd-none">{{ __('Note') }}:</label>
                                                    <div class="col-sm-9">
                                                        <textarea type="text" class="form-control" id="administrative_area_level_1" name="note"></textarea>
                                                    </div>
                                                </div>
                                                @if (isset(Auth::user()->userAddress->address))
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-7">
                                                        <button type="submit" class="sdw-hover btn btn-material btn-yellow ripple-cont">{{ __('Accept') }}</button>
                                                    </div>
                                                </div>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <span class="panel-indicator"></span>
                                                {{ __('Use the new address') }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse in">
                                        <div class="panel-body">

                                            <form class="form-horizontal" action="{{ route('frontend.cart.update-shipping-address') }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="mode" value="2"/>
                                                {{-- Customer name --}}
                                                <div class="form-group pd-none">
                                                    <label for="route"
                                                        class="col-sm-3 control-label text-darkness">{{ __('Customer name') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="customer_name" class="form-control" id="route">
                                                        @error('customer_name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- Telephone --}}
                                                <div class="form-group pd-none">
                                                    <label for="route"
                                                        class="col-sm-3 control-label text-darkness">{{ __('Telephone') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="tel" name="telephone" class="form-control" id="route">
                                                        @error('telephone')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- Address --}}
                                                <div class="form-group pd-none">
                                                    <label for="route"
                                                        class="col-sm-3 control-label text-darkness">{{ __('Address') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="address" class="form-control" id="route"/>
                                                        @error('address')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group pd-none">
                                                    <label for="route"
                                                        class="col-sm-3 control-label text-darkness">{{ __('City') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="city" class="form-control" id="route">
                                                        @error('city')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>

                                                <div class="form-group pd-none">
                                                    <label for="locality"
                                                        class="col-sm-3 control-label text-darkness">{{ __('Country') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="locality" name="country">
                                                        @error('country')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group pd-none">
                                                    <label for="administrative_area_level_1"
                                                        class="col-sm-3 control-label text-darkness">{{ __('Note') }}</label>
                                                    <div class="col-sm-8">
                                                        <textarea type="text" class="form-control" id="administrative_area_level_1" name="note"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-8">
                                                        <span class="sdw-wrap">
                                                            <button type="submit"
                                                                class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">
                                                                {{ __('Go to next step') }}</button>
                                                            <span class="sdw"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-4 col-lg-3 fix-height asside hidden-xs hidden-sm">
            @include('frontend.shoppingCart._cart-sidebar')
        </div>
    </div>
    <!-- END: CONTENT -->

</div>
@endsection
