  @extends('front.main')
  @section('content')
  <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

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

        <!-- Banner Section -->
        <section class="banner-section" style="background-image:url({{asset('frontend/images/cover.jpg')}})">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Enjoy the tour with <br> TravelGO</h1>
                    <div class="text">We provide travelers with an authentic Nepali experience that they <br> can remember for the rest of their lives</div>
                    <a href="#" class="theme-btn btn-style-two"><span class="txt">Top Destination</span></a>

                    <!-- Destination Form Box -->
                    <div class="destination-form-box">
                        <div class="box-inner ">
                            <div class="default-form ">
                            <form action="{{route('hotel_search')}}">
                                <h4>Search Your Destination</h4>

                            <div class="d-flex">
                                <div class="p-2 flex-fill">
                                    <select name="state" id="state" class="form-control d-inline-flex">
                                        <option value="">State</option>
                                            @foreach ($hotel->unique('state') as $h )
                                            <option value="{{$h->state}}">{{$h->state}}</option>
                                            @endforeach
                                     </select>
                                </div>
                                <div class="p-2 flex-fill">
                                    <select name="city" class="city d-inline-flex" style="">
                                        <option value="0"> Select city</option>
                                     </select>
                                </div>
                                <div class="p-2 flex-fill">
                                    <input type="text" name="location" id='city' class="form-control d-inline-flex" placeholder="location">
                                </div>
                                <div class="p-2 flex-fill">
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">Search Hotel</span></a>
                                </div>
                              </div>

                            <!-- Default Form -->
                    </form>
                    </div>

                    </div>
                    </div>

                    
                    <!-- End Destination Form Box -->

                </div>

            </div>
        </section>
        <!-- End Banner Section -->

        <!-- Agency Section -->
        <section class="agency-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title">Best agency</div>
                                <h2>Why choose our <span class="theme_color">travel <br> agency</span></h2>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, s</p>
                            </div>
                            <div class="row clearfix">

                                <!-- Agency Block -->
                                <div class="agency-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon flaticon-trust"></span>
                                        </div>
                                        <h4>Trust & Safety</h4>
                                        <div class="agency-text">All our cars come from main dealers and go through rigorous checks and tests before they arrive at your door</div>
                                    </div>
                                </div>

                                <!-- Agency Block -->
                                <div class="agency-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon flaticon-plane"></span>
                                        </div>
                                        <h4>Packages 10,000+ </h4>
                                        <div class="agency-text">All our cars come from main dealers and go through rigorous checks and tests before they arrive at your door</div>
                                    </div>
                                </div>

                            </div>
                            <!-- Lower Text -->
                            <div class="lower-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, s</div>
                            <div class="holiday">Make your holiday Special</div>
                        </div>
                    </div>

                    <!-- Images Column -->
                    <div class="images-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="{{ asset('frontend/images/front/front1.jpg') }}" alt=""/>
                            </div>
                            <div class="lower-image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="{{ asset('frontend/images/front/front2.jpg') }}" alt=""/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Agency Section -->

        <!-- Tours Section -->
        <section class="tours-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Perfect Tours</h2>
                    <div class="text"> “Live life with no excuses, travel with no regret.<br> Collect Moments, Not Things.”</div>
                    <div class="big-title">Tours</div>
                </div>
            </div>
            <div class="outer-container">
                <div class="four-item-carousel owl-carousel owl-theme">

                    <!-- Tour Block -->
                    @foreach ($package as $item)
                    <div class="tour-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="tour-detail.html"><img src="images/resource/tour-1.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span> 15+ Review
                                            </div>
                                            <h4><a href="{{route('package',['id'=>$item->id])}}">{{$item->name}}</a></h4>
                                            <div class="location">{{$item->location}} </div>
                                        </div>
                                        <div class="pull-right">
                                            <div class="price">Night/Rs{{$item->price}}</div>
                                            <div class="dates">{{ \Carbon\Carbon::parse($item->from)->isoFormat('MMM Do YYYY')}}-{{ \Carbon\Carbon::parse($item->to)->isoFormat('MMM Do YYYY')}}<span>
                                                2 Days
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="text">Pokhara, the city of lakes, is the second-largest city of Nepal after Kathmandu. Three 8,000-metre (26,000-foot) peaks (Dhaulagiri, Annapurna, Manaslu) can be seen from the city.</div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="{{route('login')}}" class="theme-btn btn-style-one"><span class="txt">Book Now</span></a>
                                        </div>
                                        <div class="pull-right">
                                            <ul class="food-list">
                                                <li><span class="icon flaticon-plane-1"></span>Airpot</li>
                                                <li><span class="icon flaticon-food"></span>Foods</li>
                                                <li><span class="icon flaticon-air-conditioner"></span>Ac</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  
                    @endforeach
                   
                </div>
            </div>
        </section>
        <!-- End Tours Section -->


        <!-- Destination Section -->
        <section class="destinations-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Destinations</h2>
                    <div class="text">“Travel opens your heart, broadens your mind, and fills your life with stories to tell.”</div>
                    <div class="big-title style-two">Trending </div>
                </div>
            </div>
            <div class="outer-container">
                <div class="four-item-carousel owl-carousel owl-theme">

                    <!-- Destinations Block -->
                    <div class="destinations-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/destination-1.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>Indonesia</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tours">40 <span>Tour</span></div>
                        </div>
                    </div>

                    <!-- Destinations Block -->
                    <div class="destinations-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/destination-2.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>Vietnam</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tours">15 <span>Tour</span></div>
                        </div>
                    </div>

                    <!-- Destinations Block -->
                    <div class="destinations-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/destination-3.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>Thailand</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tours">60 <span>Tour</span></div>
                        </div>
                    </div>

                    <!-- Destinations Block -->
                    <div class="destinations-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/destination-4.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>Kashmir Pakistan</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tours">21 <span>Tour</span></div>
                        </div>
                    </div>

                    <!-- Destinations Block -->
                    <div class="destinations-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/destination-1.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>Indonesia</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tours">40 <span>Tour</span></div>
                        </div>
                    </div>

                    <!-- Destinations Block -->
                    <div class="destinations-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/destination-2.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>Vietnam</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tours">15 <span>Tour</span></div>
                        </div>
                    </div>

                    <!-- Destinations Block -->
                    <div class="destinations-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/destination-3.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>Thailand</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tours">60 <span>Tour</span></div>
                        </div>
                    </div>

                    <!-- Destinations Block -->
                    <div class="destinations-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/destination-4.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3>Kashmir Pakistan</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tours">21 <span>Tour</span></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Destination Section -->

        <!-- Counter Section -->
        <section class="counter-section">
            <div class="auto-container">
                <div class="inner-container" style="background-image:url({{asset('frontend/images/background/map-pattern.png')}})">

                    <!-- Fact Counter -->
                    <div class="fact-counter">
                        <div class="row clearfix">

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="count-outer count-box">
                                        <div class="icon flaticon-journey"></div>
                                        <div class="counter-title">Total Travel</div>
                                        <span class="count-text" data-speed="3000ms" data-stop="1">0</span>K+
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="count-outer count-box">
                                        <div class="icon flaticon-travel"></div>
                                        <div class="counter-title">Travel Country</div>
                                        <span class="count-text" data-speed="2000" data-stop="30">0</span>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="count-outer count-box">
                                        <div class="icon flaticon-review"></div>
                                        <div class="counter-title">Five Star Rating</div>
                                        <span class="count-text" data-speed="2000" data-stop="20">0</span>+
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="text">Along with 1000s of cars to choose from, you can apply for finance online and value <br> your existing car all from the comfort of your favourite armchair</div>
                    <div class="btn-box text-center">
                        <a href="#" class="theme-btn btn-style-one"><span class="txt">THINGS TO DO</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Section -->

        <!-- Trip Section -->
        <section class="trip-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Inspiration For Your Next Trip</h2>
                    <div class="text">Once a year go somewhere you have never been before <br> </div>
                    <div class="big-title style-two">NextTrip</div>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme">

                    <!-- Trip Block -->
                    @foreach ($blogs as $b)
                        
                    <div class="trip-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{$b->image}}" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h4><a href="tour-detail.html">{{$b->title}}</a></h4>
                                        <div class="text">{{$b->content}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- End Trip Section -->

        <!-- Testimonial Section -->
        <section class="testimonial-section" style="background-image:url(images/background/pattern-1.png)">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Client Feedback</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme">

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">I really had my doubts at first. I asked for a quote online and the next day I was <br> contacted by a sales representative. The quote came out high so the salesman <br> did a good job to find me a good deal</div>
                            <div class="author-info">
                                <div class="author-image">
                                    <img src="{{asset('frontend/images/resource/author-1.jpg')}}" alt="" />
                                </div>
                                <h4>Raksha Khadka</h4>
                                <div class="designation">Ux & Product Designer</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">I really had my doubts at first. I asked for a quote online and the next day I was <br> contacted by a sales representative. The quote came out high so the salesman <br> did a good job to find me a good deal</div>
                            <div class="author-info">
                                <div class="author-image">
                                    <img src="{{asset('frontend/images/resource/author-1.jpg')}}" alt="" />
                                </div>
                                <h4>Prabin Katuwal</h4>
                                <div class="designation">Ux & Product Designer</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">I really had my doubts at first. I asked for a quote online and the next day I was <br> contacted by a sales representative. The quote came out high so the salesman <br> did a good job to find me a good deal</div>
                            <div class="author-info">
                                <div class="author-image">
                                    <img src="{{asset('frontend/images/resource/author-1.jpg')}}" alt="" />
                                </div>
                                <h4>Ambika Chaudhary</h4>
                                <div class="designation">Ux & Product Designer</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Testimonial Section -->

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>All the latest news</h2>
                    <div class="text">Know about the weather and news about Nepal with our news section<br> </div>
                    <div class="big-title style-two">news</div>
                </div>

                <div class="row clearfix">

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="blog-detail.html"><img src="{{asset('frontend/images/resource/news-1.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li>By Admin</li>
                                    <li>03 January 2020</li>
                                </ul>
                                <h4><a href="blog-detail.html">The Spring season is a great time to visit Nepal.</a></h4>
                                <div class="text">Your donation to Children in Crossfire will make a huge difference in the lives of the children we work with in Tanzania... </div>
                                <a href="blog-detail.html" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="blog-detail.html"><img src="{{asset('frontend/images/resource/news-2.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li>By Admin</li>
                                    <li>03 January 2020</li>
                                </ul>
                                <h4><a href="blog-detail.html">10 things you probably don’t know about hilly region of Nepal</a></h4>
                                <div class="text">Your donation to Children in Crossfire will make a huge difference in the lives of the children we work with in Tanzania... </div>
                                <a href="blog-detail.html" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="blog-detail.html"><img src="{{asset('frontend/images/resource/news-3.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li>By Admin</li>
                                    <li>03 January 2020</li>
                                </ul>
                                <h4><a href="blog-detail.html">7 hotel perks of visiting Nepal in winter season</a></h4>
                                <div class="text">Your donation to Children in Crossfire will make a huge difference in the lives of the children we work </div>
                                <a href="blog-detail.html" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End News Section -->

        <!-- Main Footer -->
      

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

    <!-- Search Popup -->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-multiply"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>

                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Beauty</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">LifeStyle</a></li>
                </ul>

            </div>

        </div>
    </div>
    @endsection
    