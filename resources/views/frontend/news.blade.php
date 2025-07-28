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
                <img src="{{asset('assets/images/banner/banner-one-shape-1.png')}}" alt="images">
            </div>
            <div class="page-banner-shape-2">
                <img src="{{asset('assets/images/banner/banner-one-shape-2.png')}}" alt="images">
            </div>
            <div class="page-banner-shape-3">
                <img src="{{asset('assets/images/banner/banner-one-shape-3.png')}}" alt="images">
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
                    <li>
                        <span>
                            @if($news->categories->isNotEmpty())
                                {{ $news->categories->first()->designation_ar }}
                            @else
                                تصنيف غير متوفر
                            @endif
                        </span>
                    </li>
                    <li>
                        <img src="{{ asset('assets/images/blog/blog-icon-1.svg') }}" alt="date icon">
                        {{ $news->publication ? \Carbon\Carbon::parse($news->publication)->format('d-M-y') : 'تاريخ غير متوفر' }}
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
                                <form class="search-form" method="GET" action="{{ route('news') }}">
                                    <input type="text" name="query" class="form-control" placeholder="ابحث هنا" value="{{ request('query') }}">
                                    <button type="submit" class="default-btn">
                                        <i class='bx bx-search'></i>
                                    </button>
                                </form>
                                @if($newsItems->isEmpty())
                                    <div class="col-12">
                                        <p class="text-center">لا توجد نتائج مطابقة للبحث.</p>
                                     </div>
                                @endif

                            </div>
                            <div class="recent-posts-card">
                                <h2>اخر المنشورات</h2>

                                @foreach($recentNews as $recent)
                                <div class="recent-posts-item">
                                    <a href="{{ route('newsDetails', ['newsId' => $recent->id]) }}">
                                        <div class="popular-post-img">
                                            <img src="{{ asset('storage/' . $recent->cover) }}" alt="{{ $recent->designation_ar }}" style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                    </a>
                                    <div class="recent-text">
                                        <p>{{ \Carbon\Carbon::parse($recent->publication)->format('d-M-y') }}</p>
                                        <a href="{{ route('newsDetails', ['newsId' => $recent->id]) }}">
                                            <h3>{{ \Illuminate\Support\Str::limit($recent->designation_ar, 50) }}</h3>
                                        </a>
                                    </div>
                                </div>
                                 @endforeach
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