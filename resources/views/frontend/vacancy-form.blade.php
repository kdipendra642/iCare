@extends('frontend.layouts.app')
@section('content')
@include('frontend.includes.header')
<style>
  body{
       background:#FAFBFF;
   }
   #header {
     background: #fff;
    }

    .apply-form{
        padding-top: 5rem;
    }
    .form-body {
    padding: 30px;
    box-shadow: 0 50px 150px 0 rgb(4 73 89 / 5%);
    border-radius: 10px;
    margin-bottom: 30px;
    border: solid 1px #f3f4f7;
    background: white;
}
.form-body p {
    font-weight: 600;
    font-size: 28px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #222;
}

h5 {
    color: #222 !important;
    font-size: 1rem;
    font-weight: 600;
}
    input[type=text], input[type=password], input[type=email], input[type=tel], input[type=number], select, textarea {
    background: 0 0;
    height: auto;
    color: #232226;
    background-color: white;
    border: 1px solid #E2E4E9;
    width: 100%;
    padding: 10px 15px;
    line-height: 1.3;
    font-weight: 400;
    font-size: inherit;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    position: relative;
    -webkit-appearance: none;
    box-shadow: 0 7px 9px rgb(29 14 98 / 5%);
    -webkit-transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
    -o-transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
    transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
    outline: 0;
}
.Applying_for select{
    height: auto;
   background: 0 0 !important;
    color: #232226 !important;
    background-color: white !important;
    border: 1px solid #E2E4E9 !important;
    width: 100% !important;
    padding: 10px 15px !important;
    line-height: 1.3 !important;
    font-weight: 400 !important;
    font-size: inherit !important;
    -webkit-border-radius: 4px !important;
    border-radius: 4px !important;
    position: relative !important;
    -webkit-appearance: none !important;
    box-shadow: 0 7px 9px rgb(29 14 98 / 5%) !important;
    -webkit-transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s !important;
    -o-transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s !important;
    transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.4s !important;
    outline: 0 !important;
    
}
/* 
.form-body p {
    font-weight: 600;
    font-size: 20px;
    text-align: center;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding-top: 20px;
    color: #222;
} */

label {
 color: #77748f;
 display: inline-block;
 margin-bottom: .5rem;
}

#footer svg {
    fill: #212529;
}
input::placeholder,select::placeholder,textarea::placeholder{
    font-weight: 400!important;
}
.uppy-size--xl .uppy-DashboardItem {
    width: calc(17% - 30px) !important;

}

.uppy-size--xl .uppy-DashboardItem-preview {
    height: 100px !important;
}
.bg-image{
/* background: url('../../../static/images/form-pattern.svg'); */
padding-top: 0;
background-color: #FAFBFF;
}
.uppy-DashboardAddFiles-info{
    display: none;
}
.uppy-Dashboard-files{
    justify-content: center;
    display: flex;
}

.custom_modal .mt-100 {
     margin-top: 100px
 }

 .custom_modal .container {
     margin-top: 200px
 }

 .custom_modal .card {
     position: relative;
     display: flex;
     width: 450px;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 4px;
     -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
     -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
     box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
 }

 .custom_modal .card .card-body {
     padding: 1rem 1rem
 }

.custom_modal .card-body {
     flex: 1 1 auto;
     padding: 1.25rem
 }
.custom_modal .cross {
     padding: 10px;
     color: #09a9f3;
     cursor: pointer;
     font-size: 1.5rem;
 }
 .fa-check-circle{
    font-size: 41px;
    color: #09a9f3;
 }

/* select::placeholder{
    font-weight: 400!important;
} */

.uppy-Dashboard-innerWrap{
    background-color: #fff;
    box-shadow: 0 7px 9px rgb(29 14 98 / 5%);
}
button#apply_now:focus {
    outline: none!important;
}

#required_fields_not_filled{
    list-style: none;
    display: contents;
    color: red;
  }
  .loader_img{
    position: fixed;
  z-index: 9999;
  height: 15em;
  width: 10em;
  overflow: show;
  margin: auto;
  top: -60px;
  left: 0;
  bottom: 0;
  right: 0;
  display: none;
  }
  .loader_img:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
 background: -webkit-radial-gradient(rgb(20 20 20 / 25%), rgb(0 0 0 / 23%));
}
.is-sticky {
    z-index: 9999 !important;
   
}
/*
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
    background-color:#82C424;
}*/

.cloud-img{
    position: relative;
}

.cloud-img img:nth-child(1) {
    position: absolute;
    left: 0;
    right: 0px;
    top: 75px;
}
.cloud-img img:nth-child(2) {
    position: absolute;
    right: 0;
    top: 700px;
}
.cloud-img img:nth-child(3) {
    position: absolute;
    right: 0;
    top: 15px;
}
.cloud-img img:nth-child(4) {
    position: absolute;
    left: 15px;
    right: 0px;
    top: 500px;
}

.shape-img img:nth-child(1) {
    position: absolute;
    left: -22%;
    bottom: -130px;
}
.shape-img img:nth-child(2) {
    position: absolute;
    right: -22%;
    bottom: -130px;
}

@media only screen and (max-width: 600px) {
    .apply-form{padding-top: 1rem;}
    .form-body p {font-size: 24px;letter-spacing: 0;}
    label{font-size: 14px;}
    .uppy-Dashboard-inner{min-height: 100px;}
    .cloud-img,.shape-img{display: none;}

}
</style>

@if (count($errors) > 0)
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>	
                </p>
            @endforeach
    </div>
@endif

@if(count($success))
    <div class="alert alert-danger">
        <p class="alert alert-danger">
            {{ $success }}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>	
        </p>
    </div>
@endif
<section class="bg-image">
  <div class="container apply-form">
      <div class="row">
          <div class="col-md-12">
                  <div class="form-body">
                  <p class="text-center">Application Form</p>
                  <!-- <hr> -->
                    <form action="{{ route('customer.career.store') }}" method="post" class="dropzone dz-clickable" id="myAwesomeDropzone" enctype="multipart/form-data">
                      @csrf
                            <div class="row">
                                <div class="col-12"><h5 class="mb-3">Personal Details</h5></div>
                                <div class="col-12 col-md-4">

                                    <div class="form-group mb-3">
                                        <label for="name">
                                            Full Name <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" required="">
                                    </div>

                                </div>

                                <div class="col-12 col-md-4">

                                    <div class="form-group mb-3">
                                        <label for="email">
                                            Email <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="youremail@domain.com" required="">
                                    </div>
                            </div> <!-- / .row -->
                            
                                <div class="col-12 col-md-4">
                                  
                                    <div class="form-group mb-3">
                                        <label for="phone">
                                            Phone <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone Number"required>
                                    </div>

                                </div>
                                
                                <div class="col-12 col-md-4">

                                  <div class="form-group mb-3">
                                      <label for="city">
                                          Address <span class="text-danger">*</span>
                                      </label>
                                      <input type="text" class="form-control" id="address" name="address" placeholder="Enter the City" required="">
                                  </div>
                                
                              </div>
                              
                            </div> <!-- / .row -->


                              
                              
                              <div class="row">
                                <div class="col-12"><h5 class="mt-5 mb-3">Job Description</h5></div>
                                <div class="col-12 col-md-6">
                                  <div class="form-group mb-3">
                                        <label for="experience">
                                            Total Years Of Work Experience <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter Total Years Of Work Experience" required="">
                                    </div>


                                </div>
                                <div class="col-12 col-md-6">

                                    <div class="form-group mb-3 Applying_for">
                                        <label for="position_applied">
                                            Position Applied <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control" id="position_applied" required="" name="job_id">
                                            @foreach($careers as $career)
                                            <option value="{{$career->id}}">{{$career->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                            <div class="row">
                                <div class="col-12 col-md-6">
                                  <div class="form-group mb-3">
                                        <label for="current_salary">
                                          Current Salary <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="current_salary" name="current_salary" placeholder="Current Salary ">
                                    </div>
                                  
                                </div>
                                <div class="col-12 col-md-6">
                                    
                                      <div class="form-group mb-3">
                                        <label for="expected_ctc">
                                            Expected Salary <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="expected_salary" name="expected_salary" placeholder="Expected Salary ">
                                    </div>
                                    

                                </div>
                            </div>  

                          
                            
                            <div class="row">
                              <div class="col-12">
                                    <div class="form-group mb-5">
                                        <label for="linkedin">
                                            Project Source  (Github)
                                        </label>
                                        <input type="url" class="form-control" id="project_reference" name="project_reference" placeholder="Share Link Here..." >
                                    </div>

                                  <div class="form-group mb-5">
                                      <label for="source_reference">
                                          How do you know about us (Referral name, incase applicable)?
                                      </label>
                                      <input id="source_reference" name="source_reference" type="url" class="form-control" placeholder="Let us know!" maxlength="250"/>
                                  </div>
                                  <div class="form-group mb-5">
                                      <label for="applyresume">Upload Resume <span class="text-danger">*</span> </label> 
                                      <input id="resume" name="resume" type="file" class="form-control" placeholder="Resume must be in pdf format."/>
                                    </div>
                              </div>
                                <div class="col-12">
                                    <div class="form-group mb-5">
                                        <label for="reason">
                                            Why are you a great fit/ your story
                                        </label>
                                        <textarea id="reason" name="reason" rows="5" class="form-control" placeholder="Let us know!"></textarea>
                                    </div>
                                </div>
                            </div> 
                            <div class="row align-items-center">
                                <div class="col-12 col-md text-center">

                                    <!-- Submit -->
                                    <button class="hello-btn login-btn  mb-6 mb-md-0 lift" id="apply_now" data-toggle="modal" data-target="#myModal" >Apply Now
                                      </button>
                                </div>
                              
                            </div> 
                        
                        </form>
                </div>
                
          </div>
          
      </div>
  </div>

         </div>
     </div>
 </div>

<div class="modal fade custom_modal" id="myModal_success" role="dialog" style="top: 25%;">
    <div class="modal-dialog">
        <div class="card">
            <div class="text-right cross pb-2"> <i class="la la-times-circle" style="cursor: pointer;"></i> </div>
            <div class="card-body text-center pt-0 pb-4 px-3"> 
                <img class="img-fluid w-25" src="../../../../Assets/static/img/thumbs-up.png" >
                <h4 class="p-2 mt-4 font-weight-bold" style="font-size:1.25rem;">Your application has been submitted successfully</h4>
            </div>
        </div>
    </div>
</div>
<div class="modal fade custom_modal" id="myModal_something_wrong" role="dialog" style="top: 25%;">
    <div class="modal-dialog">
        <div class="card">
            <div class="text-right cross pb-2"> <i class="la la-times-circle" style="cursor: pointer;"></i> </div>
            <div class="card-body text-center pt-0 pb-4 px-3"> 
                <img class="img-fluid w-25" src="../../../../image.flaticon.com/icons/png/512/3176/3176047.png" >
                <h4 class="p-2 px-5 mt-4 font-weight-bold" style="font-size:1.25rem;">Something wrong has happened to our end. In case the problem presist ,either contact our team or drop your resume at people@icare.com</h4>
               
            </div>
        </div>
    </div>
</div>
<div class="modal fade custom_modal" id="myModal_required_fields" role="dialog" style="top: 25%;">
    <div class="modal-dialog">
        <div class="card">
            <div class="text-right cross pb-2"> <i class="la la-times-circle" style="cursor: pointer;"></i> </div>
            <div class="card-body text-center pt-0 pb-4 px-3"> 
                <img class="img-fluid w-25" src="../../../../image.flaticon.com/icons/png/512/179/179386.png" >
                <h4 class="p-2 mt-4 font-weight-bold" style="font-size:1.25rem;">Please fill the required fields</h4>
                <span style="font-weight: 700;">You have not filled :-</span>  <ul id="required_fields_not_filled">
                  
                </ul>
            </div>
        </div>
    </div>
</div>
</section>
@endsection