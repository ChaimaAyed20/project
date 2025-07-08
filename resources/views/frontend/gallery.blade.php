@extends('frontend.layouts.app')
@section('content')
<!-- Start Page Banner Area -->
        <div class="page-banner-area gallery-pages">
            <div class="container-fluid">
                <div class="single-page-banner-content">
                    <h1>معرض الصور</h1>
                    <ul>
                        <li><a href="index.html">الصفحة الرئيسيّة</a></li> 
                        <li>معرض الصور</li>
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

        <!-- Start Event Photo Area -->
        <div class="events-gallery-area pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">اليك بعض الصور من فعالياتنا و مؤتمراتنا السابقة </span>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6" data-cues="fadeIn" data-duration="1000" data-group="images">
                        <div class="event-gallery-img">
                            <div class="gallery-img"></div>
                            <div class="gallery-icon">
                                <a data-fancybox="gallery" href="assets/images/gallery/event-photo-1.jpg">
                                    <i class="bx bxs-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-cues="fadeIn" data-duration="1000" data-group="images">
                        <div class="event-gallery-img">
                            <div class="gallery-img gallery-img-1"></div>
                            <div class="gallery-icon">
                                <a data-fancybox="gallery" href="assets/images/gallery/event-photo-2.jpg">
                                    <i class="bx bxs-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-cues="fadeIn" data-duration="1000" data-group="images">
                        <div class="event-gallery-img">
                            <div class="gallery-img gallery-img-2"></div>
                            <div class="gallery-icon">
                                <a data-fancybox="gallery" href="assets/images/gallery/event-photo-3.jpg">
                                    <i class="bx bxs-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-cues="fadeIn" data-duration="1000" data-group="images">
                        <div class="event-gallery-img">
                            <div class="gallery-img gallery-img-3"></div>
                            <div class="gallery-icon">
                                <a data-fancybox="gallery" href="assets/images/gallery/event-photo-4.jpg">
                                    <i class="bx bxs-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-cues="fadeIn" data-duration="1000" data-group="images">
                        <div class="event-gallery-img">
                            <div class="gallery-img gallery-img-4"></div>
                            <div class="gallery-icon">
                                <a data-fancybox="gallery" href="assets/images/gallery/event-photo-5.jpg">
                                    <i class="bx bxs-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-cues="fadeIn" data-duration="1000" data-group="images">
                        <div class="event-gallery-img">
                            <div class="gallery-img gallery-img-5"></div>
                            <div class="gallery-icon">
                                <a data-fancybox="gallery" href="assets/images/gallery/event-photo-6.jpg">
                                    <i class="bx bxs-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-cues="fadeIn" data-duration="1000" data-group="images">
                        <div class="event-gallery-img">
                            <div class="gallery-img gallery-img-6"></div>
                            <div class="gallery-icon">
                                <a data-fancybox="gallery" href="assets/images/gallery/event-photo-7.jpg">
                                    <i class="bx bxs-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-cues="fadeIn" data-duration="1000" data-group="images">
                        <div class="event-gallery-img">
                            <div class="gallery-img gallery-img-7"></div>
                            <div class="gallery-icon">
                                <a data-fancybox="gallery" href="assets/images/gallery/event-photo-8.jpg">
                                    <i class="bx bxs-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-btn">
                    <a href="#" class="default-btn">تحميل المزيد <i class="bx bx-plus"></i></a>
                </div>
            </div>
        </div>
        <!-- End Event Photo Area -->

@stop