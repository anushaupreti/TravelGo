<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>TravelGo </title>
    <!-- Stylesheets -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('frontend/images/title-logo.jpg')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('frontend/images/title-logo.jpg')}}" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</head>

<body>
    <header class="main-header header-style-one">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="list">
                            <li><span class="icon flaticon-clock-2"></span>24 hours service</li>
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
                                    <li><a href="{{route('front')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('tour')}}">Tours</a></li>
                                    <li><a href="{{route('destination')}}">Destination</a></li>
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li><a href="{{route('contact.create')}}">Contact</a></li>
                                </ul>
                            </div>
    
                        </nav>
    
                        <!-- Outer Box -->
                        <div class="outer-box">

                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="{{route('tour')}}" class="theme-btn btn-style-one"><i class="map flaticon-maps-and-flags"></i><span class="txt">Destination</span></a>
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
                {{-- <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div> --}}
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

          <!-- Hidden Navigation Bar -->
        <section class="hidden-bar right-align">

            <div class="hidden-bar-closer">
                <button><span class="flaticon-multiply"></span></button>
            </div>

            <!-- Hidden Bar Wrapper -->
            <div class="hidden-bar-wrapper">

                <div class="logo">
                    <a href="index.html"><img src="{{asset('frontend/images/menu-logo3.jpg')}}" alt="" /></a>
                </div>
                <div class="content-box">
                    <h2>About Us</h2>
                    <div class="text">Nepal, a landlocked country between India and China, is known for its mountain peaks. The small country contains eight of the 10 highest peaks in the world, including Mount Everest and Kanchenjunga – the world's tallest and third tallest respectively. </div>
                    <a href="{{asset('contact')}}" class="theme-btn btn-style-one"><span class="txt">Contact Us</span></a>
                </div>
                <div class="contact-info">
                    <h2>Contact Info</h2>
                    <ul class="list-style-one">
                        <li><span class="icon fa fa-map-marker"></span>Itahari, Sunsari, NEPAL</li>
                        <li><span class="icon fa fa-phone"></span>025456789</li>
                        <li><span class="icon fa fa-envelope-o"></span>travelgo@gmail.com</li>
                        <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Saturday: Closed</li>
                    </ul>
                </div>
            </div>
            <!-- / Hidden Bar Wrapper -->

        </section>
        <!-- End / Hidden Bar -->
    
    </header>
    @yield('content')
    <footer class="main-footer" style="background-image:url({{asset('frontend/images/background/2.jpg')}})">
        <div class="auto-container">

            <!-- Widgets Section -->
            <div class="widgets-section">

                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{asset('frontend/images/menu-logo3.jpg')}}" alt="" /></a>
                                    </div>
                                    <div class="text">We aim to ensure that you never miss an opportunity to travel.</div>
                                    <!-- Social Nav -->
                                    <ul class="social-nav">
                                        <li class="follow">Follow Us</li>
                                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    </ul>
                                    <div class="newsletter-box">
                                        <div class="newsletter-text">Subscribe to Our Newsletter</div>
                                        <!-- Newsletter Form -->
                                        <div class="newsletter-form">
                                            <form method="post" action="contact.html">
                                                <div class="form-group clearfix">
                                                    <input type="email" name="email" value="" placeholder="Enter Your Email Address" required>
                                                    <button type="submit" class="theme-btn join-btn"><span class="txt">Join</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h5>solutions</h5>
                                    <ul class="footer-list">
                                        <li><a href="#">Activities</a></li>
                                        <li><a href="#">Attractions</a></li>
                                        <li><a href="#">Entertainment</a></li>
                                        <li><a href="#">Events & Festivals</a></li>
                                        <li><a href="#">Food & Restaurants</a></li>
                                        <li><a href="#">Outdoors</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h5>explore</h5>
                                    <ul class="footer-list">
                                        <li><a href="#">Hotels Sitemap</a></li>
                                        <li><a href="#">Flights Sitemap</a></li>
                                        <li><a href="#">Vacations Sitemap</a></li>
                                        <li><a href="#">Rental Cars</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">Cruises Sitemap</a></li>
                                        <li><a href="#">Submit an Event</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
                                    <h5>Update News</h5>
                                    <div class="widget-content">
                                        <div class="news-box">
                                            <h5><a href="blog-single.html">Bucket list how-to: Glamping and trekking in Langtang</a></h5>
                                        </div>
                                        <div class="news-box">
                                            <h5><a href="blog-single.html">10 things you probably don’t know about Annapurna Base Camp</a></h5>
                                        </div>
                                        <div class="news-box">
                                            <h5><a href="blog-single.html">Top 10 trekking spot of Nepal</a></h5>
                                        </div>
                                        <div class="news-box">
                                            <h5><a href="blog-single.html">Village life of Nepal</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="copyright">&copy; 2020 All Rights Reserved Terms of Use </div>
            </div>

        </div>

    </footer>
    
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('frontend/js/appear.js')}}"></script>
    <script src="{{asset('frontend/js/owl.js')}}"></script>
    <script src="{{asset('frontend/js/wow.js')}}"></script>
    <script src="{{asset('frontend/js/parallax.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/js/script.js')}}"></script>
    <script>
        $(document).ready(function(){
          $('#state').change(function(){
              var value=$(this).val();
                $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
             });
             var div=$(this).parent();
             var op="";
            $.ajax({
                type:"GET",
                url:"{{route('locationsearch')}}",
                dataType:'json',
                data:{
                    'data':value
                },
                success:function(data)
                {
                    console.log(data);
                //    op+='<option value="0" Selected Disable>Select location</option>';
                   for(var i=0;i<data.length;i++)
                   {
                        console.log(data[i].id);
                       op+='<option value="'+data[i].city+'">'+data[i].city+'</option>';
                   }
                   div.find('.city').html("");
                   div.find('.city').append(op);
                }
            });
          });
        });
    </script>


</body>

</html>
