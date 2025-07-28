@extends('frontend.layouts.app')
@section('content')
 <!-- Start Page Banner Area -->
       <div class="page-banner-area page-pricing-table">
            <div class="container-fluid">
                <div class="single-page-banner-content">
                    <h1>مقالاتنا و مدوناتنا</h1>
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
        

        <!-- Start Secure Your Place Now Area -->

      <div class="contact-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" data-cue="slideInRight" data-duration="1500">
                        <div class="contact-form-content">
                            <div class="section-title left-title">
                                <span class="top-title">تفاعل معنا </span>
                                <p>تواصل معنا الآن، فنحن هنا للرد على جميع استفساراتك وتقديم الدعم الذي تحتاجه في أسرع وقت ممكن. سواء كان لديك سؤال، اقتراح، أو تحتاج إلى مساعدة، لا تتردد في مراسلتنا.</p>
                            </div>
                            <form id="contactForm" method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="الاسم" required data-error="يرجى إدخال الاسم">
                                            <div class="help-block with-errors"></div> 
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">  
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" placeholder="البريد الالكترروني" required data-error="يرجى إدخال البريد الإلكتروني" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div> 

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" id="subject" class="form-control" placeholder="الموضوع" required data-error="يرجى إدخال الموضوع">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group"> 
                                            <textarea name="message" class="form-control" id="message" cols="5" rows="5" placeholder="أكتب تعليقك" required data-error="يرجى كتابة الرسالة"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">    
                                            أرسل رسالتك <i class="bx bx-plus"></i>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4" data-cue="slideInRight" data-duration="1500">
                        <div class="single-contact-card">
                            <div class="contact-box">
                                <img src="assets/images/conference-schedules/schedules-style-two-icon-4.svg" alt="images">
                                <h3>العنوان</h3>
                                <p>Milton Street Here, New York 512 USA
                                Norwich NR2 1LT</p>
                            </div>
                            <div class="contact-box">
                                <img src="assets/images/submenu-icon-1.svg" alt="images">
                                <h3>رقم الهاتف</h3>
                                <ul>
                                    <li><a href="tel:012325621563">012-3256-21563</a></li>
                                    <li><a href="tel:22476244232">+(224) 762 442 32</a></li>
                                </ul>
                            </div>
                            <div class="contact-box">
                                <img src="assets/images/conference-schedules/schedules-style-two-icon-3.svg" alt="images">
                                <h3>راسلنا عبر البريد الإلكتروني مباشرة</h3>
                                <ul>
                                    <li><a href="/cdn-cgi/l/email-protection#81f2f4f1f1eef3f5c1efe4f2f5f4afe2eeec"><span class="__cf_email__" data-cfemail="5d2e282d2d322f291d33382e2928733e3230">[email&#160;protected]</span></a></li>
                                    <li><a href="/cdn-cgi/l/email-protection#660e030a0a032608031512134805090b"><span class="__cf_email__" data-cfemail="5a323f3636351a343f292e2f74393537">[email&#160;protected]</span></a></li>
                                </ul>
                            </div>
                            <div class="contact-list">
                                <h3>تابعنا</h3>
                                <ul class="team-list">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop