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
            @foreach ($galleries as $gallery)
                @php
                    $images = json_decode($gallery->images, true);
                @endphp

                @if(is_array($images))
                    @foreach ($images as $image)
                        <div class="col-lg-3 col-md-6" data-cues="fadeIn" data-duration="1000" data-group="images">
                            <div class="event-gallery-img">
                                <div class="gallery-img" style="background-image: url('{{ asset('storage/' . $image) }}'); background-size: cover; background-position: center; height: 250px;"></div>
                                <div class="gallery-icon">
                                    <a data-fancybox="gallery" href="{{ asset('storage/' . $image) }}">
                                        <i class="bx bxs-plus-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>

        <div class="gallery-btn">
            <a href="#" class="default-btn">تحميل المزيد <i class="bx bx-plus"></i></a>
        </div>
    </div>
</div>
<!-- End Event Photo Area -->


@stop