@extends('frontend.layouts.app')
@section('content')
 <!-- Start Page Banner Area -->
 <div class="page-banner-area gallery-pages">
    <div class="container-fluid">
        <div class="single-page-banner-content">
            <h1>المزيد عن الأخبار</h1>
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
        <div class="row">
            <div class="col-lg-8">
                <div class="single-blog-details-content">
    {{-- Image principale --}}
    <div class="blog-details-img"> 
        <img src="{{ asset('storage/' . $news->cover) }}" alt="{{ $news->designation_ar }}">
    </div>

    {{-- Date et auteur --}}
    <ul class="blog-details-list">
        <li>
            <img src="{{ asset('assets/images/blog/blog-icon-1.svg') }}" alt="date">
            {{ \Carbon\Carbon::parse($news->publication)->format('d-m-Y') }}
        </li>
        <li>
            <img src="{{ asset('assets/images/blog/blog-icon-2.svg') }}" alt="author">
            بواسطة <a href="#">{{ $news->author->name ?? 'Admin' }}</a>
        </li>
    </ul>

    {{-- Titre --}}
    <h2>{{ $news->designation_ar }}</h2>

    {{-- Description avec paragraphes --}}
    @foreach(explode("\n", $news->description_ar) as $paragraph)
        <p>{{ $paragraph }}</p>
    @endforeach

    {{-- Fichiers joints --}}
    @if($news->files)
        <h4>الملفات المرفقة:</h4>
        <ul>
            @foreach($news->files as $file)
                <li><a href="{{ asset('storage/' . $file) }}" target="_blank">📄 تحميل الملف</a></li>
            @endforeach
        </ul>
    @endif

    {{-- Images supplémentaires --}}
    @if($news->images)
        <h4>صور إضافية:</h4>
        <div class="row">
            @foreach($news->images as $image)
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $image) }}" alt="image" class="img-fluid mb-3">
                </div>
            @endforeach
        </div>
    @endif
                    <div class="d-flex justify-content-between">
                        <div class="popular-tags">
                            <ul>
                                <li><span>Tags</span></li>
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">Development</a>
                                </li>
                                <li>
                                    <a href="#">Technology</a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-sewile-list">
                            <ul>
                                <ul>
                                    <li>
                                        <span>شارك</span>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/" target="_blank">
                                            <i class="bx bxl-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    <h3>التعليقات</h3>
                    <div class="blog-details-comment">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="comment-text">
                                    <img src="assets/images/blog/blog-details-2.jpg" alt="images">
                                    <div class="client-name">
                                        <h4>Trever Barton</h4>
                                        <p>July 7, 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <p>Had a fantastic time at Genes Expo got to meet
                                of great people and hear some amazin</p>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="reply-btn">
                                    <a href="#" class="reply">أضف ردّاً</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-details-comment">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="comment-text">
                                    <img src="assets/images/blog/blog-details-3.jpg" alt="images">
                                    <div class="client-name">
                                        <h4>Jaunita Lowe</h4>
                                        <p>July 12, 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <p>Had a fantastic time at Genes Expo got to meet
                                of great people and hear some amazin</p>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="reply-btn">
                                    <a href="#" class="reply">أضف ردّاً</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-details-comment">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="comment-text">
                                    <img src="assets/images/blog/blog-details-4.jpg" alt="images">
                                    <div class="client-name">
                                        <h4>Demond Muller</h4>
                                        <p>July 18, 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <p>Had a fantastic time at Genes Expo got to meet
                                of great people and hear some amazin</p>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="reply-btn">
                                    <a href="#" class="reply">أضف ردّاً</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="row justify-content-center">
            @if(isset($comments) && $comments->count())
    @foreach($comments as $comment)
        <div>{{ $comment->content }}</div>
        <small>Par {{ $comment->user->name ?? 'Anonyme' }}</small>
    @endforeach
@else
    <p>Pas de commentaires disponibles.</p>
@endif

        </div>
    </div>-->
                    <form class="leave-comment">
                        <h3>أترك تعليقا</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="الإسم">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                                </div>
                            </div>
                            <!--
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Website">
                                </div>
                            </div>
                            -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="أترك تعليقك" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            احفظ اسمي وبريدي الإلكتروني في هذا المتصفح لاستخدامها في المرة القادمة التي أعلق فيها.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="default-btn">نشر التعليق<i class="bx bx-plus"></i></button>
                    </form>
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

    @foreach($recentNews as $recent)
        <div class="recent-posts-item">
            <a href="{{ route('newsDetails', ['newsId' => $recent->id]) }}">
                <div class="popular-post-img">
                    <img src="{{ asset('storage/' . $recent->cover) }}" alt="{{ $recent->designation_ar }}" style="width: 100px; height: 100px; object-fit: cover;">
                </div>
            </a>
            <div class="recent-text">
                <p>{{ \Carbon\Carbon::parse($recent->publication)->format('d-m-Y') }}</p>
                <a href="{{ route('newsDetails', ['newsId' => $recent->id]) }}">
                    <h3>{{ \Illuminate\Support\Str::limit($recent->designation_ar, 40) }}</h3>
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
                        <h2>الوسوم</h2>
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