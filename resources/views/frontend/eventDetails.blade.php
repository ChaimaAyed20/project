@extends('frontend.layouts.app')
@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area events-pages event-details">
    <div class="container-fluid">
        <div class="single-page-banner-content">
            <h1>المزيد عن التظاهرات</h1>
            <ul>
                <li><a href="{{ route('home') }}">الصفحة الرئيسيّة</a></li>
                <li>{{ $event->designation_ar }}</li>
            </ul>
        </div>
    </div>
    <div class="page-banner-shape-1"><img src="{{ asset('assets/images/banner/banner-one-shape-1.png') }}" alt="images"></div>
    <div class="page-banner-shape-2"><img src="{{ asset('assets/images/banner/banner-one-shape-2.png') }}" alt="images"></div>
    <div class="page-banner-shape-3"><img src="{{ asset('assets/images/banner/banner-one-shape-3.png') }}" alt="images"></div>
</div>
<!-- End Page Banner Area -->

<!-- Start Event Details Area -->
<div class="events-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-event-details-content">
                    
                    {{-- Image principale de l’événement --}}
                    @if(!empty($event->cover) && isset($event->cover[0]))
                        <div class="event-details-img">
                            <img src="{{ asset('storage/events/' . $event->cover[0]) }}" alt="Event Image">
                        </div>
                    @endif

                    <h2>{{ $event->designation_ar }}</h2>
                    <p>{{ $event->description_ar }}</p>

                    <div class="event-details-card">
                        <img src="{{ asset('assets/images/events/events-details-icon.svg') }}" alt="images">
                        <p>نؤمن بأن صوت العدالة لا حدود له، ونواصل العمل لإيصال رسالة فلسطين إلى العالم أجمع</p>
                    </div>

                    <h4>معلومات إضافية</h4>
                    <ul class="event-details-list">
                        <li><img src="{{ asset('assets/images/conference/why-the-conference-icon.svg') }}" alt="icon"> المكان: {{ $event->place ?? 'غير محدد' }}</li>
                        <li><img src="{{ asset('assets/images/conference/why-the-conference-icon.svg') }}" alt="icon"> المنظم: {{ $event->organizer ?? 'غير محدد' }}</li>
                        <li><img src="{{ asset('assets/images/conference/why-the-conference-icon.svg') }}" alt="icon"> من {{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y H:i') }} إلى {{ \Carbon\Carbon::parse($event->end_date)->format('d/m/Y H:i') }}</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="event-details-right-content">
                    <div class="event-information-card">
                        <h2>معلومات التظاهرة</h2>
                        <ul>
                            <li>التاريخ:<span>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</span></li>
                            <li>النهاية:<span>{{ \Carbon\Carbon::parse($event->end_date)->format('d M Y H:i') }}</span></li>
                            <li>المكان:<span>{{ $event->place ?? 'غير محدد' }}</span></li>
                        </ul>
                        <a href="#" class="default-btn">اشترك الآن <i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
