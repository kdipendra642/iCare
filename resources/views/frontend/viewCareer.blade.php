@extends('frontend.layouts.app')
@section('content')

@include('frontend.includes.header')
<style>
    .img-block{
      padding: 0px;
      box-shadow: 52px 52px 74px 0 rgb(115 131 169 / 8%);
      margin-bottom: 30px;
      
      }
      .img-block img{
        border-radius: 16px 16px 16px 16px;
      }
    .block {
    padding: 30px;
    box-shadow: 52px 52px 74px 0 rgb(115 131 169 / 8%);
    border-radius: 10px;
    margin-bottom: 30px;
    border: solid 1px #f3f4f7;
    background: white;
}
.apply-card-btn:hover{
  background-color: #0caeee;
  color: #fff!important;
  transition: .5s ease-in-out
}

@media only screen and (max-width: 600px) {
.login-btn {
    margin: 0 auto;
    display: block;
    width: 42%;
    margin-bottom: 10px;
}
}
  </style>
  
<!--   Breadcrumb Section -->
<div class="breadcrumb-area bg-gradient text-center" >
    <!-- Fixed BG -->
    <div class="fixed-bg" style="background-color: #09a9f3;background-position:left center;"></div>
    <!-- Fixed BG -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>{{$careers->title}}</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('customer.index') }}"><i class="fas fa-home"></i> </a></li>
                    <li><a href="{{ route('customer.career') }}"> Careers</a></li>
                    <li class="active"> Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--   Breadcrumb Section -->


<section class="" style="padding-top: 120px; margin-bottom: 50px;">
    <div class="container">

      <div class="row flex-column-reverse flex-md-row">
        <div class="col-12 col-md-8 career_wrap">

            <!-- Heading -->
            <h3>
              Job Description
            </h3>
            <p>{!! $careers->description !!}     </p>
        </div>
        <div class="col-12 col-md-4">
          <div class="img-block has_style1">
            <img class="img-fluid" src="{{ asset('frontend/Assets/static/images/job_description.jpg')}}">
         </div>
            <div class=" block has_style1">

                <!-- Heading -->
                <h4 class="title font-weight-bold">
                  Job Summary
                </h4>
                <hr/>
                
                <div class="row">
                  <div class="col-2 text-right">
                    <i class="fa fa-briefcase" aria-hidden="true" style="color: #09a9f3;"></i>
                  </div>
                  <div class="col-10">
                    <p class="font-weight-bold">Department <br>
                      <span class="font-weight-normal"> {{$careers->department}} </span>
                    </p>
                  </div>

                  <div class="col-2 text-right">
                    <i class="fas fa-building" aria-hidden="true" style="color: #09a9f3;"></i>
                  </div>
                  <div class="col-10">
                    <p class="font-weight-bold"> Level <br>
                      <span class="font-weight-normal">{{$careers->department}}</span>
                    </p>
                  </div>
                  <div class="col-2 text-right">
                    <i class="fa fa-wallet" aria-hidden="true" style="color:#09a9f3;"></i>
                  </div>
                  <div class="col-10">
                    <p class="font-weight-bold">Salary <br>
                      <span class="font-weight-normal">{{$careers->salary}}</span>
                    </p>
                  </div>
                 

                  <div class="col-2 text-right">
                    <i class="fas fa-award" aria-hidden="true" style="color: #09a9f3;"></i>
                  </div>
                  <div class="col-10">
                    <p class="font-weight-bold pb-2">Experience <br>
                      <span class="font-weight-normal">{{$careers->experience}} </span>
                    </p>
                  </div>
                   

                  <div class="col-12 text-center">
                    <a href="{{ route('customer.career.apply', $careers->id) }}" class="hello-btn post-project-btn btn-block apply-card-btn" target="_self">Apply now</a>
                  </div>
                  
                </div>
                

                

            </div>

           

        </div>

    </div>

  

    </div>
  </section>
@endsection