@extends('front.main')
@section('content')

<div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!--Page Title-->
        <section class="page-title" style="background-image:url('{{ asset('frontend/images/hotels/cover.png') }}')">
            <div class="auto-container">
                {{-- <h2>Our Hotels</h2> --}}
                <ul class="page-breadcrumb">
                    <li><a href="">home</a></li>
                    <li>Hotels</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- hotels Page Section -->
        <section class="blogs-page-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>All the Best Hotel of Nepal</h2>
                    <div class="text">Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Aenan comdo <br> igula eget. Aenean massa cum sociis Theme natoque</div>
                    <div class="big-title style-two">news</div>
                </div>

                <div class="row clearfix">

                    <!-- hotel Block -->
                    @foreach ($hotel as $h)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="blog-detail.html"><img src="{{asset($h->featured)}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li>By Admin</li>
                                <li>03 January 2020</li>
                                </ul>
                                <h4><a href="{{route('room',['id'=>$h->id])}}">{{$h->name}}</a></h4>
                                <div class="text">Your donation to Children in Crossfire will make a huge difference in the lives of the children we work with in Tanzania... </div>
                                <a href="blog-detail.html" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                 @endforeach
                    

                </div>

                <!--Pagination-->
                <div class="pagination-outer text-center">
                    <!--Styled Pagination-->
                    <ul class="styled-pagination">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">>></a></li>
                    </ul>
                    <!--End Styled Pagination-->
                </div>

            </div>
        </section>
        <!-- End hotels Page Section -->

        <!-- Call To Action Section -->
        <section class="call-to-action-section" style="background-image:url('{{ asset('frontend/images/hotels/cover1.jpg') }}')">
            <div class="auto-container">
                <h2>Nepali Hotels</h2>
                <div class="street">Nepali Typical</div>
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
    