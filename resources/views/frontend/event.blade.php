@extends('frontend.layouts.app')
@section('content')

            <div class="others-option-for-responsive"> 
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-option justify-content-center d-flex align-items-center">

                                <div class="option-item">
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search Here" type="text">
            
                                        <button type="submit" class="search-button">
                                            <i class='bx bx-search'></i>
                                        </button>
                                    </form>
                                </div>

                                 <div class="option-item">
                                    <a href="pricing.html" class="default-btn">Get Free Estimate <i class='bx bx-plus'></i></a> 
                                </div>
                                
                            </div>
                        </div> 
                    </div>
                </div>
            </div>    
        </div>
        <!-- End Menubar Area -->

        <!-- Start Page Banner Area -->
        <div class="page-banner-area events-pages">
            <div class="container-fluid">
                <div class="single-page-banner-content">
                    <h1>التظاهارات</h1>
                    <ul>
                        <li><a href="index.html">الصفحة الرئيسيّة</a></li>
                        <li>التظاهارات</li>
                    </ul>
                </div>
            </div>
            <div class="page-banner-shape-1">
                <img src="assets/images/banner/banner-one-shape-1.png" alt="images">
            </div>
            <div class="page-banner-shape-2">
                <img src="assets/images/banner/banner-one-shape-2.png" alt="images">
            </div>
            <div class="page-banner-shape-3">
                <img src="assets/images/banner/banner-one-shape-3.png" alt="images">
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Events Pages Area -->
        <div class="events-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">تظاهراتنا</span>
                    <h2>نحن ننظم فعاليات وبرامج سنوية</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xl-6" data-cues="fadeIn" data-group="images" data-duration="1000">
                        <div class="single-events-item">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="events-image">
                                        <a href="{{route('eventDetails' , ['eventId' => 1])}}">
                                            <img src="assets/images/events/events-1.jpg" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="events-content">
                                        <a href="{{route('eventDetails', ['eventId' => 1])}}">
                                            <h3>What The Community Says About Learnway</h3>
                                        </a>
                                        <p>There are many variations of passages sun
                                        look even slightly believable.</p>
                                        <ul>
                                            <li class="events-list-cart"><img src="assets/images/blog/blog-icon-1.svg" alt="images">04 - July - 2024</li>
                                            <li><img src="assets/images/conference-schedules/schedules-style-two-icon-4.svg" alt="images">New York 512 USA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6" data-cues="fadeIn" data-group="images" data-duration="1500">
                        <div class="single-events-item">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="events-image">
                                        <a href="{{route('eventDetails' , ['eventId'=>1])}}">
                                            <img src="assets/images/events/events-2.jpg" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="events-content">
                                        <a href="{{route('eventDetails' , ['eventId'=>1])}}">
                                            <h3>Looking For The Best IT Business Solution?</h3>
                                        </a>
                                        <p>There are many variations of passages sun
                                        look even slightly believable.</p>
                                        <ul>
                                            <li class="events-list-cart"><img src="assets/images/blog/blog-icon-1.svg" alt="images">04 - July - 2024</li>
                                            <li><img src="assets/images/conference-schedules/schedules-style-two-icon-4.svg" alt="images">New York 512 USA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6" data-cues="fadeIn" data-group="images" data-duration="2000">
                        <div class="single-events-item">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="events-image">
                                        <a href="{{route('eventDetails' , ['eventId'=>1])}}">
                                            <img src="assets/images/events/events-3.jpg" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="events-content">
                                        <a href="{{route('eventDetails' , ['eventId'=>1])}}">
                                            <h3>Your Understanding Is Our Success</h3>
                                        </a>
                                        <p>There are many variations of passages sun
                                        look even slightly believable.</p>
                                        <ul>
                                            <li class="events-list-cart"><img src="assets/images/blog/blog-icon-1.svg" alt="images">04 - July - 2024</li>
                                            <li><img src="assets/images/conference-schedules/schedules-style-two-icon-4.svg" alt="images">New York 512 USA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6" data-cues="fadeIn" data-group="images" data-duration="2500">
                        <div class="single-events-item">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="events-image">
                                        <a href="{{route('eventDetails' , ['eventId'=>1])}}">
                                            <img src="assets/images/events/events-4.jpg" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="events-content">
                                        <a href="{{route('eventDetails' , ['eventId'=>1])}}">
                                            <h3>Better IT Solutions & Services At Your Fingertips</h3>
                                        </a>
                                        <p>There are many variations of passages sun
                                        look even slightly believable.</p>
                                        <ul>
                                            <li class="events-list-cart"><img src="assets/images/blog/blog-icon-1.svg" alt="images">04 - July - 2024</li>
                                            <li><img src="assets/images/conference-schedules/schedules-style-two-icon-4.svg" alt="images">New York 512 USA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6" data-cues="fadeIn" data-group="images" data-duration="3000">
                        <div class="single-events-item">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="events-image">
                                        <a href="{{route('eventDetails' , ['eventId'=>1])}}">
                                            <img src="assets/images/events/events-5.jpg" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="events-content">
                                        <a href="{{route('eventDetails' , ['eventId'=>1])}}">
                                            <h3>We’re Partner Of Your Business Innovations</h3>
                                        </a>
                                        <p>There are many variations of passages sun
                                        look even slightly believable.</p>
                                        <ul>
                                            <li class="events-list-cart"><img src="assets/images/blog/blog-icon-1.svg" alt="images">04 - July - 2024</li>
                                            <li><img src="assets/images/conference-schedules/schedules-style-two-icon-4.svg" alt="images">New York 512 USA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6" data-cues="fadeIn" data-group="images" data-duration="3500">
                        <div class="single-events-item">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="events-image">
                                        <a href="{{route('eventDetails' , ['eventId'=>1])}}">
                                            <img src="assets/images/events/events-6.jpg" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="events-content">
                                        <a href="{{route('eventDetails' , ['eventId'=>1])}}">
                                            <h3>Join The World's Largest Study Platform Today</h3>
                                        </a>
                                        <p>There are many variations of passages sun
                                        look even slightly believable.</p>
                                        <ul>
                                            <li class="events-list-cart"><img src="assets/images/blog/blog-icon-1.svg" alt="images">04 - July - 2024</li>
                                            <li><img src="assets/images/conference-schedules/schedules-style-two-icon-4.svg" alt="images">New York 512 USA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Events Pages Area -->

        <!-- Start Our Testimonials Area  -->
        <div class="testimonials-area pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">آراء العملاء</span>
                    <h2>ماذا قال زوارنا عنا؟</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6" data-cue="slideInLeft">
                        <div class="testimonials-card">
                            <span>15 - June - 2024</span>
                            <p>Had a fantastic time at genes
                            expo got to meet a lot of great
                            people and hear some amazin
                            talks thanks @genesisexpo
                            for a super day!</p>
                            <div class="testimonials-cliend">
                                <a href="testimonials.html">
                                    <img src="assets/images/testimonials/testimonials-1.jpg" alt="images">
                                </a>
                                <h3>Yolanda Medhurst</h3>
                                <p>Rigging Chaser</p>
                            </div>
                            <div class="testimonials-icon">
                                <img src="assets/images/testimonials/testimonials-shape.svg" alt="images">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6" data-cue="slideInUp">
                        <div class="testimonials-card">
                            <span>18 - June - 2024</span>
                            <p>Had a fantastic time at genes
                            expo got to meet a lot of great
                            people and hear some amazin
                            talks thanks @genesisexpo
                            for a super day!</p>
                            <div class="testimonials-cliend">
                                <a href="testimonials.html">
                                    <img src="assets/images/testimonials/testimonials-2.jpg" alt="images">
                                </a>
                                <h3>Jerrold Farrell</h3>
                                <p>Founder Card</p>
                            </div>
                            <div class="testimonials-icon">
                                <img src="assets/images/testimonials/testimonials-shape.svg" alt="images">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6" data-cue="slideInDown">
                        <div class="testimonials-card">
                            <span>25 - June - 2024</span>
                            <p>Had a fantastic time at genes
                            expo got to meet a lot of great
                            people and hear some amazin
                            talks thanks @genesisexpo
                            for a super day!</p>
                            <div class="testimonials-cliend">
                                <a href="testimonials.html">
                                    <img src="assets/images/testimonials/testimonials-3.jpg" alt="images">
                                </a>
                                <h3>Tamara Waelchi</h3>
                                <p>Chiropractic Doctor</p>
                            </div>
                            <div class="testimonials-icon">
                                <img src="assets/images/testimonials/testimonials-shape.svg" alt="images">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6" data-cue="slideInRight">
                        <div class="testimonials-card">
                            <span>30 - June - 2024</span>
                            <p>Had a fantastic time at genes
                            expo got to meet a lot of great
                            people and hear some amazin
                            talks thanks @genesisexpo
                            for a super day!</p>
                            <div class="testimonials-cliend">
                                <a href="testimonials.html">
                                    <img src="assets/images/testimonials/testimonials-4.jpg" alt="images">
                                </a>
                                <h3>Ana Greenholt</h3>
                                <p>Chief Executive</p>
                            </div>
                            <div class="testimonials-icon">
                                <img src="assets/images/testimonials/testimonials-shape.svg" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Testimonials Area  -->
@stop