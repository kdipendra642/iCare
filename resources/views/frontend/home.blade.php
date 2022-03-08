@extends('frontend.layouts.app')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-size: cover;">
    <img src="{{ asset('frontend/background-img.png') }}" alt="{{ $setting->site_title}}" style="width: 100%; height: 100%;">


    <div class="hero-container" data-aos="zoom-in">
      <h1> Grow Your Business!!!</h1>
      <!-- <h2>Instantly match with verified, expert IT agencies</h2> -->
      <h2>Find the best service provider for -
        <span class="txt-rotate" style="color:#F9F20E;font-size: 36px; font-weight: bold;" data-period="2000"
          data-rotate='[ 
              "Web Design",
              "Website Developement", 
              "Application Development", 
              "Digital Marketing", "SEO" ]'></span>
      </h2>
      <!-- <a href="{{ route('customer.career')}}" class="btn-get-started scrollto rounded">Join Us</a> -->
      <a href="#" id="" data-toggle="modal" data-target="#contactForm" class="btn-get-started scrollto rounded">Get Quote</a>

    </div>
  </section>
          <!-- modal -->
          @include('frontend.includes.modal')
  <!-- End Hero -->
  @include('frontend.includes.header')

  <!-- ======= Header ======= -->
  <!-- End Header -->
  <!-- Services we offer -->
  <section  style="margin-top: 100px;">
    <div class="section-title aos-init aos-animate" data-aos="fade-up">
      <h2 style="text-transform: capitalize;">Our <span style="color:#01b0f8;">Services</span></h2>
    </div>

    <div class="container">
      <div class="row">
        <div class="owl-carousel owl-theme w-500">
          @foreach($service as $services)
        <div class="item" data-aos="fade-up" data-aos-duration="2000">
            <div class="services-card">
              <div class="services-card-icon">
                <img alt="{{$services->title}}" src="{{ asset('image/services/'.$services->image)}}"
                  class="img-fluid">
              </div>
              <!-- <i class="fas fa-map-marker-alt contact-icon"></i> -->
              <div class="services-card-text">
                <h5 class="py-2 font-weight-bold">{{$services->title}}</h5>
                <p>
                 {!! str_limit($services->description, 100) !!}
                </p>
              </div>
            </div>
        </div>
        @endforeach
        </div>
      </div>
      <div class="container" style="margin-top: 50px; margin-bottom:25px;">
        <div class="text-center">
          <a class="hello-btn hello-cta shadow" href="{{ route('customer.services') }}">More Services</a>
        </div>
      </div>
    </div>
</section>


    <!--  Why Choose iCares -->
    <section id="about" class="about" style="margin-top:100px;"> 
      <div class="container pt-5 pb-4">
        <div class="section-title aos-init aos-animate" data-aos="fade-up">
          <h2 style="text-transform: capitalize;">Why Choose <span style="color:#01b0f8;">iCare</span>?</h2>
          <h6>We are consistently improving ourselves to provide the best
            possible solution.
          </h6>
        </div>

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img" data-aos="fade-right">
            <div class="video-box">
              <img src="{{ asset('frontend/Assets/static/img/okk.svg')}}" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                style="    border-radius: 10px;width:400px;">

              <a href="#" class="video-btn venobox btn-watch-video vbox-item play-btn"
                data-vbtype="video" data-autoplay="true">
                <i class="fas fa-play"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0 text-justify" data-aos="fade-left">
            <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate font-weight-bold"
              style="color: #01b0f8;">iCare Saves :</p>
            <div class="row counters mb-2">
              <div class="col-lg-4 col-6 text-center font-weight-bold">
                <div class="counter-wrap d-flex justify-content-center">
                  <div class="counter-logo">
                    <img src="{{ asset('frontend/Assets/static/img/whyiCare/save-time.png')}}">
                  </div>
                  <div class="counter-content">
                    <span data-toggle="counter-up">50</span>%
                    <p>Time</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-6 text-center font-weight-bold">
                <div class="counter-wrap d-flex justify-content-center">
                  <div class="counter-logo">
                    <img src="{{ asset('frontend/Assets/static/img/whyiCare/save-money.png')}}">
                  </div>
                  <div class="counter-content">
                    <span data-toggle="counter-up">40</span>%
                    <p>Money</p>
                  </div>
                </div>
              </div>


            </div>

            <div class="row">
              <div class="col-md-12 aos-init aos-animate content" data-aos="fade-up" data-aos-delay="200">
                <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate font-weight-bold"
                  style="color: #01b0f8;">iCare focuses on :</p>
                <ul>
                  <li><i class="fa fa-check-double"></i> <b>Customized Solutions</b> -All clients’ needs are not the
                    same, so we customize our solutions to suit the tailor-
                    made needs of our clients. We design and develop solution based on your need.
                  <li><i class="fa fa-check-double"></i> <b>Experience Team</b> -We have delivered software application
                    and large level of MIS to Government
                    Organization. We have experience on design and development of mission critical
                    projects. </li>
                  <li><i class="fa fa-check-double"></i> <b>Timely Result</b> -We have a culture to value time as a
                    highest previous thing.</li>

                </ul>
              </div>
              <div class="col-md-12 text-center " style="margin-bottom:25px; top: 20px;">
                <a href="#" data-toggle="modal" data-target="#contactForm" class="mt-4  hello-btn hello-cta shadow"
                  style="margin: 0 auto; font-weight: 500;"><i class="las la-phone-volume mr-2"></i> Book A Free
                  Consultation</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!--  What We Do Best -->
    <section class="we-do-best why-iCare" style="color: #dee2e6;position: relative; margin-top: 100px;" >
      <span class="element_one"><img src="{{ asset('frontend/Assets/static/img/cub_four.png')}}" alt=""></span>
      <span class="element_two"><img src="{{ asset('frontend/Assets/static/img/cub_four.png')}}" alt=""></span>
      <span class="element_three"><img src="{{ asset('frontend/Assets/static/img/cub_three.png')}}" alt=""></span>
      <span class="element_four"><img src="{{ asset('frontend/Assets/static/img/cub_three.png')}}" alt=""></span>
      <div class="container pt-3" style="margin-bottom:90px;">

        <div class="section-title aos-init aos-animate" data-aos="fade-up" style="margin-top: 25px;">
          <h2 style="text-transform: capitalize; color: #ffffff;">What <span style="color:#01b0f8;"> We Used</span>?
          </h2>
          <h6>Here are some of the tools and technology that we have worked with:</h6>
        </div>

        <div class="row justify-content-between ">
            @foreach($technologies as $technology)
          <div class="col-lg-4 service-domain">
            <div class="domain-card">
              <span class="shape"></span>
              <div class="image-container">
                <img src="{{ asset('image/technology/'.$technology->image)}}" alt="{{$technology->title}}"/>
              </div>
              <div class="domain-card-name ">
                <h1 class="align-middle">{{$technology->title}}</h1>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!--  process -->
    <section class="pb-0" style="margin-top: 100px; margin-bottom:50px;position: relative; z-index: 1;">
      <div class="shape-left-top shape opacity-default">
        <img src="{{ asset('frontend/Assets/static/img/left-curve.png')}}" alt="Shape">
      </div>
      <div class="container">
        <div class="section-title aos-init aos-animate" data-aos="fade-up">
          <h2 style="text-transform: capitalize; ">Journey With<span style="color:#01b0f8;"> Information Care</span>
          </h2>
          <h6>Whether you need website or mobile application solution, our team is always ready
            to serve you.</h6>
        </div>

        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12" data-aos="zoom-in">
            <div class="step-img text-center">
              <img src="{{ asset('frontend/Assets/static/img/helloooo.png')}}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 process-sequence">
            <div class="timeline" data-step="1">
              <h4 data-aos="fade-left">Application Development</h4>
              <p data-aos="fade-left">
                Whether you need to design, development and update of larger level of web
                application, MIS or Support on software application, our team is always ready to
                serve you.
              </p>
            </div>
            <div class="timeline" data-step="2">
              <h4 data-aos="fade-right" data-aos-delay="300">IT Consulting</h4>
              <p data-aos="fade-right" data-aos-delay="400">
                Whether you need to design and develop IT Policy, Governance Policy and
                requirement analysis, our team is always ready to serve you.
              </p>
            </div>
            <div class="timeline timeline-3" data-step="3">
              <h4 data-aos="fade-left" data-aos-delay="600">UI/UX Design and Development</h4>
              <p data-aos="fade-left" data-aos-delay="600">
                Design is an art and can do wonders. Design will speak about you and your vision.
                However, the design should be visually appeal and easy to understand and user
                friendly.
              </p>
            </div>
            <div class="timeline" data-step="4">
              <h4 data-aos="fade-right" data-aos-delay="900">API Development</h4>
              <p data-aos="fade-right" data-aos-delay="900">
                An application programming interface is a connection between computers or between
                computer programs. It is a type of software interface, offering a service to other pieces
                of software.
              </p>
            </div>
            <div class="timeline" data-step="5">
              <h4 data-aos="fade-right" data-aos-delay="1200"> Project Starts!</h4>
              <p data-aos="fade-right" data-aos-delay="1200">
                Project starts and is completed as per the Business Contract.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Our Clients -->
    <section style="margin-top:100px;">
      <div class="container pt-4 pb-2">
        <div class="section-title pb-0 aos-init aos-animate" data-aos="fade-up">
          <h2 style="text-transform: capitalize;">Our <span style="color:#08f7f7;"> Top Clients</span></h2>
          <h6>We work with companies of all sizes and budgets. Here are what some of them have to say:</h6>
        </div>
      </div>
      <div id="clients" class="clients my-4">
        <div class="container">

          <div class="row">
            @foreach($client as $clients)
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
                data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                <a href="{{ $clients->url}}" target="_blank">
                  <img src="{{ asset('image/client/'.$clients->image)}}" class="img-fluid" alt="{{$clients->title}}">
                </a>
                </div>
            @endforeach
          </div>

        </div>
      </div>
    </section>
    <!-- Testimonials -->
    <section style="margin-top:100px">
    <div class="container pt-4 pb-2">
        <div class="section-title pb-0 aos-init aos-animate" data-aos="fade-up">
          <h2 style="text-transform: capitalize;">Our <span style="color:#08f7f7;"> Testimony</span></h2>
          <h6>We work with companies of all sizes and budgets. Here are what some of them have to say:</h6>
        </div>
      </div>
        <div class="gtco-testimonials" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <div class="owl-carousel owl-carousel1 owl-theme">
            @foreach($testimonial as $testimony)
            <div>
                <div class="card text-center">
                <img class="card-img-top" src="{{ asset('image/testimonials/'.$testimony->image)}}" alt="{{$testimony->name}}">
                <div class="card-body">
                    <h5 class="hello-text-color">{{$testimony->name}}<br />
                    <span>{{$testimony->designation}}</span>
                    </h5>
                    <p class="card-text">
                        {!!  str_limit($testimony->description, 150) !!}     
                    </p>
                </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>
    <!--   Get Consultatnt -->
    <section class="consultation_section ">
      <div class="container consultation_container container-md ">
        <div class="row pb-5 py-2" style="margin-bottom:50px;">
          <div class="col-lg-12 col-md-12">
            <div class="card consultation_card text-center">
              <div class="img_section">
                <img src="{{ asset('frontend/Assets/static/img/consultant-bg-img.png')}}" />
              </div>
              <h3 class="consulation_text">The Best Platform For Your Digital Needs!</h3>
              <p style="line-height: 31px; text-align: center;" class="col-md-9"><span class="consulation_para ">
                  Book your free consultation right now and get the best advice in a matter of just 20 minutes!
                </span></p>
              <a href="#" id="lp-pom-button-336" data-toggle="modal" data-target="#contactForm" class="mt-4">Get Quote</a>
            </div>
          </div>

        </div>
      </div>
      <!-- Modal -->
     @include('frontend.includes.modal')
      </div>
    </section>

    
@endsection