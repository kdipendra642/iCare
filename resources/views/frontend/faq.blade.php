@extends('frontend.layouts.app')
@section('content')

@include('frontend.includes.header')
<div class="breadcrumb-area bg-gradient text-center" >
   
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Frequently Asked Questions</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('customer.index') }}" style="font-weight: 600;"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">FAQ</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--   Breadcrumb Section -->



<section id="faq" class="faq " style="padding-top: 120px; margin-bottom:50px;">
    <div class="container pb-2">

      <div class="section-title">
        <h2>FAQs</h2>
      </div>

      <div class="faq-list">
        <ul>
        @for($i = 1; $i < count($faqs); $i++)
          @foreach($faqs as $faq)
          <li data-aos="fade-up">
             <a data-toggle="collapse" class="collapse" href="#faq-list-{{$i++}}">
               <i class="fa fa-question-circle" style="color:#01b0f8;"></i> 
                {{$faq->title}}
                <i class="fa fa-chevron-down icon-show"></i>
                <i class="fa fa-chevron-up icon-close"></i>
              </a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>{!! $faq->description !!}</p>
              </div>
          </li>
          @endforeach
          @endfor

        </ul>
      </div>

    </div>
  </section>
@endsection