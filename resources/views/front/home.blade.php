<header class="main-header header-style-one">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                <!--Top Left-->
                <div class="top-left">
                    <ul class="list">
                        <li><span class="icon flaticon-clock-2"></span>sun - Fri: 9.30am To 10.00pm</li>
                        <li><a href="mail To:travelgo@gmail.com"><span class="icon flaticon-e-mail-envelope"></span>travelgo@gmail.com</a></li>
                    </ul>
                </div>

                <!--Top Right-->
                <div class="top-right pull-right">
                    <!-- Social Nav -->
                    <ul class="social-nav">
                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa {{asset('frontend/images/menu-logo2.jpg')}}fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    </ul>
                    <div class="phone"><a href="tel:025546789">025546789</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="#"><img src="{{asset('frontend/images/menu-logo2.jpg')}}"  alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        </div>

                        <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="" class="href"></a></li>
                                <li><a href="#">Home</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('tour')}}">Tours</a></li>
                                <li><a href="{{route('destination')}}">Destination</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>

                    </nav>

                    <!-- Outer Box -->
                    <div class="outer-box">

                        <!-- Button Box -->
                        <div class="btn-box">
                            <a href="{{route('contact')}}" class="theme-btn btn-style-one"><i class="map flaticon-maps-and-flags"></i><span class="txt">Destination</span></a>
                        </div>

                        

                        <!-- Nav Btn -->
                        <div class="nav-btn nav-toggler"><span class="icon flaticon-menu"></span></div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-remove"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>