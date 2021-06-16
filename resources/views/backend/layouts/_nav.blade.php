<!--Start left side Menu-->
<div class="left-side sticky-left-side">

    <!--logo-->
    <div class="logo">
        <a href="{{ url('/admin') }}"><img src="{{ asset('backend/assets/images/logo-fix.png') }}" alt="" width="135px"></a>
    </div>

    <div class="logo-icon text-center">
        <a href="{{ url('/admin') }}"><img src="{{ asset('backend/assets/images/logo-icon1.png') }}" alt="" style="width: 40px; height: 40px"></a>
    </div>
    <!--logo-->

    <div class="left-side-inner">
        <!--Sidebar nav-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li><a href="{{ route('admin.index') }}"><i class="icon-home"></i> <span>{{ __('Dashboard') }}</span></a></li>

            <li ><a href="{{ url('/admin/categories') }}"><i class="fa fa-list" aria-hidden="true"></i> <span>{{ __('Category') }}</span></a></li>

            <li class="menu-list"><a href="#"><i class="icon-layers" aria-hidden="true"></i><span>{{ __('Product') }}</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ url('/admin/product/create') }}">{{ __('Create Product') }}</a></li>
                    <li><a href="{{ url('/admin/product') }}">{{ __('All') }}</a></li>
                    <li><a href="{{ url('/admin/product/man') }}">{{ __('Man') }}</a></li>
                    <li><a href="{{ url('/admin/product/woman') }}">{{ __('Woman') }}</a></li>
                    <li><a href="{{ url('/admin/product/kid') }}">{{ __('Kid') }}</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href="#"><i class="icon-user"></i> <span>{{ __('Account') }}</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ url('/admin/account/client_management') }}">{{ __('Client Management') }}</a></li>
                    <li><a href="{{ url('/admin/account/admin_management') }}">{{ __('Admin Management') }}</a></li>
                    <li><a href="{{ url('/admin/account/create_account') }}">{{ __('Create Admin Account') }}</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href=""><i class="ti-truck"></i> <span>{{ __('Order') }}</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ url('/admin/order') }}"> {{ __('All Order') }}</a></li>
                    <li><a href="{{ url('/admin/order/order-item') }}"> {{ __('All Order Item') }}</a></li>
                    <li><a href="{{ url('/admin/order/shipping') }}"> {{ __('Shipping') }}</a></li>
                </ul>
            </li>

            <li><a href="{{ url('/admin/statistical') }}"><i class="ti-money"></i> <span>{{ __('Statistical') }}</span></a></li>

            <li><a href="{{ url('/admin/subcribe') }}"><i class="fa fa-bell"></i> <span>{{ __('Subcribe List') }}</span></a></li>

            <li class="menu-list"><a href="#"><i class="fa fa-language" aria-hidden="true"></i> <span>{{ __('Language') }}</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ route('change-language-admin', ['en']) }}">{{ __('English') }}</a></li>
                    <li><a href="{{ route('change-language-admin', ['vi']) }}">{{ __('Vietnamese') }}</a></li>
                </ul>
            </li>
        </ul>
        <!--End sidebar nav-->

    </div>
</div>
<!--End left side menu-->
