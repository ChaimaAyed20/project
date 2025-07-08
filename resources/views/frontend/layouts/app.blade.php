@php
function activeClass($pattern) {
    return Request::is($pattern) ? 'active text-danger' : '';
}
@endphp

<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!--=== Link Of CSS Files ===-->
        <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css"> 
        <link rel="stylesheet" href="assets/css/animate.min.css"> 
        <link rel="stylesheet" href="assets/css/boxicons.min.css">  
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/fancybox.min.css"> 
        <link rel="stylesheet" href="assets/css/meanmenu.min.css"> 
        <link rel="stylesheet" href="assets/css/flaticon.css"> 
        <link rel="stylesheet" href="assets/css/odometer.min.css"> 
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> 
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"> 
        <link rel="stylesheet" href="assets/css/scrollCue.css"> 
        <link rel="stylesheet" href="assets/css/style.css"> 
        <link rel="stylesheet" href="assets/css/responsive.css"> 
        <link rel="stylesheet" href="assets/css/dark.css"> 
        <link rel="stylesheet" href="assets/css/rtl.css"> 

        <!--=== Title & Favicon ===-->
        <title>Nestu - Event Conference & Reunion HTML Template</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png">

    </head>
    <body>
        
        <!-- Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
                <span>N</span>
            </div>
        </div>
        <!-- End Preloader Area --> 

        <!-- Start Dark Mode -->
        <div class="switch-theme-mode">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <!-- End Dark Mode --> 

        <!-- Start Submenu Area -->
        <div class="submenu-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-9">
                        <div class="submenu-left-content">
                            <ul>
                                <li>
                                    <img src="assets/images/submenu-icon-1.svg" alt="images">
                                    <a href="tel:012325621563">012-3256-21563</a>
                                </li>
                                <li>
                                    <img src="assets/images/submenu-icon.svg" alt="images">
                                    <p>Milton Street Here, New York 512 USA</p>
                                </li>
                                <li>
                                    <img src="assets/images/submenu-icon-2.svg" alt="images">
                                    <a href="/cdn-cgi/l/email-protection#3159545d5d5e715f544245441f525e5c"><span class="__cf_email__" data-cfemail="4129242d2d2e012f243235346f222e2c">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <div class="submenu-right-content">
                            <ul>
                                <li>
                                    <p>Follow Us:</p>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/" target="_blank">
                                        <i class='bx bxl-pinterest'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Submenu Area -->

        <!-- Start Menubar Area --> 
       <div class="navbar-area"> 
            <!-- Start Menu For Mobile Device -->  
            <div class="container"> 
                <div class="mobile-nav">  
                    <div class="logo">
                        <a href="index.html"> 
                            <img src="assets/images/logo-one.png" class="logo-light" alt="images">   
                            <img src="assets/images/logo-two.png" class="logo-dark" alt="images">   
                        </a> 
                    </div>
                </div>  
            </div> 
            <!-- End Menu For Mobile Device --> 
            
             <div class="main-nav">         
                <div class="container-fluid">    
                    <nav class="navbar navbar-expand-md navbar-light">   

                        <a href="index.html">   
                            <img src="assets/images/logo-one.png" class="logo-light" alt="images" style="width: 220px;">   
                            <img src="assets/images/logo-two.png" class="logo-dark" alt="images">   
                        </a>   

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent"> 
                            <ul class="navbar-nav m-auto">  
                                <li class="nav-item nav-item-five">  
                                    <a href="#" class="nav-link active">
                                        الصفحة الرئيسيّة
                                    </a>
                                    
                                    <!-- <ul class="dropdown-menu"> 
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link bg-border-top active">Home One</a>        
                                        </li> 
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">Home Two</a>       
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link bg-border-2">Home Three</a>     
                                        </li>  
                                    </ul> -->

                                </li> 

                                <li class="nav-item nav-item-five"> 

                                    <a href="#" class="nav-link dropdown-toggle">
                                        المباحث
                                    </a>    
                                    
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"> 
                                            <a href="#" class="nav-link dropdown-toggle">
                                                ورقات علمية
                                            </a>   
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="speakers.html" class="nav-link bg-border-top">تاريخ</a>     
                                                </li>
                                               <li class="nav-item">
                                                    <a href="speakers-two.html" class="nav-link">جغرافيا</a>     
                                                </li>
                                                <li class="nav-item"> 
                                                    <a href="speakers-three.html" class="nav-link bg-border-2">فلسطين في القرآن</a>      
                                                </li>
                                                <li class="nav-item"> 
                                                    <a href="speakers-three.html" class="nav-link bg-border-2">فلسطين في السّنة</a>      
                                                </li>
                                            </ul>
        
                                        </li>
                                        <li class="nav-item">
                                            <a href="about-2.html" class="nav-link">مكتبة رقمية</a>     
                                        </li> 
                                        <li class="nav-item">
                                            <a href="about-3.html" class="nav-link bg-border-2">مراجع</a>     
                                        </li> 
                                    </ul>

                                </li> 

                                <li class="nav-item nav-item-five"> 

                                    <a href="#" class="nav-link dropdown-toggle">
                                        مستجدات
                                    </a>    
                                    
                                    <ul class="dropdown-menu">
                                        <!-- <li class="nav-item">
                                            <a href="event.html" class="nav-link bg-border-top">تظاهرات</a>     
                                        </li>  -->
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">أخبار</a>     
                                        </li> 

                                        <li class="nav-item"> 

                                            <a href="#" class="nav-link dropdown-toggle">
                                                تظاهرات
                                            </a>   
                                            
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="event.html" class="nav-link bg-border-top">تونسية</a>     
                                                </li>
                                               <li class="nav-item">
                                                    <a href="event.html" class="nav-link">عربية</a>     
                                                </li>
                                                    <li class="nav-item"> 
                                                    <a href="event.html" class="nav-link bg-border-2">عالمية</a>      
                                                </li>  
                                            </ul>
        
                                        </li>

                                       <!-- <li class="nav-item">
                                            <a href="gallery.html" class="nav-link">Gallery</a>     
                                        </li> 
                                        <li class="nav-item">
                                            <a href="venue.html" class="nav-link bg-border-2">Venue</a>     
                                        </li>  -->
                                    </ul>

                                </li> 

                                <li class="nav-item "> 
                                    <a href="gallery.html" class="nav-link"> معرض الصور</a>      
                                </li> 

                               
                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link bg-border-top">شارك مقالاتك</a>     
                                        </li> 
                                 
                                
                                <li class="nav-item"> 
    <a href="contact.html" class="nav-link">تواصل معنا</a>      
</li> 


                            </ul> 


                            <div class="others-option-vg d-flex align-items-center"> 

                                <!-- <div class="option-item">
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search Here" type="text">
            
                                        <button type="submit" class="search-button">
                                            <i class='bx bx-search'></i>
                                        </button>
                                    </form>
                                </div> -->

                               <div class="option-item">
                                    <a href="schedules.html" class="default-btn">فلسطين بعيون تونسية <i class='bx bx-plus'></i></a> 
                                </div>
                            </div>
                        </div>
                    </nav> 
                </div>
            </div> 
            <div class="others-option-for-responsive"> 
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                  
                </div>
            </div>    
        </div>
        <!-- End Menubar Area -->
@yield('content')

        
        <!-- Start Footer Area -->
        <div class="footer-area pt-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-7">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-4" data-cue="slideInUp">
                                <div class="footer-widget">
                                    <a href="index.html">
                                        <img src="assets/images/logo-two.png" alt="images">
                                    </a>
                                    <p>There are many variations of
                                    ipsum available majority have
                                    words which don't look.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-4" data-cue="slideInUp">
                                <div class="footer-widget footer-widget-link">
                                    <h2>روابط مفيدة</h2>
                                    <ul class="footer-widget-list">
                                        <li>
                                            <a href="speakers.html">Speakers</a>
                                        </li>
                                        <li>
                                            <a href="event-details.html">Venue Info</a>
                                        </li>
                                        <li>
                                            <a href="event-details.html">Our Partners</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-4" data-cue="slideInUp">
                                <div class="footer-widget footer-widget-link2">
                                    <h2>البحث عن المؤتمرات</h2>
                                    <ul class="footer-widget-list">
                                        <li>
                                            <a href="#">Business Conference</a>
                                        </li>
                                        <li>
                                            <a href="#">Design Conference</a>
                                        </li>
                                        <li>
                                            <a href="#">Web Design Seminar</a>
                                        </li>
                                        <li>
                                            <a href="#">Global Conference</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="row">
                            <div class="col-xl-5 col-lg-12 col-md-5" data-cue="slideInUp">
                                <div class="footer-instagram">
                                    <h2>مواقع التواصل الاجتماعي</h2>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-2 col-4 col-sm-4 col-md-4">
                                            <div class="instagram-img">
                                                <a href="https://www.instagram.com/?hl=en" target="_blank">
                                                    <img src="assets/images/footer/instagram-1.jpg" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-2 col-4 col-sm-4 col-md-4">
                                            <div class="instagram-img">
                                                <a href="https://www.instagram.com/?hl=en" target="_blank">
                                                    <img src="assets/images/footer/instagram-2.jpg" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-2 col-4 col-sm-4 col-md-4">
                                            <div class="instagram-img">
                                                <a href="https://www.instagram.com/?hl=en" target="_blank">
                                                    <img src="assets/images/footer/instagram-3.jpg" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-2 col-4 col-sm-4 col-md-4">
                                            <div class="instagram-img">
                                                <a href="https://www.instagram.com/?hl=en" target="_blank">
                                                    <img src="assets/images/footer/instagram-4.jpg" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-2 col-4 col-sm-4 col-md-4">
                                            <div class="instagram-img">
                                                <a href="https://www.instagram.com/?hl=en" target="_blank">
                                                    <img src="assets/images/footer/instagram-5.jpg" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-2 col-4 col-sm-4 col-md-4">
                                            <div class="instagram-img">
                                                <a href="https://www.instagram.com/?hl=en" target="_blank">
                                                    <img src="assets/images/footer/instagram-6.jpg" alt="images">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-12 col-md-7" data-cue="slideInUp">
                                <div class="footer-subscribe">
                                    <h2>Subscribe To Our Newsletter</h2>
                                    <form class="newsletter-form" data-toggle="validator" novalidate="true">
                                        <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">
                            
                                        <button type="submit" class="default-btn">
                                            اشترك الان <i class='bx bx-plus'></i> 
                                        </button>
                            
                                        <div id="validator-newsletter" class="form-result"></div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-content">
                    <p>© <b>Nestu</b> is Proudly Owned by <a href="https://hibotheme.com/" target="_blank">HiboTheme</a></p>
                </div>
            </div>
        </div>
        <!-- End Footer Area --> 

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="flaticon-up-arrows"></i>
            <i class="flaticon-up-arrows"></i>
        </div>
        <!-- End Go Top Area -->

        <!--=== Link Of JS Files ===-->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script> 
        <script src="assets/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/downCount.js"></script>
        <script src="assets/js/scrollCue.min.js"></script>
        <script src="assets/js/fancybox.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/parallax.min.js"></script>
        <script src="assets/js/ajaxchimp.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/subscribe-custom.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/custom.js"></script>

    </body>
</html>