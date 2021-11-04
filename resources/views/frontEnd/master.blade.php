<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>










    <!-- //for-mobile-apps -->
<link href="{{asset('frontEnd/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('frontEnd/css/flexslider.css')}}" type="text/css" media="screen" />
<link href="{{asset('frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="{{asset('frontEnd/css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />


    <!-- //pignose css -->
    <link href="{{asset('frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="{{asset('frontEnd/js/jquery-2.1.4.min.js')}}"></script>
    <!-- //js -->
    <!-- single -->
    <script src="{{asset('frontEnd/js/imagezoom.js')}}"></script>
    <script src="{{asset('frontEnd/js/jquery.flexslider.js')}}"></script>
    <!-- single -->

    <!-- cart -->
    <script src="{{asset('frontEnd/js/simpleCart.min.js')}}"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type=" text/javascript" src="{{asset('frontEnd/js/bootstrap-3.1.1.min.js')}}"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
        rel='stylesheet' type='text/css'>
    <script src="{{asset('frontEnd/js/jquery.easing.min.js')}}"></script>
</head>

<body>
    <!-- header -->
    <!-- ============================================================ -->
    @include('frontEnd.includes.header')
    <!-- //header-bot -->
    <!-- banner -->
    {{-- ======================= --}}
    @include('frontEnd.includes.menu')
    <!-- //banner-top -->
    <!-- banner -->
    <div class="banner-grid">
        <div id="visual">
            <div class="slide-visual">
                <!-- Slide Image Area (1000 x 424) -->
                <ul class="slide-group">
                    <li><img class="img-responsive" src="{{('/frontEnd/images/')}}/ba1.jpg" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="{{('/frontEnd/images/')}}/ba2.jpg" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="{{('/frontEnd/images/')}}/ba3.jpg" alt="Dummy Image" /></li>
                </ul>

                <!-- Slide Description Image Area (316 x 328) -->
                <div class="script-wrap">
                    <ul class="script-group">
                        <li>
                            <div class="inner-script"><img class="img-responsive"
                                    src="{{('/frontEnd/images/')}}/baa1.jpg" alt="Dummy Image" /></div>
                        </li>
                        <li>
                            <div class="inner-script"><img class="img-responsive"
                                    src="{{('/frontEnd/images/')}}/baa2.jpg" alt="Dummy Image" /></div>
                        </li>
                        <li>
                            <div class="inner-script"><img class="img-responsive"
                                    src="{{('/frontEnd/images/')}}/baa3.jpg" alt="Dummy Image" /></div>
                        </li>
                    </ul>
                    <div class="slide-controller">
                        <a href="#" class="btn-prev"><img src="{{('/frontEnd/images/')}}/btn_prev.png"
                                alt="Prev Slide" /></a>
                        <a href="#" class="btn-play"><img src="{{('/frontEnd/images/')}}/btn_play.png"
                                alt="Start Slide" /></a>
                        <a href="#" class="btn-pause"><img src="{{('/frontEnd/images/')}}/btn_pause.png"
                                alt="Pause Slide" /></a>
                        <a href="#" class="btn-next"><img src="{{('/frontEnd/images/')}}/btn_next.png"
                                alt="Next Slide" /></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <script type="text/javascript" src="{{('/frontEnd/js/pignose.layerslider.js')}}"></script>
        <script type="text/javascript">
        //<![CDATA[
        $(window).load(function() {
            $('#visual').pignoseLayerSlider({
                play: '.btn-play',
                pause: '.btn-pause',
                next: '.btn-next',
                prev: '.btn-prev'
            });
        });
        //]]>
        </script>

    </div>
    <!-- //banner -->
    <!-- content -->

    <div class="new_arrivals">
        <div class="container">
            <h3><span>new </span>arrivals</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            <div class="new_grids">
                <div class="col-md-4 new-gd-left">
                    <img src="{{('/frontEnd/images/')}}/wed1.jpg" alt=" " />
                    <div class="wed-brand simpleCart_shelfItem">
                        <h4>Wedding Collections</h4>
                        <h5>Flat 50% Discount</h5>
                        <p><i>$250</i> <span class="item_price">$500</span><a class="item_add hvr-outline-out button2"
                                href="#">add to cart </a></p>
                    </div>
                </div>
                <div class="col-md-4 new-gd-middle">
                    <div class="new-levis">
                        <div class="mid-img">
                            <img src="{{('/frontEnd/images/')}}/levis1.png" alt=" " />
                        </div>
                        <div class="mid-text">
                            <h4>up to 40% <span>off</span></h4>
                            <a class="hvr-outline-out button2" href="product.html">Shop now </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="new-levis">
                        <div class="mid-text">
                            <h4>up to 50% <span>off</span></h4>
                            <a class="hvr-outline-out button2" href="product.html">Shop now </a>
                        </div>
                        <div class="mid-img">
                            <img src="{{('/frontEnd/images/')}}/dig.jpg" alt=" " />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 new-gd-left">
                    <img src="{{('/frontEnd/images/')}}/wed2.jpg" alt=" " />
                    <div class="wed-brandtwo simpleCart_shelfItem">
                        <h4>Spring / Summer</h4>
                        <p>Shop Men</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //content -->

    <!-- content-bottom -->

    <div class="content-bottom">
        <div class="col-md-7 content-lgrid">
            <div class="col-sm-6 content-img-left text-center">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{('/frontEnd/images/')}}/p1.jpg" alt="image"
                            class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>Mobiles</h4>
                            <span class="separator"></span>
                            <p><span class="item_price">$500</span></p>
                            <span class="separator"></span>
                            <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 content-img-right">
                <h3>Special Offers and 50%<span>Discount On</span> Mobiles</h3>
            </div>

            <div class="col-sm-6 content-img-right">
                <h3>Buy 1 get 1 free on <span> Branded</span> Watches</h3>
            </div>
            <div class="col-sm-6 content-img-left text-center">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{('/frontEnd/images/')}}/p2.jpg" alt="image"
                            class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>Watches</h4>
                            <span class="separator"></span>
                            <p><span class="item_price">$250</span></p>
                            <span class="separator"></span>
                            <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-5 content-rgrid text-center">
            <div class="content-grid-effect slow-zoom vertical">
                <div class="img-box"><img src="{{('/frontEnd/images/')}}/p4.jpg" alt="image"
                        class="img-responsive zoom-img"></div>
                <div class="info-box">
                    <div class="info-content simpleCart_shelfItem">
                        <h4>Shoes</h4>
                        <span class="separator"></span>
                        <p><span class="item_price">$150</span></p>
                        <span class="separator"></span>
                        <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //content-bottom -->
    <!-- product-nav -->


   @yield('mainContent')
    <!-- //product-nav -->
    {{-- =========================== --}}
    @include('frontEnd.includes.cupon')

    <!-- footer -->
   {{-- =========================== --}}
   @include('frontEnd.includes.footer')
    <!-- //footer -->


    <!-- login -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-bottom">
                                <h3>Sign up for free</h3>
                                <form>
                                    <div class="sign-up">
                                        <h4>Email :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                    </div>
                                    <div class="sign-up">
                                        <h4>Re-type Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                    </div>
                                    <div class="sign-up">
                                        <input type="submit" value="REGISTER NOW">
                                    </div>

                                </form>
                            </div>
                            <div class="login-right">
                                <h3>Sign in with your account</h3>
                                <form>
                                    <div class="sign-in">
                                        <h4>Email :</h4>
                                        <input type="text" value="Type here" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                    </div>
                                    <div class="sign-in">
                                        <h4>Password :</h4>
                                        <input type="password" value="Password" onfocus="this.value = '';"
                                            onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="single-bottom">
                                        <input type="checkbox" id="brand" value="">
                                        <label for="brand"><span></span>Remember Me.</label>
                                    </div>
                                    <div class="sign-in">
                                        <input type="submit" value="SIGNIN">
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy
                                Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
</body>

</html>
