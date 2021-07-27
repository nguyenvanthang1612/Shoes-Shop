<footer>

    <div class="container-fluid bg-blue footer text-white">
        <div class="row">
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5252356825777!2d105.84551011488307!3d21.
                        011659986007622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8bc402bd27%3A0x125318f068f125c9!2zVHJ1bmcgdMOi
                        bSBUaMawxqFuZyBt4bqhaSB2w6AgVsSDbiBwaMOybmcgVsOibiBI4buTLCA1MSBQaOG7kSBMw6ogxJDhuqFpIEjDoG5oLCBMw6ogxJDhuqFpIEjDoG5oLCBIYWkgQs
                        OgIFRyxrBuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1623233948626!5m2!1svi!2s" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>


                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="header text-uppercase">
                                    {{ __('Our contacts') }}
                                </h3>

                                <ul class="list-icon white ">
                                    <li>
                                        <i class="icon icofont icofont-location-pin"></i>
                                        51 Phố Lê Đại Hành, Lê Đại Hành, Hai Bà Trưng, Hà Nội
                                    </li>
                                    <li>
                                        <a href="mailto:shoesshop1268@gmail.com">
                                            <i class="icon icofont icofont-email"></i>
                                            shoesshop1268@gmail.com
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icon icofont icofont-phone-circle"></i>
                                        039 365 60 99
                                    </li>
                                    <li>
                                        <i class="icon icofont icofont-clock-time"></i>
                                        {{ __('Working Days/Hours:Mon - Sun / 9:00AM - 8:00PM') }}
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <ul class="social ">
                                    <li>
                                        <a href="https://www.facebook.com/DC-Shoes-Shop-100157308964620/">
                                            <i class="icofont icofont-social-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/shoes_shop_dc/">
                                            <i class="icofont icofont-social-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid copiright">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span class="copy">
                            © 2021 Shoes Shop Company
                        </span>
                    </div>

                    <div class="col-md-6 ">

                        <ul class="vrt-icons text-yellow pull-right">
                            <li>
                                <i class="icofont icofont-paypal-alt"></i>
                            </li>
                            <li>
                                <i class="icofont icofont-visa-alt"></i>
                            </li>
                            <li>
                                <i class="icofont icofont-mastercard-alt"></i>
                            </li>
                            <li>
                                <i class="icofont icofont-american-express-alt"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    .
</footer>
<!-- END: FOOTER -->

<!--
        REGISTER MODAL
        =============================================== -->



<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">
                        <i class="icofont icofont-close-line"></i>
                    </span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    {{ __('Authorization') }}
                    <span>
                        {{ __('required') }}
                    </span>
                </h4>
            </div>

            <div class="modal-body">

                <!-- Authirize form -->
                <div class="row auth-form">
                    <form action='{{ url("/login") }}' method="POST" id="login-form">
                        {{-- Login failed message --}}
                        <div id="error-login" role="alert"></div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('User Name') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{ __('User Name') }}"
                                name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{ __('Password') }}</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="{{ __('Password') }}" name="password">
                        </div>
                        <div class="checkbox padding">
                            <input type="checkbox" id="inputCheckBox">
                            <label for="inputCheckBox">
                                <span class="checkbox-input">
                                    <span class="off">off</span>
                                    <span class="on">on</span>
                                </span>
                                {{ __('remember password') }}
                            </label>
                        </div>
                        <span class="sdw-wrap">
                            <button type="submit" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont"
                                name="login">{{ __('Login') }}</button>
                            <span class="sdw"></span>
                        </span>
                        <span class="sdw-wrap">
                            <a class="btn" href="{{ url('auth/facebook') }}"
                            style="background: #3B5499; color: #ffffff; width: 100%; text-align: center; display: block; border-radius:3px;">
                            <i class="icon icofont icofont-social-facebook"></i>Facebook
                            </a>
                            <span class="sdw"></span>
                        </span>

                        <ul class="addon-login-btn">
                            <li>
                                <a href='{{ route('register') }}'>{{ __('register') }}</a>
                            </li>
                        </ul>
                    </form>
                </div>
                <!-- / Authirize form -->
            </div>
        </div>
    </div>
</div>


<!-- END: REGISTER MODAL -->
