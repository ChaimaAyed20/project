@extends('frontend.layouts.app')
@section('content')
 <!-- Start Page Banner Area -->
        <div class="page-banner-area tunisie-palestine">
            <div class="container-fluid">
                <div class="single-page-banner-content">
                    <h1>فلسطين بعيون تونسية</h1>
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

    <!-- Start Event Details Area -->
<div class="events-details-area pt-100 pb-70">
  <div class="container-fluid">
    <div class="row align-items-center">

      <!-- 📝 Texte à droite -->
      <div class="col-lg-6 order-lg-2">
        <div class="single-event-details-content px-4">
          <h2>نحن ننظم فعاليات وبرامج سنوية</h2>
          <p>في مختلف أنحاء العالم، تُنظَّم فعاليات وبرامج سنوية دعمًا للقضية الفلسطينية وحقوق الشعب الفلسطيني. تشمل هذه</p>
          <p>الفعاليات وقفات تضامنية، معارض، ندوات، وحملات توعية تهدف إلى تسليط الضوء على معاناة الفلسطينيين وتعزيز</p>
          <p>الدعم الدولي لهم. نؤمن بأن صوت العدالة لا حدود له، ونواصل العمل لإيصال رسالة فلسطين إلى العالم أجمع</p>

          <div class="event-details-card mt-4">
            <img src="assets/images/events/events-details-icon.svg" alt="images">
            <p>
              “There are many variations of passages of available the majority have suffered isting alteration
              injected humour or words which so look even slightly believable embarrassing in
              mus delectus incidunt tincidunt placerat nobis dolore maiores etiam porttitor.”
            </p>
          </div>
        </div>
      </div>

      <!-- 📷 Images à gauche -->
      <div class="col-lg-6 order-lg-1">
        <div class="single-conference-img">
          <img src="assets/images/conference/conference-img-3.jpg" alt="images" data-cue="slideInDown" data-duration="2000">
          <div class="conference-img-3" data-cue="slideInUp" data-duration="2000">
            <img src="assets/images/conference/conference-img-2.jpg" alt="images">
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- End Event Details Area -->

@stop