
@extends('frontend.layouts.master')

@section('container')

 <!--==================================================-->
    <!----- Start Techno Slider Area ----->
    <!--==================================================-->
    <div class="slider_list owl-carousel">
        @foreach ($sliders as $slider)
            <div class="slider_area d-flex align-items-center slider1" id="home"
                style="background-image: url('{{ $slider->image ?? '' }}'); background-size: cover; background-position: center;">
                <div class="container">
                    <div class="row">
                        <!--Start Single Portfolio -->
                        <div class="col-lg-12">
                            <div class="single_slider">
                                <div class="slider_content">
                                    <div class="slider_text">
                                        <div class="slider_text_inner wow fadeInLeft" data-wow-delay="0.3s">
                                            <h5>Start learning from here</h5>
                                            <h1>{{ $slider->title ?? '' }}</h1>
                                        </div>
                                        <div class="slider_button pt-5 d-flex wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="button">
                                                <a href="#">Contact Us <i
                                                        class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="slider-video wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="video-icon">
                                                <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
                                                    data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
                                                        class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--==================================================-->
    <!----- End Techno Slider Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Flipbox Top Feature Area ----->
    <!--==================================================-->
    <div class="flipbox_area top_feature">
        <div class="container">
            <div class="row nagative_margin">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-global-1"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Provide All Kind Of Diploma Course</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Provide All Kind Of Diploma Course</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Whether bringing new amazing courses and services to market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-data"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Solution For All IT Security</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Solution For All IT Security</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Whether bringing new amazing products and services to market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-interaction"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>All IT Consultancy Solution</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>All IT Consultancy Solution</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Whether bringing new amazing products and services to market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-developer"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Best Experience Engineer </h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Best Experience Engineer </h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Whether bringing new amazing products and services to market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Flipbox Top Feature Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno About Area ----->
    <!--==================================================-->

    <div class="about_area pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="single_about_thumb mb-3">
                        <div class="single_about_thumb_inner" style="position: relative;">

                            <!-- Image -->
                            <img src="{{ $about->about_image ?? '' }}" style="height: 600px; width:500px;"
                                alt="" />

                            <!-- Video Icon and Link -->
                            <div class="slider-video wow fadeInUp" data-wow-delay="0.3s"
                                style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
                                <div class="video-icon">
                                    <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
                                        data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="single_about_shape">
                        <div class="single_about_shape_thumb bounce-animate">
                            <img src="{{ asset('assets/frontend/images/about-circle.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>About Us</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>{{ $about->title ?? '' }}</h1>
                            {{-- <h1>Provide Best <span>IT Solutions.</span></h1> --}}
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                        <div class="section_content_text pt-4">
                            <p> {!! Str::words($about->about_description ?? '', 150, '..') !!}</p>
                        </div>

                    </div>
                    <div class="singel_about_left_inner pl-4">
                        <div class="button two">
                            <a href="{{ route('about') }}">More Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno About Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Flipbox Area ----->
    <!--==================================================-->
    @if (count($services) > 0)
        <div class="flipbox_area pt-85 pb-70"
            style="background-image:url('../assets/frontend/images/slider/bg2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text_center white mb-55 wow fadeInDown" data-wow-delay="0.4s">
                            <div class="section_sub_title uppercase mb-3">
                                <h6>SERVICES</h6>
                            </div>
                            <div class="section_main_title">
                                <h1>Provide Exclusive Services</h1>
                            </div>
                            <div class="em_bar">
                                <div class="em_bar_bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                            <div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="techno_flipbox_font">
                                    <div class="techno_flipbox_inner">
                                        <div class="techno_flipbox_icon">
                                            <div class="icon">
                                                <i class="flaticon-padlock"></i>
                                            </div>
                                        </div>
                                        <div class="flipbox_title">
                                            <h3>{{ $service->title }}</h3>
                                        </div>
                                        <div class="flipbox_desc">
                                            <p>{!! Str::words($service->description ?? '', 150, '..') !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="techno_flipbox_back "
                                    style="background-image:url('{{ $service->image ?? '' }}');">
                                    <div class="techno_flipbox_inner">
                                        <div class="flipbox_title">
                                            <h3>
                                                <h3>{{ $service->title ?? '' }}</h3>
                                            </h3>
                                        </div>
                                        <div class="flipbox_desc">
                                            <p>{!! Str::words($service->description ?? '', 150, '..') !!}</p>

                                        </div>
                                        <div class="flipbox_button">
                                            <a href="#">Read More<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <!--==================================================-->
    <!----- End Techno Flipbox Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Team Area ----->
    <!--==================================================-->
    @if (count($staffs) > 0)
        <div class="team_area pt-80 pb-75" style="background-image:url('../assets/frontend/images/team-bg2.jpg');">
            <div class="container">
                <div class="row">
                    <!-- Start Section Tile -->
                    <div class="col-lg-9">
                        <div class="section_title text_left mb-50 mt-3 wow fadeInLeft" data-wow-delay="0.4s">

                            <div class="section_sub_title uppercase mb-3">
                                <h6>TEAM MEMBER</h6>
                            </div>
                            <div class="section_main_title">
                                <h1>Our Awesome Creative</h1>
                                <h1>Team Member</h1>
                            </div>
                            <div class="em_bar">
                                <div class="em_bar_bg"></div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="section_button mt-50 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="button two">
                                <a href="#">Join Our Team</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($staffs as $staff)
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single_team mb-4 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="single_team_thumb">
                                    <img src="{{ $staff->image ?? '' }}" height="250px;" alt="" />
                                    <div class="single_team_icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                                <div class="single_team_content">
                                    <h4>{{ $staff->full_name ?? '' }}</h4>
                                    <span>{{ $staff->post ?? '' }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif
    <!--==================================================-->
    <!----- End Techno Team Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Case Study Area ----->
    <!--==================================================-->
    <div class="case_study_area pt-80" id="portfolio">
        <div class="container-fluid">
            <div class="row">
                <!-- Start Section Tile -->
                <div class="col-lg-12">
                    <div class="section_title text_center mb-50 mt-3 wow fadeInDown" data-wow-delay="0.4s">

                        <div class="section_sub_title uppercase mb-3">
                            <h6>FEATURES CASE</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Latest Case Study</h1>
                            <h1>For Your Business</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-item">

                    <div class="row">
                        <!--portfolio owl curousel -->

                        <div class="case_study_list owl-carousel curosel-style">
                            <!--Start Single Portfolio -->
                            @foreach ($courses as $course)
                                <div class="col-lg-12 pdn_0">
                                    <div class="single_case_study wow fadeInUp" data-wow-delay="0.4s"
                                        style="padding: 10px;">
                                        <div class="single_case_study_inner">

                                            <div class="single_case_study_thumb">
                                                <a href="case-study-details.html"><img src="{{ $course->image }}"
                                                        alt="" style="height: 270px; width:370;" /></a>
                                            </div>
                                        </div>
                                        <div class="single_case_study_content">
                                            <div class="single_case_study_content_inner">
                                                <div class="row">
                                                    <div class="col-md-4 text-center mt-2"
                                                        style="border-right: 1.5px solid #0b24e3;padding-right: 15px;">
                                                        {{ $course->time }}
                                                    </div>
                                                    <div class="col-md-4 text-center"
                                                        style="border-right: 1.5px solid #0b24e3;padding-right: 15px;">
                                                        {{ $course->title }}
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        {{ $course->price }}
                                                    </div>
                                                </div>
                                                {{-- <h2><a href="case-study-details.html"></a>{{ $course->title }}</h2>
                                                <span>{!! Illuminate\Support\Str::limit($course->description ?? '', 30, '') !!}</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Case Study Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno How IT Work Area ----->
    <!--==================================================-->
    <div class="how_it_work pt-50 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInDown" data-wow-delay="0.4s">
                    <div class="section_title text_center mb-60 mt-3">

                        <div class="section_sub_title uppercase mb-3">
                            <h6>FEATURES CASE</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Working Process</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list pb-5">
                                <span>1</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Select A Project</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>We have the technology and industry expertise to develop solutions that can connect
                                    people and businesses across variety of mobile devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list pb-5">
                                <span>2</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Project Analysis</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>We have the technology and industry expertise to develop solutions that can connect
                                    people and businesses across variety of mobile devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list three pb-5">
                                <span>3</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Deliver Result</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>We have the technology and industry expertise to develop solutions that can connect
                                    people and businesses across variety of mobile devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno How IT Work Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Call Do Action Area ----->
    <!--==================================================-->
    <div class="call_do_action pt-85 pb-130 bg_color parallax"
        style="background-image:url('../assets/frontend/images/call-bg.png'); backgound-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section_title white text_left mb-60 mt-3 wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="phone_number mb-3">
                            <h5>{{ officeSetting()->institute_phone ?? '' }}</h5>
                        </div>
                        <div class="section_main_title">
                            <h1>To make requests for the</h1>
                            <h1>further information</h1>
                        </div>
                        <div class="button three mt-40">
                            <a href="#">Join With Now<i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-video mt-90 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="video-icon">
                            <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                                href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Call Do Action Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Counter Area ----->
    <!--==================================================-->
    <div class="counter_area">
        <div class="container">
            <div class="row cntr_bg_up nagative_margin pt-50 pb-45 wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">15</span><span>K</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Happy Students</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">1280</span><span>+</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Best Teacher</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">10</span><span>K</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Advanced Course</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">992</span><span>+</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Best Service</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Counter Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Testimonial Area ----->
    <!--==================================================-->
    @if (count($testimonials) > 0)
        <div class="testimonial_area pt-80 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text_center mb-60 mt-3 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="section_sub_title uppercase mb-3">
                                <h6>TESTIMONIAL</h6>
                            </div>
                            <div class="section_main_title">
                                <h1>What Says</h1>
                                <h1>Our Happy Students</h1>
                            </div>
                            <div class="em_bar">
                                <div class="em_bar_bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="testimonial_list owl-carousel curosel-style">
                                @foreach ($testimonials as $testimonial)
                                    <div class="col-lg-12">
                                        <div class="single_testimonial mt-3 mb-5 wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="single_testimonial_content">
                                                <div class="single_testimonial_content_text mb-4">
                                                    <p>{{ $testimonial->description ?? '' }}</p>
                                                </div>
                                                <div class="single_testimonial_thumb mt-2 mr-3"
                                                    style="border-radius: 50%;">
                                                    <img src="{{ $testimonial->image }}" alt=""
                                                        style="border-radius: 50%; height:100px; width:100px;" />
                                                </div>

                                                <div class="single_testimonial_content_title mt-4">
                                                    <h4>{{ $testimonial->name }}</h4>
                                                    <span>{{ $testimonial->post }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!--==================================================-->
    <!----- End Techno Testimonial Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start Techno Contact Area ----->
    <!--==================================================-->

    <div class="contact_area pt-85 pb-90"
    style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title white text_center mb-60 mt-3 wow fadeInDown" data-wow-delay="0.4s">
                        <div class="section_sub_title uppercase mb-3">
                        </div>
                        <div class="section_main_title">
                            <h1>Make An</h1>
                            <h1>Contact With Us</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                        <div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="quote_wrapper wow fadeInUp" data-wow-delay="0.4s">
                        <form id="contact_form" action="{{ route('admin.contact.store') }}" method="POST"
                            id="dreamit-form">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                        <span class="text-warning">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="email" name="email" placeholder="Email Address">
                                        <span class="text-warning">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="number" name="phone" placeholder="Phone Number">
                                        <span class="text-warning">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <span class="text-warning">
                                            @error('subject')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message"></textarea>
                                        <span class="text-warning">
                                            @error('message')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="quote_btn text_center">
                                        <button class="btn" type="submit">Free Consultancy</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Contact Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Blog Area ----->
    <!--==================================================-->
    <div class="blog_area pt-85 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-60 mt-3 wow fadeInDown" data-wow-delay="0.3s">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>LATEST ARTICLE</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>See Our Latest</h1>
                            <h1>Blog Posts</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog text-center mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="{{ asset('assets/frontend/images/blog1.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="single_blog_date">
                            <div class="single_blog_date_inner">
                                <h3>25</h3>
                                <span>DEC</span>
                                <span class="years">2023</span>
                            </div>
                        </div>
                        <div class="single_blog_content pt-4 pl-4 pr-4">
                            <div class="techno_blog_meta">
                                <a href="#">Techno </a>
                                <span class="meta-date pl-3">Corporate</span>
                            </div>
                            <div class="blog_page_title pb-1">
                                <h3><a href="blog-details.html">The five devices you need to work anytime</a></h3>
                            </div>
                            <div class="blog_description">
                                <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt
                                    on labore et dolore. </p>
                            </div>
                            <div class="blog_page_button style_two pb-5">
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog text-center mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="{{ asset('assets/frontend/images/blog2.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="single_blog_date color3">
                            <div class="single_blog_date_inner">
                                <h3>28</h3>
                                <span>DEC</span>
                                <span class="years">2023</span>
                            </div>
                        </div>
                        <div class="single_blog_content pt-4 pl-4 pr-4">
                            <div class="techno_blog_meta">
                                <a href="#">Techno </a>
                                <span class="meta-date pl-3">Business</span>
                            </div>
                            <div class="blog_page_title pb-1">
                                <h3><a href="blog-details.html">How to learn PHP 10 tips to get you started</a></h3>
                            </div>
                            <div class="blog_description">
                                <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt
                                    on labore et dolore. </p>
                            </div>
                            <div class="blog_page_button style_two pb-5">
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog text-center mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="{{ asset('assets/frontend/images/blog3.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="single_blog_date color2">
                            <div class="single_blog_date_inner">
                                <h3>22</h3>
                                <span>DEC</span>
                                <span class="years">2023</span>
                            </div>
                        </div>
                        <div class="single_blog_content pt-4 pl-4 pr-4">
                            <div class="techno_blog_meta">
                                <a href="#">Techno </a>
                                <span class="meta-date pl-3">Consulting</span>
                            </div>
                            <div class="blog_page_title pb-1">
                                <h3><a href="blog-details.html">The five devices you need to work anytime</a></h3>
                            </div>
                            <div class="blog_description">
                                <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt
                                    on labore et dolore. </p>
                            </div>
                            <div class="blog_page_button style_two pb-5">
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Blog Area ----->
    <!--==================================================-->

@endsection
