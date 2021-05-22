<!--Start left side Menu-->
<div class="left-side sticky-left-side">

    <!--logo-->
    <div class="logo">
        <a href="index.html"><img src="{{ asset('backend/assets/images/logo.png') }}" alt=""></a>
    </div>

    <div class="logo-icon text-center">
        <a href="index.html"><img src="{{ asset('backend/assets/images/logo-icon.png') }}" alt=""></a>
    </div>
    <!--logo-->

    <div class="left-side-inner">
        <!--Sidebar nav-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li><a href="{{ url('/admin') }}"><i class="icon-home"></i> <span>Dashboard</span></a></li>

            <li ><a href="{{ url('/admin/categories') }}"><i class="fa fa-list" aria-hidden="true"></i> <span>Category</span></a></li>

            <li class="menu-list"><a href="#"><i class="icon-layers" aria-hidden="true"></i><span>Product</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ url('/admin/product/create') }}">Create Product</a></li>
                    <li><a href="{{ url('/admin/product') }}">All</a></li>
                    <li><a href="{{ url('/admin/product/man') }}">Man</a></li>
                    <li><a href="{{ url('/admin/product/woman') }}">Woman</a></li>
                    <li><a href="{{ url('/admin/product/kid') }}">Kid</a></li>
                </ul>
            </li>
            
            <li class="menu-list"><a href="#"><i class="icon-envelope-open"></i> <span>Mail</span></a>
                <ul class="sub-menu-list">
                    <li><a href=""> Inbox</a></li>
                    <li><a href=""> Compose Mail</a></li>
                </ul>
            </li>
            
            <li class="menu-list"><a href="#"><i class="icon-user"></i> <span>Account</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ url('/admin/account/client_management') }}">Client Management</a></li>
                    <li><a href="{{ url('/admin/account/admin_management') }}">Admin Management</a></li>
                    <li><a href="{{ url('/admin/account/create_account') }}">Create Account</a></li>
                </ul>
            </li>

            <li><a href=""><i class="ti-truck"></i> <span>Order</span></a></li>
            <li><a href=""><i class="ti-money"></i> <span>Statistical</span></a></li>
            <li><a href=""><i class="icon-credit-card"></i> <span>Bill</span></a></li>
        </ul>
        <!--End sidebar nav-->

    </div>
</div>
<!--End left side menu-->