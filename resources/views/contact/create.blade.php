@extends('front.main')
@section('content')


     <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!--Page Title-->
        <section class="page-title" style="background-image:url({{asset('frontend/images/background/6.jpg')}})">
            <div class="auto-container">
                <h2>Contact Us</h2>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Contact Page Section -->
        <section class="contact-page-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title">
                    <h2>We are ready <br> feel free contact us</h2>
                    <div class="text"> Nullam elementum consequat lacus, sit amet pulvinar urna hendrerit sit amet. Interdum </div>
                </div>

                <div class="inner-container">

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="row clearfix">

                                <!-- Form Group -->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>First Name *</label>
                                    <input type="text" name="firstname" placeholder="First name" required>
                                </div>

                                <!-- Form Group -->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Last Name *</label>
                                    <input type="text" name="lastname" placeholder="Last name" required>
                                </div>

                                <!-- Form Group -->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Email *</label>
                                    <input type="email" name="email" placeholder="Email *" required>
                                </div>

                                <!-- Form Group -->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Phone *</label>
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>

                                <!-- Form Group -->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <label>Message *</label>
                                    <textarea class="" name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-one"><span class="txt">Send</span></button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

                <div class="row clearfix">

                    <!-- Contact Info Box -->
                    <div class="contact-info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="box-inner">
                            <h5>Address</h5>
                            <p>35 albot Street (at Kent Street) London, <br> Ontario</p>
                            <p>Wallstreet St., New York, CA 2364</p>
                        </div>
                    </div>

                    <!-- Contact Info Box -->
                    <div class="contact-info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="box-inner">
                            <h5>Phone</h5>
                            <p>Please call us and we’ll be happy to <br> assist you</p>
                            <p>(+880) 616481</p>
                        </div>
                    </div>

                    <!-- Contact Info Box -->
                    <div class="contact-info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="box-inner">
                            <h5>Email address</h5>
                            <p>Please email contact form and we’ll be happy to assist you</p>
                            <p>youremail@example.com</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Page Section -->

        <!-- Map Section -->
        <section class="map-section">
            <!--Map Outer-->
            <div class="map-outer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s"
                    width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section>
        <!-- End Map Section -->

        <!-- Call To Action Section -->
        <section class="call-to-action-section" style="background-image:url({{asset('frontend/images/background/4.jpg')}})">
            <div class="auto-container">
                <h2>Upscale Downtown Suites</h2>
                <div class="street">700 MAIN STREET</div>
                <a href="#" class="theme-btn btn-style-one"><span class="txt">Trending Tour</span></a>
            </div>
        </section>
        <!-- End Call To Action Section -->

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
    