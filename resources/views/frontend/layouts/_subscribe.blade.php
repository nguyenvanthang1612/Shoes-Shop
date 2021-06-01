<div class="container-fluid">

            <div class="row parallax-wrap">

                <div class="container block">

                    <div class="row">

                        <div class="col-md-5">

                            <!-- Header -->
                            <span class="comp-header st-18 text-uppercase">
                                Subscribe <br>
                                <span class="text-white">on latest news</span>
                            </span>
                        </div>


                        <div class="col-md-7">

                            <!-- Subscribe form -->
                            <form class="subscribe sdw">
                                <div class="wrap">

                                    <form action="{{ url('admin/send-subcribe-email') }}" method="get">
                                        @csrf

                                        <div class="fields">

                                            <!-- Name -->
                                            <div class="name">
                                                <input type="text" placeholder="Name" name="subcribe_name">
                                            </div>
    
                                            <!-- Email -->
                                            <div class="email">
                                                <input type="text" placeholder="Email" name="subcribe_email">
                                            </div>
    
                                            <!-- Divider (dotts) -->
                                            <div class="divider">
                                                <span></span>
                                            </div>
                                        </div>
    
                                        <!-- Send btn -->
                                        <div class="send-btn">
                                            <button type="submit">
                                                <i class="icofont icofont-send-mail"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Parallax block -->
                <div class="parallax bg-grey-light opc-7"
                     data-parallax-image="images/blocks/bg-02.jpg"
                     data-speed-direction="-.2"></div><!-- / Parallax block -->
            </div><!-- / Parallax wrapper -->
        </div>
