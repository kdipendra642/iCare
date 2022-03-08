@extends('frontend.layouts.app')
@section('content')

@include('frontend.includes.header')
<!--Icare Journey -->
<div class="breadcrumb-area bg-gradient text-center" >
    
  
  <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2">
              <h1>Careers</h1>
              <ul class="breadcrumb">
                  <li><a href="{{route('customer.index')}}"><i class="fas fa-home"></i> Home</a></li>
                  <li class="active">Careers</li>
              </ul>
          </div>
      </div>
  </div>
</div>
<style>
  .card-badges{
    text-align: left;
}
.badge-soft-success {
    padding:.5rem;
    color: #1ab9c4;
    background: rgba(20, 148, 207, 0.1);
    font-weight: 500;
    margin-bottom: .5rem;
}
.details-btn {
    padding: 10px 20px !important;
    background: #f1f2f6;
    color: #57606f !important;
    border-radius: 5px;
    border: 2px solid #fff;
    transition: 0.5s ease;
    font-weight: 600;
    font-size: 14px;
}
  .details-btn {
    padding: 10px 20px !important;
    background: #f1f2f6;
    color: #57606f !important;
    border-radius: 5px;
    border: 2px solid #fff;
    transition: 0.5s ease;
    font-weight: 600;
    font-size: 14px;
}
.apply-btn {
    padding: 10px 20px !important;
    background: #0ea9e6;
    color: #fff !important;
    border-radius: 5px;
    border: 2px solid #fff;
    transition: 0.5s ease;
    font-weight: 600;
    font-size: 14px;
}
.card:hover{
  transform: translateY(-7px);
 
}
.card-title{
    text-align: left;
    font-size: 1.04rem;
    font-weight: 700;
    color: #4b4b5a;
}
.card-img-top{
  border-radius: 16px 16px 16px 16px;
}

.grid-item .card{
  box-shadow: 0px 0px 60px -12px rgb(0 0 0 / 9%);
    border: 0;
}
.job-card-text p{
  font-size: 14px;
}
</style>




<section id="open-position" style="background:#f7fafd;">
  <div class="container pt-5">
      <div class="row no-gutters">
          <div class="col-12 text-center w-100" style="margin-top:50px; margin-bottom:50px;">
              <div class="form-row gallery text-center"> <!-- grid - class -->
                  <div class="col-lg-4 col-sm-6 mb-4 grid-item tech">
                    @if (count($careers) == 0)
                      <div>
                        <h6>Currenly there are no vacancies.</h6>
                      </div>
                    @endif

                      @foreach($careers as $career)
                      <div class="card p-4 mb-4 mb-xl-0 shadow" style="width:350px; height:300px;">
                        <div class="card-body px-1 job-card-text">
                        <h5 class="card-title font-size-16">{{$career->title}}</h5>
                          <p class="card-text text-muted truncate" style="font-size: 14px; text-align: left;">
                          {!! str_limit($career->description, 100) !!}
                          </p>
                          <div class="card-badges">
                              <span class="badge badge-soft-success"> {{$career->salary}} </span>
                              <span class="badge badge-soft-success"> {{$career->experience}} </span>
                              <span class="badge badge-soft-success">{{$career->level}}</span>
                              <!-- <span class="badge badge-soft-success"> Gurugram </span> -->
                          </div>
                          <div class="career-links">
                            <a href="{{ route('customer.career.view-vacancy', $career->slug) }}" class="details-btn float-left"> See Details</a>
                            <!-- <a href="#" class="apply-btn  float-right">Apply Now</a> -->
                          </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  
             </div>
          </div>
      </div>
  </div>
</section>
@endsection