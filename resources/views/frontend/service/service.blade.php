@extends('frontend.layouts.master')
@section('container') 

<div class="contact_area pt-85 pb-90"
style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcome_title">
                    <div class="breatcome_title_inner pb-2">
                        <h2>Services</h2>
                    </div>
                    <div class="breatcome_content">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></i> <i class="fa fa-angle-right"></i> <span>Service</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ============================================================== -->
<!-- End Techno Breatcome Area -->
<!-- ============================================================== -->

<div class="service_area bg_color2 pt-85 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text_center mb-55">
                    <div class="section_sub_title uppercase mb-3">
                        <h6>SERVICES</h6>
                    </div>
                    <div class="section_main_title">
                        <h1>Service We Provide</h1>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                    <div class="section_content_text pt-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim advis minim veniam, quis nostrud exercitat</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service_style_one text_center pt-40 pb-40 pl-3 pr-3 mb-4">
                    <div class="service_style_one_icon mb-30">
                       <img src="{{$service->image ??''}}" alt="" style="height: 80px; width:80px;border-radius: 50%; object-fit: cover;">
                    </div>
                    <div class="service_style_one_title mb-30">
                        <h4>{{$service->title ??''}}</h4>
                    </div>
                    <div class="service_style_one_text">
                        <p>{!! Illuminate\Support\Str::limit($service->description ?? '', 100, '') !!}</p>
                    </div>
                    <div class="service_style_one_button pt-3">
                        <a href="{{route('serviceDetail',$service->slug)}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!--==================================================-->
<!----- Start Techno Counter Area ----->
<!--==================================================-->
<div class="counter_area white bg_fixed pt-80 pb-70" style="background-image:url('../assets/frontend/images/cn-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single_counter text_center mb-4">
                    <div class="countr_text">
                        <h1><span class="counter">15</span><span>K</span> </h1>
                    </div>
                    <div class="counter_desc">
                        <h5>Happy Clients</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single_counter text_center mb-4">
                    <div class="countr_text">
                        <h1><span class="counter">1280</span><span>+</span> </h1>
                    </div>
                    <div class="counter_desc">
                        <h5>Account Number</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single_counter text_center mb-4">
                    <div class="countr_text">
                        <h1><span class="counter">10</span><span>K</span> </h1>
                    </div>
                    <div class="counter_desc">
                        <h5>Finished Projects</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single_counter text_center mb-4">
                    <div class="countr_text">
                        <h1><span class="counter">992</span><span>+</span> </h1>
                    </div>
                    <div class="counter_desc">
                        <h5>Win Awards</h5>
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
<div id="testimonial-section" class="testimonial-bg bg_color2 pt-80 pb-70">
    <div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">
        <section id="section-quote">
            <div class="col-lg-12">
                <div class="section_title text_center mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6>TESTIMONIAL</h6>
                    </div>
                    <div class="section_main_title">
                        <h1>Our Happy <span>Students Says</span></h1>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
            <!--Left Bubble Images-->
            <div class="container-pe-quote left">
                <div class="pp-quote li-quote-1" data-textquote="quote-text-1">
                    <div class="img animated bounce"></div>
                </div>
                <div class="pp-quote li-quote-2" data-textquote="quote-text-2">
                    <div class="img animated bounce"></div>
                </div>
                <div class="pp-quote li-quote-3" data-textquote="quote-text-3">
                    <div class="img animated bounce"></div>
                </div>
                <div class="pp-quote li-quote-4 active" data-textquote="quote-text-4">
                    <div class="img animated bounce"></div>
                </div>
                <div class="pp-quote li-quote-5" data-textquote="quote-text-5">
                    <div class="img animated bounce"></div>
                </div>
                <div class="pp-quote li-quote-6" data-textquote="quote-text-6">
                    <div class="img animated bounce"></div>
                </div>
            </div>
            <!--Left Bubble Images-->
            <!--Center Testimonials-->
            <div class="container-quote carousel-on">
                <!--Testimonial 1-->
                <div class="quote quote-text-3 hide-bottom" data-ppquote="li-quote-3">
                    <p>'Managing everyday banking has finally become fun, fast and easy. Icing on the cake, customer support is super reactive: 5 stars!'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Tom Abel De</div>
                        <div class="job">Digital Marketing</div>
                    </div>
                </div>
                <!--Testimonial 2-->
                <div class="quote quote-text-4 show" data-ppquote="li-quote-4">
                    <p>'Qonto met my needs straight away. ng has finally become fun, fast andCustomer care is awesome! Period.'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Sanuka Santa</div>
                        <div class="job">To To Company</div>
                    </div>
                </div>
                <!--Testimonial 3-->
                <div class="quote hide-bottom quote-text-5" data-ppquote="li-quote-5">
                    <p>'With Qonto, I've been able to order MasterCard cards in seconds. My purchasing team can now be autonomous with their payments. Qonto is game changer.'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Grégoire Pasquet</div>
                        <div class="job">Solf Solution</div>
                    </div>
                </div>
                <!--Testimonial 4-->
                <div class="quote hide-bottom quote-text-6" data-ppquote="li-quote-6">
                    <p>'Qonto? Easy, fast, efficient. Traditionalng has finally become fun, fast and banks' hassles belong to the past!'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Nicolas Puran</div>
                        <div class="job">CEO Founder</div>
                    </div>
                </div>
                <!--Testimonial 5-->
                <div class="quote hide-bottom quote-text-7" data-ppquote="li-quote-7">
                    <p>'Qonto? A flawless UX and a customer service ng has finally become fun, fast and that cares so much. This is just incredible!'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Mathieu Jouhet</div>
                        <div class="job">Freelance @Hello Mat</div>
                    </div>
                </div>
                <!--Testimonial 6-->
                <div class="quote hide-bottom quote-text-8" data-ppquote="li-quote-8">
                    <p>'I needed a bank similar to a SaaS for LiveMentor: ng has finally become fun, fast and I think I found it.'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Charles Jadran</div>
                        <div class="job">Web Development</div>
                    </div>
                </div>
                <!--Testimonial 7-->
                <div class="quote hide-bottom quote-text-9" data-ppquote="li-quote-9">
                    <p>'I can say 'Goodbye' to the banking pains I had to ng has finally become fun, fast and bear with, and 'hello' to a way to do finance that makes sense.'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Digong Frando</div>
                        <div class="job">CEO Officience</div>
                    </div>
                </div>
                <!--Testimonial 8-->
                <div class="quote hide-bottom quote-text-10" data-ppquote="li-quote-10">
                    <p>'Qonto is 100% in tune with what we do at Alan.eu: a user-friendly service, a user-centric interface and a very reactive customer support.'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Charles Samuelian</div>
                        <div class="job">Director & Photo Man</div>
                    </div>
                </div>
                <!--Testimonial 9-->
                <div class="quote hide-bottom quote-text-11" data-ppquote="li-quote-11">
                    <p>'I have been looking for a modern and efficient banking alternative that could support the development of my business. I'm just wondering why Qonto did not exist before!'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Khatry Firmanio</div>
                        <div class="job">CEO Company</div>
                    </div>
                </div>
                <!--Testimonial 10-->
                <div class="quote hide-bottom quote-text-13" data-ppquote="li-quote-13">
                    <p>'That's just perfect - It rocks baby! ng has finally become fun, fast and You wanna apply at TheFamily? Use Qonto first.'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Jadran Parvej Imon</div>
                        <div class="job">CEO Managar</div>
                    </div>
                </div>
                <!--Testimonial 11-->
                <div class="quote quote-text-1 hide-bottom" data-ppquote="li-quote-1">
                    <p>'I wish I could have had Qonto ng has finally become fun, fast andenrolled in the Techstars Paris's first batch!'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Bertier Luyt</div>
                        <div class="job">Managing Director</div>
                    </div>
                </div>
                <!--Testimonial 12-->
                <div class="quote quote-text-2 hide-bottom" data-ppquote="li-quote-2">
                    <p>'Thanks to a slick interface and simple ng has finally become fun, fast and features, managing payments and expenses has become a piece of cake!'</p>
                    <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Darpon Abir Khan</div>
                        <div class="job">Founder Officience</div>
                    </div>
                </div>
            </div>
            <!--Right Bubble Images-->
            <div class="container-pe-quote right">
                <div class="pp-quote li-quote-7" data-textquote="quote-text-7">
                    <div class="img animated bounce"></div>
                </div>
                <div class="pp-quote li-quote-8" data-textquote="quote-text-8">
                    <div class="img animated bounce"></div>
                </div>
                <div class="pp-quote li-quote-9" data-textquote="quote-text-9">
                    <div class="img animated bounce"></div>
                </div>
                <div class="pp-quote li-quote-10" data-textquote="quote-text-10">
                    <div class="img animated bounce"></div>
                </div>
                <div class="pp-quote li-quote-11" data-textquote="quote-text-11">
                    <div class="img animated bounce"></div>
                </div>
                <div class="pp-quote li-quote-13" data-textquote="quote-text-13">
                    <div class="img animated bounce"></div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--==================================================-->
<!----- End Techno Testimonial Area ----->
<!--==================================================-->


@endsection