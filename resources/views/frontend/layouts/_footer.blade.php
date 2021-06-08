<footer>

    <div class="container-fluid bg-blue footer text-white">
        <div class="row">
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6676691367893!2d105.802413814883!3d21.00595468601074!2m3!1f0!2f0!3f0!3m2!1i1024!
                        2i768!4f13.1!3m3!1m2!1s0x313454b5534fb3bf%3A0x3af152649f6b709a!2sItplus%20Academy!5e0!3m2!1svi!2s!4v1623076299784!5m2!1svi!2s" width="600" height="450" 
                        style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
                    </div>


                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="header text-uppercase">
                                    Our contacts
                                </h3>

                                <ul class="list-icon white ">
                                    <li>
                                        <i class="icon icofont icofont-location-pin"></i>
                                        1 Hoang Dao Thuy, Nhan Chinh, Thanh Xuan, Ha Noi
                                    </li>
                                    <li>
                                        <a href="mailto:info@example.com">
                                            <i class="icon icofont icofont-email"></i>
                                            shoesshop12@gmail.com
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icon icofont icofont-phone-circle"></i>
                                        039 365 60 99
                                    </li>
                                    <li>
                                        <i class="icon icofont icofont-clock-time"></i>
                                        Working Days/Hours:
                                        Mon - Sun / 9:00AM - 8:00PM
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <ul class="social ">
                                    <li>
                                        <a href="https://www.facebook.com/Q-and-T-Shoes-Shop-100157308964620">
                                            <i class="icofont icofont-social-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-instagram"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-youtube-play"></i>
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
                    Authorization
                    <span>
                        required
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
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name"
                                name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" name="password">
                        </div>
                        <div class="checkbox padding">
                            <input type="checkbox" id="inputCheckBox">
                            <label for="inputCheckBox">
                                <span class="checkbox-input">
                                    <span class="off">off</span>
                                    <span class="on">on</span>
                                </span>
                                remember password
                            </label>
                        </div>
                        <span class="sdw-wrap">
                            <button type="submit" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont"
                                name="login">Login</button>
                            <span class="sdw"></span>
                        </span>

                        <ul class="addon-login-btn">
                            <li>
                                <a href='{{ route('register') }}'>register</a>
                            </li>
                            <li>or</li>
                            <li>
                                <a href="#">restore password</a>
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
