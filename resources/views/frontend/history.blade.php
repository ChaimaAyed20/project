@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area page-pricing-table">
    <div class="container-fluid">
        <div class="single-page-banner-content">
            <h1>{{ $category->designation_ar ?? 'تاريخياً' }}</h1>
            <ul>
                <li><a href="{{ route('home') }}">المباحث</a></li>
                <li>{{ $category->designation_ar ?? 'فلسطين في التاريخ' }}</li>
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
            <h2>{{ $category->designation_ar ?? 'قراءات علمية في تاريخ القضية الفلسطينية' }}</h2>
        </div>

        <div class="row">
            <!-- Colonne gauche : liste des archives dynamiques -->
            <div class="col-lg-8">
                <div class="some-faqs-area pt-100 pb-100">
                    <div class="single-faqs-content">
                        <div class="accordion" id="accordionEvent">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>الصورة</th>
                                            <th>العنوان بالعربية</th>
                                            <th>Titre (FR)</th>
                                            <th>المؤلف</th>
                                            <th>DOI</th>
                                            <th>تاريخ النشر</th>
                                            <th>رابط خارجي</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($articles as $article)
                                            <tr>
                                                <td>
                                                    @if($article->cover)
                                                        <img src="{{ asset('storage/' . $article->cover) }}" alt="cover" style="width: 60px; height: 60px; object-fit: cover;">
                                                    @else
                                                        <span class="text-muted">لا يوجد</span>
                                                    @endif
                                                </td>
                                                <td>{{ $article->designation_ar }}</td>
                                                <td>{{ $article->designation_fr }}</td>
                                                <td>{{ $article->author }}</td>
                                                <td>{{ $article->DOI ?? '-' }}</td>
                                                <td>{{ $article->date_de_publication?->format('d/m/Y') }}</td>
                                                <td>
                                                    @if($article->link)
                                                        <a href="{{ $article->link }}" class="text-primary" target="_blank">عرض</a>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-muted">لا توجد مقالات متاحة حالياً.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            
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

                </div>
            </div>
        </div> <!-- END ROW -->
    </div>
</div>
<!-- End Conference Team Area -->

@endsection
-->