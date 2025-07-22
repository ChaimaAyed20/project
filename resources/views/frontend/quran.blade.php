@extends('frontend.layouts.app')
@section('content')

        <!-- Start Page Banner Area -->
        <div class="page-banner-area page-pricing-table">
            <div class="container-fluid">
                <div class="single-page-banner-content">
                    <h1>في القرآن</h1>
                    <ul>
                        <li><a href="index.html">المباحث</a></li>
                        <li>فلسطين في القرآن</li>
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
                    <h2>فلسطين في التفسير القرآني: أوراق بحثية</h2>
                </div>
               
             <!-- START ROW: Colonne gauche + droite -->
        <div class="row">
            <!-- Colonne gauche : Liste des textes -->
            <div class="col-lg-8">
                <div class="some-faqs-area pt-100 pb-100">
                    <div class="single-faqs-content">
                        <div class="accordion" id="accordionEvent">
                            @forelse ($archives as $archive)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $archive->id }}">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" 
                                                data-bs-toggle="collapse" 
                                                data-bs-target="#collapse{{ $archive->id }}" 
                                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}" 
                                                aria-controls="collapse{{ $archive->id }}">
                                            {{ $archive->designation_ar }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $archive->id }}" 
                                         class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" 
                                         aria-labelledby="heading{{ $archive->id }}" 
                                         data-bs-parent="#accordionEvent">
                                        <div class="accordion-body">
                                            {!! nl2br(e($archive->description_ar)) !!}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center">لا توجد بيانات لعرضها.</p>
                            @endforelse
                        </div>                        
                    </div>
                </div>
                    <div class="blog-post-btn">
                        <a href="#" class="default-btn">تحميل المزيد<i class="bx bx-plus"></i></a>
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

                    <!-- التصنيفات -->
                    <div class="blog-post-category">
                        <h2>التصنيفات</h2>
                        <ul dir="rtl" style="list-style-type: circle;">
                            <li><a href="#">التاريخ الفلسطيني</a></li>
                            <li><a href="#">النكبة والنكسة</a></li>
                            <li><a href="#">المقاومة والثورات</a></li>
                            <li><a href="#">القدس والمسجد الأقصى</a></li>
                            <li><a href="#">الشخصيات الفلسطينية</a></li>
                        </ul>
                    </div>

                    <!-- الوسوم -->
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
@stop