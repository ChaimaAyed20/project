@extends('frontend.layouts.app')
@section('content')

        <!-- Start Page Banner Area -->
        <div class="page-banner-area page-pricing-table">
            <div class="container-fluid">
                <div class="single-page-banner-content">
                    <h1>في السّنة</h1>
                    <ul>
                        <li><a href="index.html">المباحث</a></li>
                        <li>فلسطين في السّنة</li>
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

        <!-- Start Conference Team Area -->
        <div class="team-three-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">ورقات علمية</span>
                    <h2>فلسطين في السّنة: أوراق بحثية</h2>
                </div>
               
             <!-- START ROW: Colonne gauche + droite -->
        <div class="row">
            <!-- Colonne gauche : Liste des textes -->
            <div class="col-lg-8">
                <div class="some-faqs-area pt-100 pb-100">
                    <div class="single-faqs-content">
                        <div class="accordion" id="accordionSunnah">
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
                    <div class="blog-post-btn">
                        <a href="#" class="default-btn">تحميل المزيد<i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>

            <!-- Colonne droite : barre latérale -->
            <div class="col-lg-4">
                <div class="blog-post-right-bar">
                    <!-- Recherche -->
                    <div class="blog-post-search">
                        <form class="search-form">
                            <input type="text" class="form-control" placeholder="ابحث هنا">
                            <button type="submit" class="default-btn">
                                <i class='bx bx-search'></i>
                            </button>
                        </form>
                    </div>

                    <!-- مشاركات شائعة -->
                    <div class="recent-posts-card">
                        <h2>أبرز المقالات </h2>
                        <div class="recent-posts-item">
                            <a href="blog-details.html"><div class="popular-post-img"></div></a>
                            <div class="recent-text">
                                <p>12-June-24</p>
                                <a href="blog-details.html"><h3>القدس بين الماضي والحاضر</h3></a>
                            </div>
                        </div>
                        <!-- Ajoute les autres posts -->
                    </div>

                
                </div>
            </div>
        </div> <!-- END ROW -->
    </div>
</div>


        <!-- End Conference Team Area --> 
@stop