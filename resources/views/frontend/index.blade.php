@extends('frontend.layouts.app')
@section('content')
<!-- Start Banner area -->
        <div class="hero-area">
            <div class="hero-auto-slider owl-carousel owl-theme">
                <div class="hero-slider-item">
                    <div class="container-fluid">
                        <div class="hero-content">
                            <h1 data-cue="slideInLeft" data-duration="1000">الجمعية التونسية للمعارف الفلسطينية</h1>
                            <p data-cue="slideInLeft" data-duration="1300">انضم إلينا في فعالياتنا السنوية لتكون جزءًا من التغيير والدعم لفلسطين</p>
                            <div class="hero-bottom" data-cue="slideInLeft" data-duration="1500">
                                <a href="register.html" class="default-btn">اشترك الان <i class='bx bx-plus'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-shape-1">
                        <img src="{{asset('assets/images/banner/banner-one-shape-1.png')}}" alt="images">
                    </div>
                    <div class="hero-shape-2">
                        <img src="{{asset('assets/images/banner/banner-one-shape-2.png')}}" alt="images">
                    </div>
                    <div class="hero-shape-3">
                        <img src="{{asset('assets/images/banner/banner-one-shape-3.png')}}" alt="images">
                    </div>
                    <div class="hero-shape-4">
                        <img src="{{asset('assets/images/banner/banner-one-shape.png')}}" alt="images">
                    </div>
                </div>
                <div class="hero-slider-item bg-img-1">
                    <div class="container-fluid">
                        <div class="hero-content">
                            <h1 data-cue="slideInLeft" data-duration="1000">منصة المعارف الفلسطينية</h1>
                            <p data-cue="slideInLeft" data-duration="1300">There are many variations of passages of Lorem Ipsum available but the majority have sufferestd
                            some form by injected humour or randomised even slightly.</p>
                            <div class="hero-bottom" data-cue="slideInUp" data-duration="1500">
                                <a href="register.html" class="default-btn">Register Now <i class='bx bx-plus'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-shape-1">
                        <img src="{{asset('assets/images/banner/banner-one-shape-1.png')}}" alt="images">
                    </div>
                    <div class="hero-shape-2">
                        <img src="{{asset('assets/images/banner/banner-one-shape-2.png')}}" alt="images">
                    </div>
                    <div class="hero-shape-3">
                        <img src="{{asset('assets/images/banner/banner-one-shape-3.png')}}" alt="images">
                    </div>
                    <div class="hero-shape-5">
                        <img src="{{asset('assets/images/banner/banner-one-shape-4.png')}}" alt="images">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner area -->
@if($conferenceArea)
<!-- Start Conference Area -->
<div class="conference-area pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <!-- Images -->
            <div class="col-lg-6">
                <div class="single-conference-img">
                    <img src="{{ asset('storage/' . $conferenceArea->image1) }}" alt="image1" data-cue="slideInDown" data-duration="2000">
                    <div class="conference-img-2" data-cue="slideInLeft" data-duration="2000">
                        <img src="{{ asset('storage/' . $conferenceArea->image2) }}" alt="image2" style="width: 312px;">
                    </div>
                    <div class="conference-img-3" data-cue="slideInUp" data-duration="2000">
                        <img src="{{ asset('storage/' . $conferenceArea->image3) }}" alt="image3">
                    </div>
                    <div class="conference-experience" data-cue="slideInUp" data-duration="2000">
                        <i class="flaticon-award"></i>
                        <h5>{{ $conferenceArea->subtitle }}</h5>
                    </div>
                </div>
            </div>

            <!-- Contenu texte -->
            <div class="col-lg-6">
                <div class="single-conference-content" data-cue="slideInRight">
                    <div class="section-title left-title">
                        <span class="top-title">رؤيتنا</span>
                        <h2>{{ $conferenceArea->title }}</h2>
                        <p>{{ $conferenceArea->short_description }}</p>
                    </div>

                    <div class="row">
                        @for ($i = 1; $i <= 4; $i++)
                            @php
                                $icon = $conferenceArea->{'icon' . $i};
                                $iconTitle = $conferenceArea->{'icon' . $i . '_title'};
                                $iconDesc = $conferenceArea->{'icon' . $i . '_description'};
                            @endphp
                            @if($icon || $iconTitle || $iconDesc)
                                <div class="col-lg-6">
                                    <div class="conference-item">
                                        <div class="conference-icon">
                                            <i class="{{ $icon }}"></i>
                                        </div>
                                        <h3>{{ $iconTitle }}</h3>
                                        <p>{{ $iconDesc }}</p>
                                    </div>
                                </div>
                            @endif
                        @endfor
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Conference Area -->
@endif

<!--start conferance planning area-->
@if($planningSections)
<div class="conference-planning-area pb-70">
    <div class="container">
        <div class="section-title3">
            <span class="top-title3">المحاور</span>
            <h2>{{ $planningSections->title }}</h2>
        </div>
        <div class="row justify-content-center">

            <!-- Icon 1 -->
            <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInLeft" data-duration="1000">
                <div class="single-conference-card">
                    <div class="planning-icon">
                        <i class="{{ $planningSections->icon1 }}"></i>
                    </div>
                    <h3>{{ $planningSections->icon1_title }}</h3>
                    <p>{{ $planningSections->icon1_description }}</p>
                </div>
            </div>

            <!-- Icon 2 -->
            <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInDown" data-duration="1000">
                <div class="single-conference-card">
                    <div class="planning-icon">
                        <i class="{{ $planningSections->icon2 }}"></i>
                    </div>
                    <h3>{{ $planningSections->icon2_title }}</h3>
                    <p>{{ $planningSections->icon2_description }}</p>
                </div>
            </div>

            <!-- Icon 3 -->
            <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInRight" data-duration="1000">
                <div class="single-conference-card">
                    <div class="planning-icon">
                        <i class="{{ $planningSections->icon3 }}"></i>
                    </div>
                    <h3>{{ $planningSections->icon3_title }}</h3>
                    <p>{{ $planningSections->icon3_description }}</p>
                </div>
            </div>

            <!-- Icon 4 -->
            <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp" data-duration="1000">
                <div class="single-conference-card">
                    <div class="planning-icon">
                        <i class="{{ $planningSections->icon4 }}"></i>
                    </div>
                    <h3>{{ $planningSections->icon4_title }}</h3>
                    <p>{{ $planningSections->icon4_description }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
<!-- end conferance plannig area-->
       
         <!-- Start Blog Area -->
        <div class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-xl-4">
                        <div class="single-blog-left-content">
                            <div class="section-title left-title">
                                <span class="top-title">أحدث الأخبار</span>
                                <h2>تابع أحدث المقالات والنصائح والأخبار أولاً بأول</h2>
                                <p>There are many variations of passages of lorem ipsum
                                available but the majority have form by injected humou
                                or randomised word which don't abelievable.</p>
                            </div>
                            <a href="{{route('news')}}" class="default-btn btn-style-one">المزيد من المقالات <i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-8">
                        <div class="blog-right-hover-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-6"> 
                                    <div class="blog-image">
                                        <img src="assets/images/blog/blog-1.jpg" alt="about-image">
                                        <img src="assets/images/blog/blog-2.jpg" class="blog-img1" alt="about-image">
                                        <img src="assets/images/blog/blog-3.jpg" class="blog-img2" alt="about-image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-hover-content">
                                        <ul>
                                            @foreach($recentNews as $news)
                                                <li>
                                                    <div class="single-hover-content">
                                                        <ul>
                                                            <li>
                                                                <img src="{{ asset('assets/images/blog/blog-icon-1.svg') }}" alt="date">
                                                                {{ \Carbon\Carbon::parse($news->publication)->format('d-M-Y') }}
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('assets/images/blog/blog-icon-2.svg') }}" alt="author">
                                                                بواسطة <a href="#">{{ $news->author->name ?? 'Admin' }}</a>
                                                            </li>
                                                        </ul>
                                                        <a href="{{ route('newsDetails', ['newsId' => $news->id]) }}">
                                                            <h3>{{ $news->designation_ar }}</h3>
                                                        </a>
                                                        <a href="{{ route('newsDetails', ['newsId' => $news->id]) }}" class="read-more">
                                                            اقرأ المزيد <i class="bx bx-plus"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-shape">
                <img src="assets/images/blog/blog-shape-1.png" alt="images">
            </div>
        </div>
        <!-- End Blog Area -->

        <!-- Start Our Conference Schedules Area -->
        <div class="conference-schedules-area pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">جدول فعاليات مؤتمراتنا</span>
                    <h2>كن جزءًا من مؤتمر التنمية والعمل من أجل فلسطين</h2>
                </div>
                <div class="conference-schedules-tab">
                   
                    @foreach($recentEvents as $event)
    <div class="conference-schedules-content" data-cue="slideInUp">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="single-schedules-item">
                    <div class="schedules-images">
                        @php
                            $coverImage = is_array($event->cover) ? $event->cover[0] ?? null : $event->cover;
                        @endphp
                        <img src="{{ asset('storage/events/' . $coverImage) }}" alt="{{ $event->designation_ar }}">
                    </div>
                    <div class="schedules-text">
                        <span>
                            <img src="{{ asset('assets/images/conference-schedules/conference-schedules-icon.svg') }}" alt="icon">
                            {{ \Carbon\Carbon::parse($event->start_date)->format('H:i') }} - {{ \Carbon\Carbon::parse($event->end_date)->format('H:i') }}
                        </span>
                        <div class="client-item">
                            <img src="{{ asset('assets/images/conference-schedules/conference-schedules-img-4.jpg') }}" alt="client">
                            <h3>{{ $event->organizer ?? 'المنظم' }}</h3>
                            <p>منظم</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="schedules-design-content">
                    <span>{{ $event->categories->first()->name ?? 'بدون فئة' }}</span>
                    <h3>{{ $event->designation_ar }}</h3>
                    <p>{{ \Illuminate\Support\Str::limit($event->description_ar, 120) }}</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="schedules-btn">
                    <a href="{{ route('eventDetails', ['eventId' => $event->id]) }}" class="default-btn btn-style-one">شارك <i class='bx bx-plus'></i></a>
                </div>
            </div>
        </div>
        <div class="conference-schedules-shape">
            <img src="{{ asset('assets/images/conference-schedules/conference-schedules-shape.png') }}" alt="images">
        </div>
    </div>
@endforeach

                </div>
            </div>
        </div>
        <!-- End Our Conference Schedules Area -->

       
       

       
       <!-- Start Our Testimonials Area -->
<div class="testimonials-area pb-70">
    <div class="container">
        <div class="section-title3">
            <span class="top-title3">تقييماتنا</span>
            <h2>آراء زوارنا وتجاربهم معنا</h2>
        </div>
        <div class="row justify-content-center">
            @foreach($comments as $comment)
                <div class="col-lg-4 col-xl-3 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="testimonials-card">
                        <span>{{ $comment->created_at->format('d - F - Y') }}</span>
                        <p>{{ $comment->content }}</p>
                        <div class="testimonials-cliend">
                            <a href="#">
                                <img src="{{ asset('assets/images/default-user.png') }}" alt="user">
                            </a>
                            <h3>{{ $comment->user->name ?? 'مستخدم مجهول' }}</h3>
                            <p>زائر</p>
                        </div>
                        <div class="testimonials-icon">
                            <img src="{{ asset('assets/images/testimonials/testimonials-shape.svg') }}" alt="shape">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Our Testimonials Area -->


        
<!-- Start Sponsors Area -->
<section class="partners-area pt-70 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>شركاؤنا</h2>
        </div>

        <div class="row justify-content-center">
            @foreach($partners as $partner)
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="single-partner text-center">
                        <a href="{{ $partner->link ?? '#' }}" target="_blank">
                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->designation_ar }}" style="max-width: 100px; max-height: 80px;">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Sponsors Area -->

        
@stop