@extends('frontend.layouts.master')
@section('container')
    <div class="contact_area pt-85 pb-90"
        style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>Service Detail</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a> <i class="fa fa-angle-right"></i> <span>Service
                                        Detail</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

        <div class="blog_area pt-85 pb-70">
            <div class="container">
                <div class="row">
                    <!-- Start Section Tile -->
                    <div class="col-lg-12">
                        <div class="section_title text_center mb-50 mt-3">
                            <div class="section_main_title">
                                <h1>Service <span>Detail</span></h1>
                            </div>
                            <div class="em_bar">
                                <div class="em_bar_bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_blog mb-30 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="single_blog_thumb pb-4">
                                <a href="blog-details.html"><img src="{{ $service->image }}"
                                        style="height: 350px; width: 500px;" alt="" /></a>
                            </div>
                            <div class="single_blog_content pl-4 pr-4">
                                <div class="techno_blog_meta">
                                    <h5 href="#">{{ $service->title }} </h5>

                                </div>
                                <div class="blog_page_title pb-35">
                                    <p>{!! Illuminate\Support\Str::limit($service->description ?? '', 10000, '') !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
