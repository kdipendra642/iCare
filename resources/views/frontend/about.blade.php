@extends('frontend.layouts.app')
@section('content')

@include('frontend.includes.header')
<div class="breadcrumb-area bg-gradient text-center">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>About Us</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('customer.index') }}"><i class="fas fa-home "></i> Home</a></li>
                    <li class="active">{{$setting->about_sub_title}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--   Breadcrumb Section -->

<section id="about" class="about mt-5 mb-5" style="position: relative;overflow: hidden;">
    <div class="container">
  
      <div class="section-title">
        <h2>{{$setting->site_name}}</h2>
      </div>
  
      <div class="row content">
        <div class="col-lg-6" style="left:100px;">
         
          <div>
            <h1><strong>
                {{$setting->about_title}}
            </strong></h1><br>
              <p>
              <div class="dots-feat" style="left:100px;">
                <img src="{{ asset('frontend/Assets/static/img/dots-2.png')}}" alt="dots">
              </div>
                {!! $setting->about_description !!}
              </p>
              
          </div>
          
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <div class="video-box">
              <img src="{{ asset('image/sitesettings/'.$setting->about_image) }}" class="img-fluid aos-init aos-animate" alt="{{$setting->about_title}}" data-aos="zoom-in" style="border-radius: 10px; width: 400px; height: 350px; margin-left: 100px; margin-top: 20px;">
         
             
          </div>
      </div>  
      </div>
    </div>
    <div class="cercil"></div>
  </section>
@endsection