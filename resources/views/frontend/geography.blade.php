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
                            @forelse ($archives as $archive)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $archive->id }}">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $archive->id }}"
                                            aria-expanded="false"
                                            aria-controls="collapse{{ $archive->id }}">
                                            {{ $archive->designation_ar }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $archive->id }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $archive->id }}" data-bs-parent="#accordionEvent">
                                        <div class="accordion-body">
                                            {!! nl2br(e($archive->description_ar)) !!}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center">لا توجد أرشيفات في هذه الفئة.</p>
                            @endforelse
                        </div>
                    </div>

                    @if($archives->count() > 5)
                    <div class="blog-post-btn mt-4 text-center">
                        <a href="#" class="default-btn">تحميل المزيد <i class="bx bx-plus"></i></a>
                    </div>
                    @endif
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
