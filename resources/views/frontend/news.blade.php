@extends('frontend.layouts.app')
@section('content')
        <!-- Start Page Banner Area -->
        <div class="page-banner-area gallery-pages">
            <div class="container-fluid">
                <div class="single-page-banner-content">
                    <h1>أخبار</h1>
                    <ul>
                        <li><a href="index.html">الصفحة الرئيسيّة</a></li> 
                        <li>أخبار</li>
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

        <!-- Start Our Blog Post Area -->
        <div class="blog-post-area pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">أخبارنا</span>
                    <h2>تابع آخر أخبارنا ومقالاتنا</h2>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-blog-post-content">
                            <!--<div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-post-card">
                                        <div class="blog-post-img">
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <img src="assets/images/blog/blog-page-img-1.jpg" alt="images">
                                            </a>
                                        </div>
                                        <div class="blog-post-text">
                                            <ul>
                                                <li><span>Business</span></li>
                                                <li><img src="assets/images/blog/blog-icon-1.svg" alt="images">03-June-24</li>
                                                <li>
                                                    <img src="assets/images/blog/blog-icon-2.svg" alt="images">By <a href="{{route('newsDetails' , ['newsId' => 1])}}">Admin</a>
                                                </li>
                                            </ul>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <h3>This Entrepreneur Is Bringing Online
                                                Personal Market Experience</h3>
                                            </a>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}" class="default-btn btn-style-one">المزيد<i class="bx bx-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-post-card">
                                        <div class="blog-post-img">
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <img src="assets/images/blog/blog-page-img-2.jpg" alt="images">
                                            </a>
                                        </div>
                                        <div class="blog-post-text">
                                            <ul>
                                                <li><span>Development</span></li>
                                                <li><img src="assets/images/blog/blog-icon-1.svg" alt="images">03-June-24</li>
                                                <li>
                                                    <img src="assets/images/blog/blog-icon-2.svg" alt="images">By <a href="{{route('newsDetails' , ['newsId' => 1])}}">Admin</a>
                                                </li>
                                            </ul>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <h3>Hiring Your Startup’s First Customer
                                                    Success Lead</h3>
                                            </a>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}" class="default-btn btn-style-one">المزيد<i class="bx bx-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-post-card">
                                        <div class="blog-post-img">
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <img src="assets/images/blog/blog-page-img-3.jpg" alt="images">
                                            </a>
                                        </div>
                                        <div class="blog-post-text">
                                            <ul>
                                                <li><span>Conference</span></li>
                                                <li><img src="assets/images/blog/blog-icon-1.svg" alt="images">03-June-24</li>
                                                <li>
                                                    <img src="assets/images/blog/blog-icon-2.svg" alt="images">By <a href="{{route('newsDetails' , ['newsId' => 1])}}">Admin</a>
                                                </li>
                                            </ul>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <h3>The Planner Was Met To Oversee
                                                    The Opening Ceremony</h3>
                                            </a>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}" class="default-btn btn-style-one">المزيد<i class="bx bx-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-post-card">
                                        <div class="blog-post-img">
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <img src="assets/images/blog/blog-page-img-4.jpg" alt="images">
                                            </a>
                                        </div>
                                        <div class="blog-post-text">
                                            <ul>
                                                <li><span>Lifestyle</span></li>
                                                <li><img src="assets/images/blog/blog-icon-1.svg" alt="images">03-June-24</li>
                                                <li>
                                                    <img src="assets/images/blog/blog-icon-2.svg" alt="images">By <a href="{{route('newsDetails' , ['newsId' => 1])}}">Admin</a>
                                                </li>
                                            </ul>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <h3>Increase Competitive Advantage
                                                    By Aligning</h3>
                                            </a>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}" class="default-btn btn-style-one">المزيد<i class="bx bx-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-post-card">
                                        <div class="blog-post-img">
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <img src="assets/images/blog/blog-page-img-5.jpg" alt="images">
                                            </a>
                                        </div>
                                        <div class="blog-post-text">
                                            <ul>
                                                <li><span>Technology</span></li>
                                                <li><img src="assets/images/blog/blog-icon-1.svg" alt="images">03-June-24</li>
                                                <li>
                                                    <img src="assets/images/blog/blog-icon-2.svg" alt="images">By <a href="{{route('newsDetails' , ['newsId' => 1])}}">Admin</a>
                                                </li>
                                            </ul>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <h3>Every Profitable Marketing Strategy
                                                    Requires High-Quality Content</h3>
                                            </a>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}" class="default-btn btn-style-one">المزيد<i class="bx bx-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-post-card">
                                        <div class="blog-post-img">
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <img src="assets/images/blog/blog-page-img-6.jpg" alt="images">
                                            </a>
                                        </div>
                                        <div class="blog-post-text">
                                            <ul>
                                                <li><span>Traveling</span></li>
                                                <li><img src="assets/images/blog/blog-icon-1.svg" alt="images">03-June-24</li>
                                                <li>
                                                    <img src="assets/images/blog/blog-icon-2.svg" alt="images">By <a href="{{route('newsDetails' , ['newsId' => 1])}}">Admin</a>
                                                </li>
                                            </ul>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                                <h3>A Verbal History Of AIM The
                                                    Away Message</h3>
                                            </a>
                                            <a href="{{route('newsDetails' , ['newsId' => 1])}}" class="default-btn btn-style-one">المزيد<i class="bx bx-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <div class="row">
    @foreach($newsItems as $news)
    <div class="col-lg-6 col-md-6">
        <div class="blog-post-card">
            <div class="blog-post-img">
                <a href="{{ route('newsDetails', ['newsId' => $news->id]) }}">
                    <img src="{{ asset('storage/' . $news->cover) }}" alt="{{ $news->designation_ar }}">
                </a>
            </div>
            <div class="blog-post-text">
                <ul>
                    <li><span>خبر</span></li>
                    <li>
                        <img src="{{ asset('assets/images/blog/blog-icon-1.svg') }}" alt="date icon">
                        {{ $news->publication ? \Carbon\Carbon::parse($news->publication)->format('d-M-y') : 'تاريخ غير متوفر' }}
                    </li>
                    <li>
                        <img src="{{ asset('assets/images/blog/blog-icon-2.svg') }}" alt="author icon">
                        بواسطة <a href="#">{{ $news->author->name ?? 'Admin' }}</a>
                    </li>
                </ul>
                <a href="{{ route('newsDetails', ['newsId' => $news->id]) }}">
                    <h3>{{ $news->designation_ar }}</h3>
                </a>
                <p>{{ \Illuminate\Support\Str::limit($news->description_ar, 150) }}</p>
                <a href="{{ route('newsDetails', ['newsId' => $news->id]) }}" class="default-btn btn-style-one">
                    المزيد <i class="bx bx-plus"></i>
                </a>
            </div>
        </div>
    </div>
    @endforeach


</div>

                            <div class="blog-post-btn">
                                <a href="#" class="default-btn">تحميل المزيد<i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-post-right-bar">
                            <div class="blog-post-search">
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="ابحث هنا">
                                    <button type="submit" class="default-btn">
                                        <i class='bx bx-search'></i>
                                    </button>
                                </form>
                            </div>
                            <div class="recent-posts-card">
                                <h2>المنشورات الأكثر شيوعًا</h2>
                                <div class="recent-posts-item">
                                    <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                        <div class="popular-post-img"></div>
                                    </a>
                                    <div class="recent-text">
                                        <p>12-June-24</p>
                                        <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                            <h3>The Importance Intrinsic Motivation</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="recent-posts-item">
                                    <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                        <div class="popular-post-img popular-post-img-2"></div>
                                    </a>
                                    <div class="recent-text">
                                        <p>25-June-24</p>
                                        <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                            <h3>A Better Alternative To Grading Conference</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="recent-posts-item">
                                    <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                        <div class="popular-post-img popular-post-img-3"></div>
                                    </a>
                                    <div class="recent-text">
                                        <p>30-June-24</p>
                                        <a href="{{route('newsDetails' , ['newsId' => 1])}}">
                                            <h3>Strategic Social Media & Evolution Of Visual</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post-category">
                               <h2>التصنيفات</h2>
                                 <ul>
                                    <li><a href="#">التاريخ الفلسطيني</a></li>
                                    <li><a href="#">النكبة والنكسة</a></li>
                                    <li><a href="#">المقاومة والثورات</a></li>
                                    <li><a href="#">القدس والمسجد الأقصى</a></li>
                                    <li><a href="#">الشخصيات الفلسطينية</a></li>
                                    <li><a href="#">الشتات واللاجئين</a></li>
                                 </ul>
                            </div>
                            <div class="popular-tags">
                                <h2>مفاتيح البحث</h2>
                                <ul>
                                    <li>
                                        <a href="#">النكبة</a>
                                    </li>
                                    <li>
                                        <a href="#">فلسطين</a>
                                    </li>
                                    <li>
                                        <a href="#">القدس</a>
                                    </li>
                                    <li>
                                        <a href="#">غزة</a>
                                    </li>
                                    <li>
                                        <a href="#">المقاومة</a>
                                    </li>
                                    <li>
                                        <a href="#">اللاجئين</a> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Blog Post Area -->

 @stop