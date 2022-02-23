@extends('frontend.layouts.app')
@section('content')

@include('frontend.includes.header')

<div class="breadcrumb-area bg-gradient text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <h1>Services</h1>
          <ul class="breadcrumb">
            <li><a href="{{ route('customer.index')}}"><i class="fas fa-home"></i> Home</a></li>
            <li class="active">Services</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!--   Breadcrumb Section -->

  <!-- Services we offer -->
  <section class="" style="padding: 120px 0;">
    <div class="section-title aos-init aos-animate" data-aos="fade-up">
      <h2 style="text-transform: capitalize;">Our <span style="color:#01b0f8;">Services</span></h2>
    </div>

    <div class="container">
      <div class="row">
        @foreach($service as $services)
        <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000">
          <div class="services-card">
            <div class="services-card-icon">
              <a href="#"><img alt="{{$services->title}}"
                  src="{{ asset('image/services/'.$services->image)}}" class="img-fluid mb-3"></a>
            </div>
            <!-- <i class="fas fa-map-marker-alt contact-icon"></i> -->
            <div class="services-card-text">
              <h5 class="py-2 font-weight-bold">{{$services->title}}</h5>
              <p>
               {!! str_limit($services->description, 150) !!}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection