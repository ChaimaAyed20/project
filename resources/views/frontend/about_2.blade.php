@extends('frontend.layouts.app')
@section('content')
<!-- Start Page Banner Area -->
        <div class="page-banner-area events-pages event-details">
            <div class="container-fluid">
                <div class="single-page-banner-content">
                    <h1>مكتبة رقمية</h1>
                    <ul>
                        <li><a href="index.html">المباحث</a></li>
                        <li>مكتبة رقمية</li>
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
       

      <div class="place-area pt-100 pb-70">
<div class="container">
    <!-- Texte au centre -->
    <div class="row mb-2">
        <div class="section-title">
            <span class="top-title" >ابدأ رحلتك المعرفية الآن</span>
        </div>
    </div>

    <!-- Ligne avec texte à gauche et filtre à droite -->
  <div class="row align-items-center">
    <div class="col text-start">
      <p id="dynamicPhrase"  style="font-weight: bold; font-size: 28px;">اليك أفضل الكتب المتعلقة بال...</p>
    </div>
    <div class="col text-end">
        <div class="d-flex justify-content-end align-items-center gap-2">
      <label for="planFilter" class="me-2" style="font-size: 20px; font-weight: bold; color: #000;">اختر النوع:</label>
      <select id="planFilter" class="custom-select-big" >
        <option value="monthly">تاريخ</option>
        <option value="yearly">سياسة</option>
        <option value="dayly">دين</option>
      </select>
</div>
    </div>
  </div>
</div>
        <div class="planning-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-6" data-cue="fadeIn" data-duration="1000">
                        <div class="single-planning-content">
                            <div class="planning-image">
                                <img src="assets/images/planning/planning-1.jpg" alt="images">
                            </div>
                            <div class="planning-card">
                                <h3>العنوان</h3>
                                <p>الكاتب</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6" data-cue="fadeIn" data-duration="1000">
                        <div class="single-planning-content">
                            <div class="planning-image">
                                <img src="assets/images/planning/planning-2.jpg" alt="images">
                            </div>
                            <div class="planning-card">
                                <h3>العنوان</h3>
                                <p>الكاتب</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6" data-cue="fadeIn" data-duration="1000">
                        <div class="single-planning-content">
                            <div class="planning-image">
                                <img src="assets/images/planning/planning-3.jpg" alt="images">
                            </div>
                            <div class="planning-card">
                                <h3>العنوان</h3>
                                <p>الكاتب</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6" data-cue="fadeIn" data-duration="1000">
                        <div class="single-planning-content">
                            <div class="planning-image">
                                <img src="assets/images/planning/planning-4.jpg" alt="images">
                            </div>
                            <div class="planning-card">
                                <h3>العنوان</h3>
                                <p>الكاتب</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-sm-6 col-md-6" data-cue="fadeIn" data-duration="1000">
                        <div class="single-planning-content">
                            <div class="planning-image">
                                <img src="assets/images/planning/planning-4.jpg" alt="images">
                            </div>
                            <div class="planning-card">
                                <h3>العنوان</h3>
                                <p>الكاتب</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-sm-6 col-md-6" data-cue="fadeIn" data-duration="1000">
                        <div class="single-planning-content">
                            <div class="planning-image">
                                <img src="assets/images/planning/planning-4.jpg" alt="images">
                            </div>
                            <div class="planning-card">
                                <h3>العنوان</h3>
                                <p>الكاتب</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Conference Planning Area --> 

@stop