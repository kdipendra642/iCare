@extends('frontend.layouts.app')
@section('content')

@include('frontend.includes.header')
<section style="position: relative;z-index: 1;">
    <div class="container pt-4 pb-4" >
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title" style="padding-bottom: 10px;padding-top: 10px;">
                    <h2>Terms and Conditions</h2>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="term-of-use pt-4 pb-4" style="margin-top: -100px; ">
    <div class="container pb-2">
        <div class="row">
            <div class="col-lg-12 pl-0">
                <ul id="points">

                    <div class="jumbotron shadow"
                        style="line-height: 2; padding-left: 3rem;border-left: 5px solid #05caec;background-color: #f8f9fa;">

                        <div class="entry-content">
                            {!! $setting->terms_and_condition !!}
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection