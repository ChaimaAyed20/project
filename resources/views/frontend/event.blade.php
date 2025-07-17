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

            @if(isset($categoryId))
                @php
                    $categoryNames = [
                        1 => 'تونسية',
                        2 => 'عربية',
                        3 => 'عالمية',
                    ];
                @endphp
            @endif

            <div class="section-title">
                <span class="top-title">تظاهراتنا</span>
                <h2>نحن ننظم فعاليات وبرامج سنوية</h2>
            </div>

          <div class="row">
    @forelse($events as $event)
        <div class="col-lg-6 col-md-6 col-xl-6" data-cues="fadeIn" data-group="images" data-duration="1000">
            <div class="single-events-item">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="events-content">
                            <a href="{{ route('eventDetails', ['eventId' => $event->id]) }}">
                                <h3>{{ $event->designation_ar }}</h3>
                            </a>
                            <p>{{ \Illuminate\Support\Str::limit($event->description_ar, 120) }}</p>
                            <ul>
                                <li class="events-list-cart">
                                    <img src="{{ asset('assets/images/blog/blog-icon-1.svg') }}" alt="icon">
                                    {{ \Carbon\Carbon::parse($event->start_date)->format('d - F - Y') }}
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/conference-schedules/schedules-style-two-icon-4.svg') }}" alt="icon">
                                    {{ $event->place ?? 'غير محدد' }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center">
            <p>لا توجد تظاهرات متاحة حالياً.</p>
        </div>
    @endforelse
</div>





   </div>
    </div>
    <!-- End Events Pages Area -->

    <!-- Start Our Testimonials Area  -->
    <div class="testimonials-area pb-70">
    <div class="container">
        <div class="section-title3">
            <span class="top-title3">آراء العملاء</span>
            <h2>ماذا قال زوارنا عنا؟</h2>
        </div>
        <div class="row justify-content-center">
            @if(isset($comments) && $comments->count())
    @foreach($comments as $comment)
        <div>{{ $comment->content }}</div>
        <small>Par {{ $comment->user->name ?? 'Anonyme' }}</small>
    @endforeach
@else
    <p>Pas de commentaires disponibles.</p>
@endif

        </div>
    </div>
</div>

    <!-- End Our Testimonials Area  -->
@stop