@extends('front.main')
@section('content')

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


        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/6.jpg)">
            <div class="auto-container">
                <h2>Tours</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>Tours</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Sidebar Page Container -->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar">

                            <!-- Sidebar Widget -->
                            <div class="sidebar-widget search-tour-widget">
                                <div class="widget-content">

                                    <!-- Tour Search Tabs-->
                                    <div class="tour-search-tabs">
                                        <!-- Tours Tabs -->
                                        <div class="tour-tabs tabs-box">

                                            <!--Tab Btns-->
                                            <ul class="tab-btns tab-buttons clearfix">
                                                <li data-tab="#prod-details" class="tab-btn active-btn">Search Tours</li>
                                                <li data-tab="#prod-info" class="tab-btn">Hotel Card available</li>
                                            </ul>

                                            <!--Tabs Container-->
                                            <div class="tabs-content">

                                                <!--Tab / Active Tab-->
                                                <div class="tab active-tab" id="prod-details">
                                                    <div class="content">

                                                        <!-- Default Form -->
                                                        <div class="default-form">
                                                            <form method="post" action="contact.html">

                                                                <!-- Form Group -->
                                                                <div class="form-group">
                                                                    <label>Destination</label>
                                                                    <input type="text" name="text" placeholder="Type your destination" required>
                                                                </div>

                                                                <!-- Form Group -->
                                                                <div class="form-group">
                                                                    <label>Starts</label>
                                                                    <input type="text" name="text" placeholder="30 January, 2020" required>
                                                                </div>

                                                                <!-- Form Group -->
                                                                <div class="form-group">
                                                                    <label>2 guests</label>
                                                                    <select class="custom-select-box">
																	<option>Guests</option>
																	<option>01 Guests</option>
																	<option>02 Guests</option>
																	<option>03 Guests</option>
																	<option>04 Guests</option>
																</select>
                                                                </div>

                                                                <!-- Form Group -->
                                                                <div class="form-group">
                                                                    <label>Travel type</label>
                                                                    <select class="custom-select-box">
																	<option>Trakking</option>
																	<option>01 Trakking</option>
																	<option>02 Trakking</option>
																	<option>03 Trakking</option>
																	<option>04 Trakking</option>
																</select>
                                                                </div>

                                                                <!-- Form Group -->
                                                                <div class="form-group">
                                                                    <div class="range-slider-one clearfix">
                                                                        <label>Price Range</label>
                                                                        <div class="area-range-slider"></div>
                                                                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                                                        <div class="title clearfix">
                                                                            Min <span>Max</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="separet margin-top"></div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>&nbsp;</label>
                                                                    <button type="submit" class="theme-btn btn-style-one"><i class="map flaticon-maps-and-flags"></i><span class="txt">Search Now</span></button>
                                                                </div>

                                                        </div>
                                                        </form>

                                                    </div>
                                                </div>

                                                <!-- Tab -->
                                                <div class="tab" id="prod-info">
                                                    <div class="content">

                                                        <!-- Default Form -->
                                                        <div class="default-form">
                                                            <form method="post" action="contact.html">

                                                                <!-- Form Group -->
                                                                <div class="form-group">
                                                                    <label>Destination</label>
                                                                    <input type="text" name="text" placeholder="Type your destination" required>
                                                                </div>

                                                                <!-- Form Group -->
                                                                <div class="form-group">
                                                                    <label>Starts</label>
                                                                    <input type="text" name="text" placeholder="30 January, 2020" required>
                                                                </div>

                                                                <!-- Form Group -->
                                                                <div class="form-group">
                                                                    <label>2 guests</label>
                                                                    <select class="custom-select-box">
																	<option>Guests</option>
																	<option>01 Guests</option>
																	<option>02 Guests</option>
																	<option>03 Guests</option>
																	<option>04 Guests</option>
																</select>
                                                                </div>

                                                                <!-- Form Group -->
                                                                <div class="form-group">
                                                                    <label>Travel type</label>
                                                                    <select class="custom-select-box">
																	<option>Trakking</option>
																	<option>01 Trakking</option>
																	<option>02 Trakking</option>
																	<option>03 Trakking</option>
																	<option>04 Trakking</option>
																</select>
                                                                </div>

                                                                <!-- Form Group -->
                                                                <div class="form-group">
                                                                    <div class="range-slider-one clearfix">
                                                                        <label>Price Range</label>
                                                                        <div class="area-range-slider"></div>
                                                                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                                                        <div class="title clearfix">
                                                                            Min <span>Max</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="separet margin-top"></div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>&nbsp;</label>
                                                                    <button type="submit" class="theme-btn btn-style-one"><i class="map flaticon-maps-and-flags"></i><span class="txt">Search Now</span></button>
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

                            <!-- Sidebar Widget -->
                            <div class="sidebar-widget search-tour-widget">
                                <div class="widget-content">

                                    <!-- Tour Search Tabs-->
                                    <div class="tour-search-tabs">
                                        <!-- Tours Tabs -->
                                        <div class="tour-tabs tabs-box">

                                            <!--Tab Btns-->
                                            <ul class="tab-btns tab-buttons clearfix">
                                                <li data-tab="#prod-filter" class="tab-btn active-btn">Search Tours</li>
                                                <li data-tab="#prod-card" class="tab-btn">Hotel Card available</li>
                                            </ul>

                                            <!--Tabs Container-->
                                            <div class="tabs-content">

                                                <!--Tab / Active Tab-->
                                                <div class="tab active-tab" id="prod-filter">
                                                    <div class="content">

                                                        <!-- Tours Selection Form -->
                                                        <div class="tours-selection-form">
                                                            <form method="post" action="index.html">
                                                                <h5>Categories </h5>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-1">
                                                                        <label for="service-1">Adventure</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-2">
                                                                        <label for="service-2">Traking</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-3">
                                                                        <label for="service-3">Historical</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-4">
                                                                        <label for="service-4">Japan</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-5">
                                                                        <label for="service-5">Indonesia</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-6">
                                                                        <label for="service-6">Bangladesh</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-7">
                                                                        <label for="service-7">Thailand</label>
                                                                    </div>
                                                                </div>

                                                                <h5>Duration</h5>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-8">
                                                                        <label for="service-8">1 days</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-9">
                                                                        <label for="service-9">1-3 days</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-10">
                                                                        <label for="service-10">5 days</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-11">
                                                                        <label for="service-11">7+ Days Tour</label>
                                                                    </div>
                                                                </div>

                                                                <h5>Places</h5>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-12">
                                                                        <label for="service-12">Avsallar</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-13">
                                                                        <label for="service-13">India</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-14">
                                                                        <label for="service-14">Nepal</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-14">
                                                                        <label for="service-14">Bangladesh</label>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- Tab -->
                                                <div class="tab" id="prod-card">
                                                    <div class="content">

                                                        <!-- Tours Selection Form -->
                                                        <div class="tours-selection-form">
                                                            <form method="post" action="index.html">
                                                                <h5>Categories </h5>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-15">
                                                                        <label for="service-15">Adventure</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-16">
                                                                        <label for="service-16">Traking</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" name="shipping-option" id="service-17">
                                                                        <label for="service-17">Historical</label>
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

                        </aside>
                    </div>

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="our-tours">

                            <!--Sort By-->
                            <div class="items-sorting">
                                <div class="row clearfix">
                                    <div class="results-column col-lg-5 col-md-12 col-sm-12">
                                        <h6>15 tours found</h6>
                                    </div>
                                    <div class="select-column pull-right col-lg-7 col-md-12 col-sm-12">
                                        <div class="sort">Short by</div>
                                        <div class="form-group">
                                            <select name="sort-by">
											<option>Most relevant</option>
											<option>By Order</option>
											<option>By Price</option>
										</select>
                                        </div>
                                        <ul class="page-view-list">
                                            <li class="active"><a href="#"><span class="icon flaticon-list"></span></a></li>
                                            <li><a href="#"><span class="icon flaticon-menu-4"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">

                                <!-- Tour Block Two -->
                                <div class="tour-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="tour-detail.html"><img src="images/resource/tour-5.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <div class="price">$150 <br> Night</div>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span> 15+ Review
                                            </div>
                                            <h4><a href="tour-detail.html">The Cosmopolitan Of <br> Las Vegas</a></h4>
                                            <div class="location">Bali, Indonesia</div>
                                            <div class="hotel-info">5 Days / 6 Nights <span>Minimum 6 people</span></div>
                                            <ul class="food-list">
                                                <li><span class="icon flaticon-plane-1"></span>Airpot</li>
                                                <li><span class="icon flaticon-food"></span>Foods</li>
                                                <li><span class="icon flaticon-air-conditioner"></span>Ac</li>
                                            </ul>
                                            <a href="tour-detail.html" class="theme-btn btn-style-one"><span class="txt">Book Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tour Block Two -->
                                <div class="tour-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="tour-detail.html"><img src="images/resource/tour-6.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <div class="price">$150 <br> Night</div>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span> 15+ Review
                                            </div>
                                            <h4><a href="tour-detail.html">The Cosmopolitan Of <br> Las Vegas</a></h4>
                                            <div class="location">Bali, Indonesia</div>
                                            <div class="hotel-info">5 Days / 6 Nights <span>Minimum 6 people</span></div>
                                            <ul class="food-list">
                                                <li><span class="icon flaticon-plane-1"></span>Airpot</li>
                                                <li><span class="icon flaticon-food"></span>Foods</li>
                                                <li><span class="icon flaticon-air-conditioner"></span>Ac</li>
                                            </ul>
                                            <a href="tour-detail.html" class="theme-btn btn-style-one"><span class="txt">Book Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tour Block Two -->
                                <div class="tour-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="tour-detail.html"><img src="images/resource/tour-7.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <div class="price">$150 <br> Night</div>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span> 15+ Review
                                            </div>
                                            <h4><a href="tour-detail.html">The Cosmopolitan Of <br> Las Vegas</a></h4>
                                            <div class="location">Bali, Indonesia</div>
                                            <div class="hotel-info">5 Days / 6 Nights <span>Minimum 6 people</span></div>
                                            <ul class="food-list">
                                                <li><span class="icon flaticon-plane-1"></span>Airpot</li>
                                                <li><span class="icon flaticon-food"></span>Foods</li>
                                                <li><span class="icon flaticon-air-conditioner"></span>Ac</li>
                                            </ul>
                                            <a href="tour-detail.html" class="theme-btn btn-style-one"><span class="txt">Book Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tour Block Two -->
                                <div class="tour-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="tour-detail.html"><img src="images/resource/tour-8.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <div class="price">$150 <br> Night</div>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span> 15+ Review
                                            </div>
                                            <h4><a href="tour-detail.html">The Cosmopolitan Of <br> Las Vegas</a></h4>
                                            <div class="location">Bali, Indonesia</div>
                                            <div class="hotel-info">5 Days / 6 Nights <span>Minimum 6 people</span></div>
                                            <ul class="food-list">
                                                <li><span class="icon flaticon-plane-1"></span>Airpot</li>
                                                <li><span class="icon flaticon-food"></span>Foods</li>
                                                <li><span class="icon flaticon-air-conditioner"></span>Ac</li>
                                            </ul>
                                            <a href="tour-detail.html" class="theme-btn btn-style-one"><span class="txt">Book Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tour Block Two -->
                                <div class="tour-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="tour-detail.html"><img src="images/resource/tour-9.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <div class="price">$150 <br> Night</div>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span> 15+ Review
                                            </div>
                                            <h4><a href="tour-detail.html">The Cosmopolitan Of <br> Las Vegas</a></h4>
                                            <div class="location">Bali, Indonesia</div>
                                            <div class="hotel-info">5 Days / 6 Nights <span>Minimum 6 people</span></div>
                                            <ul class="food-list">
                                                <li><span class="icon flaticon-plane-1"></span>Airpot</li>
                                                <li><span class="icon flaticon-food"></span>Foods</li>
                                                <li><span class="icon flaticon-air-conditioner"></span>Ac</li>
                                            </ul>
                                            <a href="tour-detail.html" class="theme-btn btn-style-one"><span class="txt">Book Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tour Block Two -->
                                <div class="tour-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="tour-detail.html"><img src="images/resource/tour-10.jpg" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <div class="price">$150 <br> Night</div>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-o"></span> 15+ Review
                                            </div>
                                            <h4><a href="tour-detail.html">The Cosmopolitan Of <br> Las Vegas</a></h4>
                                            <div class="location">Bali, Indonesia</div>
                                            <div class="hotel-info">5 Days / 6 Nights <span>Minimum 6 people</span></div>
                                            <ul class="food-list">
                                                <li><span class="icon flaticon-plane-1"></span>Airpot</li>
                                                <li><span class="icon flaticon-food"></span>Foods</li>
                                                <li><span class="icon flaticon-air-conditioner"></span>Ac</li>
                                            </ul>
                                            <a href="tour-detail.html" class="theme-btn btn-style-one"><span class="txt">Book Now</span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Pagination-->
                            <div class="pagination-outer">
                                <!--Styled Pagination-->
                                <ul class="styled-pagination">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="active">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">>></a></li>
                                </ul>
                                <!--End Styled Pagination-->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Call To Action Section -->
        <section class="call-to-action-section" style="background-image:url(images/background/4.jpg)">
            <div class="auto-container">
                <h2>Upscale Downtown Suites</h2>
                <div class="street">700 MAIN STREET</div>
                <a href="#" class="theme-btn btn-style-one"><span class="txt">Trending Tour</span></a>
            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- Main Footer -->
        <footer class="main-footer style-two" style="background-image:url(images/background/5.jpg)">
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
                                            <a href="index.html"><img src="images/logo.png" alt="" /></a>
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
                                                <h5><a href="blog-single.html">Bucket list how-to: Glamping and trekking in Patagonia</a></h5>
                                            </div>
                                            <div class="news-box">
                                                <h5><a href="blog-single.html">10 things you probably don’t know about Wales</a></h5>
                                            </div>
                                            <div class="news-box">
                                                <h5><a href="blog-single.html">10 things you probably don’t know about Wales</a></h5>
                                            </div>
                                            <div class="news-box">
                                                <h5><a href="blog-single.html">Do you really need an International Driver’s Permit?</a></h5>
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

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>

@endsection