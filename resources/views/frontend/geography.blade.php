@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area page-pricing-table">
    <div class="container-fluid">
        <div class="single-page-banner-content">
            <h1>{{ $category->designation_ar ?? 'جغرافيا' }}</h1>
            <ul>
                <li><a href="{{ route('home') }}">المباحث</a></li>
                <li>{{ $category->designation_ar ?? 'فلسطين في الجغرافيا' }}</li>
            </ul>
        </div>
    </div>
    <div class="page-banner-shape-1">
        <img src="{{ asset('assets/images/banner/banner-one-shape-1.png') }}" alt="images">
    </div>
    <div class="page-banner-shape-2">
        <img src="{{ asset('assets/images/banner/banner-one-shape-2.png') }}" alt="images">
    </div>
    <div class="page-banner-shape-3">
        <img src="{{ asset('assets/images/banner/banner-one-shape-3.png') }}" alt="images">
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Conference Team Area -->
<div class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="top-title">ورقات علمية</span>
            <h2>{{ $category->designation_ar ?? 'قراءات علمية في جغرافيا فلسطين' }}</h2>
        </div>

        <div class="row">
            <!-- Colonne gauche : liste des archives dynamiques -->
            <div class="col-lg-8">
                <div class="some-faqs-area pt-100 pb-100">
                    <div class="single-faqs-content">
                        <div class="accordion" id="accordionEvent">
                            
                        </div>
                    </div>

                    
                </div>
            </div>

            <!-- Colonne droite : barre latérale -->
            <div class="col-lg-4">
                <div class="blog-post-right-bar">

                    <!-- Recherche (désactivée) -->
                    <div class="blog-post-search mb-4">
                        <form class="search-form d-flex" onsubmit="return false;">
                            <input type="text" class="form-control" placeholder="ابحث هنا" disabled>
                            <button type="submit" class="default-btn ms-2" disabled>
                                <i class='bx bx-search'></i>
                            </button>
                        </form>
                    </div>

                    <!-- Catégories dynamiques -->
                    <div class="blog-post-category mb-4">
                        <h2>التصنيفات</h2>
                        <ul dir="rtl" style="list-style-type: circle;">
                            @foreach($categories ?? [] as $cat)
                                <li>
                                    <a href="{{ route('archivesByCategory', $cat->id) }}">
                                        {{ $cat->designation_ar }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Mots-clés statiques -->
                    <div class="popular-tags">
                        <h2>مفاتيح البحث</h2>
                        <ul>
                            <li><a href="#">النكبة</a></li>
                            <li><a href="#">فلسطين</a></li>
                            <li><a href="#">القدس</a></li>
                            <li><a href="#">غزة</a></li>
                            <li><a href="#">المقاومة</a></li>
                            <li><a href="#">اللاجئين</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div> <!-- END ROW -->
    </div>
</div>
<!-- End Conference Team Area -->

@endsection
