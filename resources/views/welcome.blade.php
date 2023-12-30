<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from talim-html.codebasket.xyz/light/index-14.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Dec 2023 05:10:07 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talim - School University & Online Education Template</title>
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/logo/favicon.ico') }}" type="image/x-icon">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/font-awesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/font-awesome/sharp-regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/font-awesome/sharp-solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/mean-menu/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/eocjs-newsticker/eocjs-newsticker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/flag-icons/flag-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/swiper-js/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/slick-slider/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <!-- dark version css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/dark-v.css') }}">
</head>

<body>


    <!-- sidebar area start -->
    <div class="kidba-menu-sidebar">
        <div class="kidba-menu-sidebar-inner">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <span><i class="icofont-brand-nexus"></i></span>
                    <span>close</span>
                </button>
            </div>
            <div class="kidba-menu-sidebar-top mb-40">
                <nav>
                    <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                        <button class="active " id="nav-menu-tab" data-bs-toggle="tab" data-bs-target="#nav-menu"
                            type="button" role="tab" aria-controls="nav-menu" aria-selected="true">Menu</button>
                        <button id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button"
                            role="tab" aria-controls="nav-info" aria-selected="false">Info</button>
                    </div>
                </nav>
            </div>
            <div class="kidba-menu-sidebar-bottom">
                <div class="logo mb-40">
                    <a href="index.html">
                        <img src="{{ officeSetting()->institute_logo ?? '' }}" alt="logo">
                    </a>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-menu" role="tabpanel"
                        aria-labelledby="nav-menu-tab">
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                        <div class="kidba-sidebar-info-content-331">
                            <ul>
                                <li><i class="icofont-clock-time"></i> 9:30am - 6:30pm, Mon - Sun</li>
                                <li><a href="tel:http://80012345676587"><i
                                            class="icofont-phone"></i>{{ officeSetting()->institute_phone ?? '' }}</a>
                                </li>
                                <li><i class="icofont-google-map"></i>{{ officeSetting()->institute_address ?? '' }}
                                </li>
                            </ul>
                        </div>
                        <div class="kidba-sidebar-info-social-331">
                            <a href="{{ officeSetting()->facebook_url ?? '' }}" class="header-right-txt"><i
                                    class="icofont-facebook"></i></a>
                            <a href="#" class="header-right-txt"><i class="icofont-twitter"></i></a>
                            <a href="#" class="header-right-txt"><i class="icofont-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offwrap"></div>
    <!-- sidebar area end -->


    <!-- HEADER SECTION STARTS HERE ↓ -->
    <div class="tl-header">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ officeSetting()->institute_logo ?? '' }}" alt="KIDBA">
                                </a>
                            </div>
                        </div>
                        <div class="d-lg-none d-flex justify-content-end col-6">
                            <button class="tl-hamburger navbar-toggler">
                                <i class="icofont-navigation-menu"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <div class="tl-nav-menu">
                        <ul class="justify-content-center">
                            <li class="tl-nav-item ">
                                <a href="#" role="button">
                                    Home <i class="fa-regular"></i>
                                </a>
                            </li>
                            <li class="tl-nav-item ">
                                <a href="#" role="button">
                                    About <i class="fa-regular"></i>
                                </a>
                            </li>
                            <li class="tl-nav-item ">
                                <a href="#" role="button">
                                    Services <i class="fa-regular"></i>
                                </a>
                            </li>
                            <li class="tl-nav-item ">
                                <a href="#" role="button">
                                    Courses <i class="fa-regular"></i>
                                </a>
                            </li>
                            <li class="tl-nav-item ">
                                <a href="#" role="button">
                                    About Us <i class="fa-regular"></i>
                                </a>
                            </li>
                            <li class="tl-nav-item ">
                                <a href="#">Contact <i class="fa-regular"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-2 d-lg-block d-none">
                    <div class="tl-header-actions kb-16-header-actions d-flex justify-content-end align-items-center">
                        <a href="signin.html">Login</a>
                        <a href="signup.html" class="tl-def-btn tl-14-def-btn"><i class="fa-regular fa-user"></i>
                            Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER SECTION ENDS HERE ↑ -->


    <!-- BANNER SECTION STARTS HERE ↓ -->
    <section class="tl-14-banner">
        <div class="tl-14-banner-slider owl-carousel" style="width: 100%">
            @foreach ($sliders as $slider)
                <img class="tl-14-banner-slide" src="{{ $slider->image ??''}}" alt="Banner Background">
            @endforeach
        </div>
        <div class="tl-14-banner-slider-nav" id="tl-14-banner-slider-nav"></div>

        <div class="tl-14-banner-txt">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-10 col-xxs-12">
                        <h1 class="tl-14-banner-title">Enhancing Learning with Language Models.</h1>
                        <p class="tl-14-banner-descr">Through a combination of lectures, readings, and discussions,
                            students will gain a solid foundation in educational psychology.</p>
                        <form action="#" class="tl-14-banner-search-form">
                            <input type="search" name="Search" class="tl-14-banner-search-field"
                                id="tl-14-banner-search-field" placeholder="Search your course">
                            <button type="submit" class="tl-def-btn tl-14-def-btn tl-14-banner-search-btn">Find
                                course</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION ENDS HERE ↑ -->


    <!-- CATEGORIES SECTION STARTS HERE ↓ -->
    <div class="tl-3-programs-pills tl-14-categories pt-120 pb-120" data-bg-color="#F3F1F1">
        <div class="container">
            <h2 class="tl-14-section-title">Popular Categories</h2>

            <div class="row tl-14-categories-row">
                <div class="col-lg-3 col-md-4 col-6 col-xxs-12">
                    <a href="#" class="tl-3-single-program tl-14-category">
                        <div class="tl-3-single-program-icon">
                            <img src="{{ asset('assets/frontend/images/tl-3/icon-1.png') }}" alt="icon">
                        </div>
                        <h5 class="tl-3-single-program-title">Data Science</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 col-xxs-12">
                    <a href="#" class="tl-3-single-program tl-14-category">
                        <div class="tl-3-single-program-icon">
                            <img src="{{ asset('assets/frontend/images/tl-3/icon-2.png') }}" alt="icon">
                        </div>
                        <h5 class="tl-3-single-program-title">Language</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 col-xxs-12">
                    <a href="#" class="tl-3-single-program tl-14-category">
                        <div class="tl-3-single-program-icon">
                            <img src="{{ asset('assets/frontend/images/tl-3/icon-3.png') }}" alt="icon">
                        </div>
                        <h5 class="tl-3-single-program-title">Literature</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 col-xxs-12">
                    <a href="#" class="tl-3-single-program tl-14-category">
                        <div class="tl-3-single-program-icon">
                            <img src="{{ asset('assets/frontend/images/tl-3/icon-4.png') }}" alt="icon">
                        </div>
                        <h5 class="tl-3-single-program-title">Biology</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 col-xxs-12">
                    <a href="#" class="tl-3-single-program tl-14-category">
                        <div class="tl-3-single-program-icon">
                            <img src="{{ asset('assets/frontend/images/tl-3/icon-5.png') }}" alt="icon">
                        </div>
                        <h5 class="tl-3-single-program-title">Math's</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 col-xxs-12">
                    <a href="#" class="tl-3-single-program tl-14-category">
                        <div class="tl-3-single-program-icon">
                            <img src="{{ asset('assets/frontend/images/tl-3/icon-6.png') }}" alt="icon">
                        </div>
                        <h5 class="tl-3-single-program-title">Development</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 col-xxs-12">
                    <a href="#" class="tl-3-single-program tl-14-category">
                        <div class="tl-3-single-program-icon">
                            <img src="{{ asset('assets/frontend/images/tl-3/icon-7.png') }}" alt="icon">
                        </div>
                        <h5 class="tl-3-single-program-title">Drawing</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 col-xxs-12">
                    <a href="#" class="tl-3-single-program tl-14-category">
                        <div class="tl-3-single-program-icon">
                            <img src="{{ asset('assets/frontend/images/tl-3/icon-8.png') }}" alt="icon">
                        </div>
                        <h5 class="tl-3-single-program-title">Informatics</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORIES SECTION ENDS HERE ↑ -->


    <!-- ABOUT SECTION STARTS HERE ↓ -->
    <section class="tl-14-about pt-120 pb-120"
        data-background="{{ asset('assets/frontend/images/tl-14/cta-bg.png') }}">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <div class="tl-14-about-img">
                        <img src="{{ asset('assets/frontend/images/tl-14/about-img.jpg') }}" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tl-14-about-txt">
                        <h6 class="tl-13-about-sub-title">Next Level Learning</h6>
                        <h2 class="tl-14-section-title">Potential Online Learning Management System.</h2>
                        <p class="tl-14-about-descr">Mauris sit amet lacinia est, vitae tristique metus. Nulla
                            facilisi. Mauris tempor nibh vitae pulvinar ultricies. Sed malesuada placerat metus. Vivamus
                            sagittis arcu elit semper, eget varius turpis posuere.</p>

                        <ul class="tl-14-about-service-list">
                            <li>Admission & Records</li>
                            <li>Board Agendas</li>
                            <li>Career Interviews</li>
                            <li>Register For Classes</li>
                        </ul>

                        <div class="tl-14-about-actions">
                            <div class="tl-14-about-video">
                                <a href="https://www.youtube.com/watch?v=PtLz0ZSKmBM&amp;feature=youtu.be"
                                    data-fslightbox class="tl-14-about-video-btn"><i class="fa-solid fa-play"></i></a>
                                <span class="tl-14-about-video-txt">Watch Video</span>
                            </div>

                            <div class="tl-14-about-achievement">
                                <span class="achievement-num">23+</span>
                                <span class="achievement-name">Years Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION ENDS HERE ↑ -->


    <!-- COURSES SECTION STARTS HERE ↓ -->
    <div class="tl-14-courses pb-120 pt-120" data-bg-color="#F3F1F1">
        <div class="container">
            <h2 class="tl-14-section-title text-center">Our Popular Courses</h2>

            <div class="tl-14-courses-row owl-carousel">
                <div class="tl-12-course tl-14-course">
                    <div class="tl-12-course-img">
                        <img src="{{ asset('assets/frontend/images/tl-4/admission-bg.jpg') }}" alt="Course Image">
                        <span class="tl-12-course-price">$53</span>
                    </div>

                    <div class="tl-12-course-txt">
                        <div class="tl-12-course-info">
                            <h6 class="tl-12-course-category">Mathematics</h6>
                            <div class="tl-12-course-ratings">
                                <span class="tl-12-course-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <span>(4.8 Rating)</span>
                            </div>
                        </div>
                        <h4 class="tl-12-course-title"><a href="#">Teaching Math and Science Inquiry-Based
                                Approaches</a></h4>
                        <p class="tl-12-course-descr">There are many variations of passages of Lorem Ipsum available,
                            but majority.</p>

                        <div class="tl-14-course-footer">
                            <div class="tl-12-course-stats">
                                <div class="tl-12-course-stat">
                                    <span class="tl-12-course-stat-icon"><i
                                            class="fa-regular fa-book-blank"></i></span>
                                    <span class="tl-12-course-stat-txt">6 Lessons</span>
                                </div>

                                <div class="tl-12-course-stat">
                                    <span class="tl-12-course-stat-icon"><i
                                            class="fa-regular fa-user-group"></i></span>
                                    <span class="tl-12-course-stat-txt">32 Students</span>
                                </div>
                            </div>
                            <a href="#" class="tl-12-course-btn"> View Course <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="tl-12-course tl-14-course">
                    <div class="tl-12-course-img">
                        <img src="{{ asset('assets/frontend/images/tl-14/cta-img.jpg') }}" alt="Course Image">
                        <span class="tl-12-course-price">$53</span>
                    </div>

                    <div class="tl-12-course-txt">
                        <div class="tl-12-course-info">
                            <h6 class="tl-12-course-category">Mathematics</h6>
                            <div class="tl-12-course-ratings">
                                <span class="tl-12-course-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <span>(4.8 Rating)</span>
                            </div>
                        </div>
                        <h4 class="tl-12-course-title"><a href="#">Teaching Math and Science Inquiry-Based
                                Approaches</a></h4>
                        <p class="tl-12-course-descr">There are many variations of passages of Lorem Ipsum available,
                            but majority.</p>

                        <div class="tl-14-course-footer">
                            <div class="tl-12-course-stats">
                                <div class="tl-12-course-stat">
                                    <span class="tl-12-course-stat-icon"><i
                                            class="fa-regular fa-book-blank"></i></span>
                                    <span class="tl-12-course-stat-txt">6 Lessons</span>
                                </div>

                                <div class="tl-12-course-stat">
                                    <span class="tl-12-course-stat-icon"><i
                                            class="fa-regular fa-user-group"></i></span>
                                    <span class="tl-12-course-stat-txt">32 Students</span>
                                </div>
                            </div>
                            <a href="#" class="tl-12-course-btn"> View Course <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="tl-12-course tl-14-course">
                    <div class="tl-12-course-img">
                        <img src="{{ asset('assets/frontend/images/tl-13/about-img.jpg') }}" alt="Course Image">
                        <span class="tl-12-course-price">$53</span>
                    </div>

                    <div class="tl-12-course-txt">
                        <div class="tl-12-course-info">
                            <h6 class="tl-12-course-category">Mathematics</h6>
                            <div class="tl-12-course-ratings">
                                <span class="tl-12-course-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <span>(4.8 Rating)</span>
                            </div>
                        </div>
                        <h4 class="tl-12-course-title"><a href="#">Teaching Math and Science Inquiry-Based
                                Approaches</a></h4>
                        <p class="tl-12-course-descr">There are many variations of passages of Lorem Ipsum available,
                            but majority.</p>

                        <div class="tl-14-course-footer">
                            <div class="tl-12-course-stats">
                                <div class="tl-12-course-stat">
                                    <span class="tl-12-course-stat-icon"><i
                                            class="fa-regular fa-book-blank"></i></span>
                                    <span class="tl-12-course-stat-txt">6 Lessons</span>
                                </div>

                                <div class="tl-12-course-stat">
                                    <span class="tl-12-course-stat-icon"><i
                                            class="fa-regular fa-user-group"></i></span>
                                    <span class="tl-12-course-stat-txt">32 Students</span>
                                </div>
                            </div>
                            <a href="#" class="tl-12-course-btn"> View Course <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="tl-12-course tl-14-course">
                    <div class="tl-12-course-img">
                        <img src="{{ asset('assets/frontend/images/tl-13/about-img.jpg') }}" alt="Course Image">
                        <span class="tl-12-course-price">$53</span>
                    </div>

                    <div class="tl-12-course-txt">
                        <div class="tl-12-course-info">
                            <h6 class="tl-12-course-category">Mathematics</h6>
                            <div class="tl-12-course-ratings">
                                <span class="tl-12-course-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <span>(4.8 Rating)</span>
                            </div>
                        </div>
                        <h4 class="tl-12-course-title"><a href="#">Teaching Math and Science Inquiry-Based
                                Approaches</a></h4>
                        <p class="tl-12-course-descr">There are many variations of passages of Lorem Ipsum available,
                            but majority.</p>

                        <div class="tl-14-course-footer">
                            <div class="tl-12-course-stats">
                                <div class="tl-12-course-stat">
                                    <span class="tl-12-course-stat-icon"><i
                                            class="fa-regular fa-book-blank"></i></span>
                                    <span class="tl-12-course-stat-txt">6 Lessons</span>
                                </div>

                                <div class="tl-12-course-stat">
                                    <span class="tl-12-course-stat-icon"><i
                                            class="fa-regular fa-user-group"></i></span>
                                    <span class="tl-12-course-stat-txt">32 Students</span>
                                </div>
                            </div>
                            <a href="#" class="tl-12-course-btn"> View Course <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tl-6-slider-dots tl-14-slider-dots" id="tl-14-courses-slider-dots"></div>
        </div>
    </div>
    <!-- COURSES SECTION ENDS HERE ↑ -->


    <!-- SOFTWARE SECTION STARTS HERE ↓ -->
    <section class="tl-14-software pt-120 pb-120">
        <div class="container">
            <h2 class="tl-14-section-title">Want to know More About The Costs of LMS Software?</h2>

            <div class="tl-14-software-slider owl-carousel">
                <div class="tl-14-software-slide tl-8-course" data-bg-color="#F3F1F1" data-dot="<button>01<button>">
                    <div class="tl-8-course-txt">
                        <span class="tl-14-software-slide-index">01</span>
                        <h3 class="tl-8-course-title">Depending on Complexity of The LMS and Needs of The Organization
                        </h3>
                        <p class="tl-8-course-descr">Mauris sit amet lacinia est, vitae tristique metus. Nulla
                            facilisi. Mauris tempor nibh vitae pulvinar ultricies. Sed malesuada placerat metus. Vivamus
                            sagittis arcu elit semper, eget varius turpis posuere.</p>
                        <a href="#" class="tl-def-btn tl-14-def-btn">Read The Article</a>
                    </div>

                    <div class="tl-8-course-img">
                        <img src="{{ asset('assets/frontend/images/tl-14/about-img.jpg') }}" alt="About Image">
                    </div>
                </div>

                <div class="tl-14-software-slide tl-8-course" data-bg-color="#F3F1F1" data-dot="<button>02<button>">
                    <div class="tl-8-course-txt">
                        <span class="tl-14-software-slide-index">02</span>
                        <h3 class="tl-8-course-title">Depending on Complexity of The LMS and Needs of The Organization
                        </h3>
                        <p class="tl-8-course-descr">Mauris sit amet lacinia est, vitae tristique metus. Nulla
                            facilisi. Mauris tempor nibh vitae pulvinar ultricies. Sed malesuada placerat metus. Vivamus
                            sagittis arcu elit semper, eget varius turpis posuere.</p>
                        <a href="#" class="tl-def-btn tl-14-def-btn">Read The Article</a>
                    </div>

                    <div class="tl-8-course-img">
                        <img src="{{ asset('assets/frontend/images/tl-4/admission-bg.jpg') }}" alt="About Image">
                    </div>
                </div>

                <div class="tl-14-software-slide tl-8-course" data-bg-color="#F3F1F1" data-dot="<button>03<button>">
                    <div class="tl-8-course-txt">
                        <span class="tl-14-software-slide-index">03</span>
                        <h3 class="tl-8-course-title">Depending on Complexity of The LMS and Needs of The Organization
                        </h3>
                        <p class="tl-8-course-descr">Mauris sit amet lacinia est, vitae tristique metus. Nulla
                            facilisi. Mauris tempor nibh vitae pulvinar ultricies. Sed malesuada placerat metus. Vivamus
                            sagittis arcu elit semper, eget varius turpis posuere.</p>
                        <a href="#" class="tl-def-btn tl-14-def-btn">Read The Article</a>
                    </div>

                    <div class="tl-8-course-img">
                        <img src="{{ asset('assets/frontend/images/tl-1/banner-img.jpg') }}" alt="About Image">
                    </div>
                </div>
            </div>

            <div class="tl-14-software-slider-controls position-relative">
                <div class="tl-14-slider-nav" id="tl-14-software-slider-nav"></div>
                <div class="tl-14-software-slider-dots">
                    <button>01</button>
                    <button>02</button>
                    <button>03</button>
                </div>
            </div>
        </div>
    </section>
    <!-- SOFTWARE SECTION ENDS HERE ↑ -->


    <!-- CTA(CALL TO ACTION) SECTION STARTS HERE ↓ -->
    <section class="tl-14-cta" data-bg-color="var(--black)">
        <div class="container">
            <div class="row tl-14-cta-row align-items-center">
                <div class="col-xxl-7 col-lg-6">
                    <div class="tl-14-cta-img d-flex justify-content-end">
                        <img src="{{ asset('assets/frontend/images/tl-14/cta-img.jpg') }}" alt="image">
                    </div>
                </div>

                <div class="col-xxl-5 col-lg-6">
                    <div class="tl-14-cta-txt">
                        <h2 class="tl-14-section-title tl-14-cta-title">Empowering Organizations Through an Effective
                            Learning Management System.</h2>
                        <p class="tl-14-cta-descr">Mauris sit amet lacinia est, vitae tristique metus. Nulla facilisi.
                        </p>
                        <div class="tl-14-cta-btns">
                            <a href="#" class="tl-def-btn tl-14-def-btn">Let’s Talk</a>
                            <a href="#" class="tl-14-cta-btn-2">See Online Demo <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>

                        <!-- vectors ↓ -->
                        <div class="tl-14-cta-vectors">
                            <img src="{{ asset('assets/frontend/images/tl-14/vector-1.png') }}" alt="Vector">
                            <img src="{{ asset('assets/frontend/images/tl-14/vector-2.png') }}" alt="Vector">
                            <img src="{{ asset('assets/frontend/images/tl-14/vector-3.png') }}" alt="Vector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA(CALL TO ACTION) SECTION ENDS HERE ↑ -->


    <!-- REVIEW SECTION STARTS HERE ↓ -->
    <section class="tl-14-testimonial pt-120">
        <div class="container">
            <h2 class="tl-14-section-title">2340+ Teams Have Adopted The 360Learning Suite</h2>

            <div class="tl-14-testimonial-slider">
                <div class="tl-14-testimony">
                    <img src="{{ asset('assets/frontend/images/tl-14/quote-icon.png') }}" alt="Quote Icon">
                    <p class="tl-14-testimony-txt">I love that solvency lets us manage everything in one place. It's
                        super helpful to be able to listen to voice samples, upload our own lists, and find quality
                        salespeople that can grow with our team.</p>
                </div>

                <div class="tl-14-testimony">
                    <img src="{{ asset('assets/frontend/images/tl-14/quote-icon.png') }}" alt="Quote Icon">
                    <p class="tl-14-testimony-txt">I love that solvency lets us manage everything in one place. It's
                        super helpful to be able to listen to voice samples, upload our own lists, and find quality
                        salespeople that can grow with our team.</p>
                </div>

                <div class="tl-14-testimony">
                    <img src="{{ asset('assets/frontend/images/tl-14/quote-icon.png') }}" alt="Quote Icon">
                    <p class="tl-14-testimony-txt">I love that solvency lets us manage everything in one place. It's
                        super helpful to be able to listen to voice samples, upload our own lists, and find quality
                        salespeople that can grow with our team.</p>
                </div>

                <div class="tl-14-testimony">
                    <img src="{{ asset('assets/frontend/images/tl-14/quote-icon.png') }}" alt="Quote Icon">
                    <p class="tl-14-testimony-txt">I love that solvency lets us manage everything in one place. It's
                        super helpful to be able to listen to voice samples, upload our own lists, and find quality
                        salespeople that can grow with our team.</p>
                </div>
            </div>

            <div class="tl-14-testimonial-users">
                <div class="tl-14-testimony-user">
                    <img src="{{ asset('assets/frontend/images/tl-4/user-1.jpg') }}" alt="reviewer image">
                    <div class="tl-14-testimony-user-txt">
                        <h6 class="tl-14-testimony-user-name">Desmond Eagle</h6>
                        <span class="tl-14-testimony-user-label">Math Teacher</span>
                    </div>
                </div>

                <div class="tl-14-testimony-user">
                    <img src="{{ asset('assets/frontend/images/tl-4/user-2.jpg') }}" alt="reviewer image">
                    <div class="tl-14-testimony-user-txt">
                        <h6 class="tl-14-testimony-user-name">lauri max</h6>
                        <span class="tl-14-testimony-user-label">Math Teacher</span>
                    </div>
                </div>

                <div class="tl-14-testimony-user">
                    <img src="{{ asset('assets/frontend/images/tl-4/user-3.jpg') }}" alt="reviewer image">
                    <div class="tl-14-testimony-user-txt">
                        <h6 class="tl-14-testimony-user-name">Yousouf abir</h6>
                        <span class="tl-14-testimony-user-label">Math Teacher</span>
                    </div>
                </div>

                <div class="tl-14-testimony-user">
                    <img src="{{ asset('assets/frontend/images/tl-4/user-4.jpg') }}" alt="reviewer image">
                    <div class="tl-14-testimony-user-txt">
                        <h6 class="tl-14-testimony-user-name">Ishani shah</h6>
                        <span class="tl-14-testimony-user-label">Math Teacher</span>
                    </div>
                </div>
            </div>

            <div class="tl-1-stats">
                <div class="tl-1-stat">
                    <span class="tl-1-stat-num">29+</span>
                    <h6 class="tl-1-stat-name">Year Experiences</h6>
                </div>
                <div class="tl-1-stat">
                    <span class="tl-1-stat-num">5k+</span>
                    <h6 class="tl-1-stat-name">Enrolled Learners</h6>
                </div>
                <div class="tl-1-stat">
                    <span class="tl-1-stat-num">36+</span>
                    <h6 class="tl-1-stat-name">Education Awards</h6>
                </div>
                <div class="tl-1-stat">
                    <span class="tl-1-stat-num">8k+</span>
                    <h6 class="tl-1-stat-name">Video Tutorials</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- REVIEW SECTION ENDS HERE ↑ -->


    <!-- TEACHERS START ↓ -->
    <section class="tl-1-teachers pt-120 pb-120">
        <div class="container">
            <div class="tl-14-section-heading">
                <h2 class="tl-14-section-title">Our Best Teachers.</h2>
                <a href="#" class="tl-14-section-heading-action tl-def-btn tl-14-def-btn">View All member</a>
            </div>

            <div class="tl-1-teachers-slider owl-carousel" id="tl-14-teachers-slider">
                <div class="tl-1-teacher tl-14-teacher">
                    <img src="{{ asset('assets/frontend/images/tl-2/teacher-1.jpg') }}" alt="Teacher Image"
                        class="tl-1-teacher-img">

                    <div class="tl-1-teacher-info tl-14-teacher-info">
                        <h5 class="tl-14-teacher-title"><a href="#">Nathaneal Down</a></h5>
                        <h6 class="tl-14-teacher-sub-title">Music Teacher</h6>
                    </div>
                </div>

                <div class="tl-1-teacher tl-14-teacher">
                    <img src="{{ asset('assets/frontend/images/tl-2/teacher-2.jpg') }}" alt="Teacher Image"
                        class="tl-1-teacher-img">

                    <div class="tl-1-teacher-info tl-14-teacher-info">
                        <h5 class="tl-14-teacher-title"><a href="#">Parsley Montana</a></h5>
                        <h6 class="tl-14-teacher-sub-title">Math Teacher</h6>
                    </div>
                </div>

                <div class="tl-1-teacher tl-14-teacher">
                    <img src="{{ asset('assets/frontend/images/tl-2/teacher-3.jpg') }}" alt="Teacher Image"
                        class="tl-1-teacher-img">

                    <div class="tl-1-teacher-info tl-14-teacher-info">
                        <h5 class="tl-14-teacher-title"><a href="#">Douglas Lyphe</a></h5>
                        <h6 class="tl-14-teacher-sub-title">Art Teacher</h6>
                    </div>
                </div>

                <div class="tl-1-teacher tl-14-teacher">
                    <img src="{{ asset('assets/frontend/images/tl-2/teacher-2.jpg') }}" alt="Teacher Image"
                        class="tl-1-teacher-img">

                    <div class="tl-1-teacher-info tl-14-teacher-info">
                        <h5 class="tl-14-teacher-title"><a href="#">Douglas Lyphe</a></h5>
                        <h6 class="tl-14-teacher-sub-title">Art Teacher</h6>
                    </div>
                </div>
            </div>

            <div class="tl-6-slider-dots tl-14-slider-dots" id="tl-1-teachers-slider-dots"></div>
        </div>
    </section>
    <!-- TEACHERS END ↑ -->


    <!-- BLOGS SECTION STARTS HERE -->
    <section class="tl-14-blogs tl-3-section-spacing" data-bg-color="#F3F1F1">
        <div class="container">
            <div class="tl-14-section-heading">
                <h2 class="tl-14-section-title">Latest News Blogs & Articles.</h2>
                <a href="#" class="tl-14-section-heading-action">View All Blog <i
                        class="fa-regular fa-arrow-right"></i></a>
            </div>

            <div class="row g-xl-4 g-3 justify-content-center justify-content-md-around">
                <div class="col-xl-6 col-lg-10 ">
                    <div class="tl-single-blog tl-14-blog">
                        <div class="tl-single-blog-img">
                            <img src="{{ asset('assets/frontend/images/tl-4/blog-1.jpg') }}" alt="Blog Thumbnail">
                        </div>

                        <div class="tl-single-blog-txt tl-14-blog-txt">
                            <ul class="tl-11-latest-article-infos tl-14-blog-infos">
                                <li>March 24, 2023</li>
                                <li>Education</li>
                            </ul>
                            <h4 class="tl-single-blog-title"><a href="#">The Role of LMS in Competency-Based
                                    Fostering Development.</a></h4>
                            <a class="tl-single-blog-btn" href="#">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-10 ">
                    <div class="tl-single-blog tl-14-blog">
                        <div class="tl-single-blog-img">
                            <img src="{{ asset('assets/frontend/images/tl-4/blog-2.jpg') }}" alt="Blog Thumbnail">
                        </div>

                        <div class="tl-single-blog-txt tl-14-blog-txt">
                            <ul class="tl-11-latest-article-infos tl-14-blog-infos">
                                <li>March 24, 2023</li>
                                <li>Education</li>
                            </ul>
                            <h4 class="tl-single-blog-title"><a href="#">The Future of Education Exploring the
                                    Role of LMS in Modern Learning.</a></h4>
                            <a class="tl-single-blog-btn" href="#">Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOGS SECTION ENDS HERE -->


    <!-- FOOTER SECTION STARTS HERE ↓ -->
    <footer class="tl-footer tl-1-footer tl-14-footer">
        <div class="container">
            <div class="tl-footer-top">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="tl-footer-widget tl-11-footer-widget">
                            <a href="index.html" class="logo tl-footer-widget-title">
                                <img src="{{ asset('assets/frontend/images/logos/tl-14-logo-light.png') }}"
                                    alt="logo">
                            </a>
                            <p class="tl-1-footer-descr">Nullam nulla eget dui efficitur tempor sit amet quis magna,
                                Suspendisse.</p>
                            <div class="tl-1-footer-socials tl-14-footer-socials">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 order-1 order-sm-2 order-lg-1">
                        <div class="row gy-5">
                            <div class="col-6 col-xxs-12">
                                <div class="tl-footer-widget tl-11-footer-widget">
                                    <h5 class="tl-footer-widget-title">Our Campus</h5>
                                    <ul class="tl-footer-links tl-14-footer-links">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">Help Centre</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-xxs-12">
                                <div class="tl-footer-widget tl-11-footer-widget">
                                    <h5 class="tl-footer-widget-title">Academics</h5>
                                    <ul class="tl-footer-links tl-14-footer-links">
                                        <li><a href="#">Programming</a></li>
                                        <li><a href="#">Art &amp; Design</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Engineering</a></li>
                                        <li><a href="#">Photography</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 order-2 order-sm-1 order-lg-2">
                        <div class="tl-footer-widget tl-3-footer-widget">
                            <h5 class="tl-footer-widget-title">Subscribe</h5>
                            <form action="#" class="tl-1-nwsltr-form">
                                <input type="email" name="nwsltr-mail" id="tl-1-nwsltr-mail"
                                    class="tl-1-nwsltr-mail-input" placeholder="Get news & updates">
                                <button class="tl-1-nwsltr-btn" id="tl-1-nwsltr-btn">@</button>
                            </form>
                            <p class="tl-1-nwsltr-txt">Register now to get latest updates on promotions & coupons.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tl-footer-bottom tl-11-footer-bottom">
                <div class="row gy-4 align-items-center">
                    <div class="col-md-6">
                        <p class="tl-1-copyright-txt m-0">Copyright &copy; 2023 All Rights Reserved by Kidba</p>
                    </div>

                    <div class="col-md-6">
                        <ul class="tl-1-footer-bottom-actions">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term of Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION ENDS HERE ↑ -->


    <!-- JS FILES ↓ -->
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/fs-lightbox/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/eocjs-newsticker/eocjs-newsticker.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/mean-menu/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/swiper-js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/slick-slider/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bx-slider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/eocjs-newsticker/eocjs-newsticker.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/syotimer/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/mixitup/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>


<!-- Mirrored from talim-html.codebasket.xyz/light/index-14.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Dec 2023 05:10:11 GMT -->

</html>
