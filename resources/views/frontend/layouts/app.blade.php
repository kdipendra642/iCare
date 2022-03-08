<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$setting->site_name}}</title>
  <!-- FAVICON FILES -->
  <link href="{{ asset('image/sitesettings/'.$setting->logo)}}" rel="icon">
  <!-- og meta tag -->

  <!-- Google Fonts -->
  <!--  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/Assets/static/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/Assets/static/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/Assets/static/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/Assets/static/css/main/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend/AAjax/ajax/libs/font-awesome/5.11.2/css/all.min.css')}}" />
  <link rel="stylesheet"
    href="{{ asset('frontend/maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css')}}">
  <style>
    .section-title h2,
    h6 {
      margin-bottom: 20px;
    }

    .client-problem .cp-img {
      padding-bottom: 0.25rem;
    }

    .client-problem .cp-des {
      padding: 1rem;
      text-align: center;
      /* background: #F7F9FD;
      color: #636D8C; */
      border-radius: 15px;
      margin-bottom: 20px;
      box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
      background: #fff;
      color: #000;
      border: 1px solid #01b0f8;
    }

    .client-problem .cp-des p {
      margin: 0.5rem 0;
      font-weight: 600;
    }


    .service-domain {
      margin-top: 1rem;
      margin-bottom: 1rem;
    }


    .domain-card {
      display: flex;
      flex-direction: row;
      background: #ffffff;
      border-radius: 16px;
      padding: 0px 56px;
      position: relative;
      overflow: hidden;
    }

    .domain-card .shape {
      width: 100px;
      height: 60px;
      background: #a2c7d6;
      opacity: 0.2;
      position: absolute;
      top: 0;
      right: -60px;
      transform: rotate(20deg);
      z-index: 10;
      border-radius: 20px;
    }

    .image-container {
      width: 100px;
      text-align: center;
    }

    .image-container img {
      width: 55px;
      border-radius: 16px;
      padding-top: 14px;
    }

    .domain-card-name {
      width: 240px;
      margin-left: 32px;

    }

    .domain-card-name h1 {
      font-size: 1rem;
      font-weight: bold;
      padding-top: 30px;
      padding-bottom: 26px;
      color: #263238;
    }

    .domain-card-name h3 {
      font-size: 18px;
      font-weight: lighter;
      color: #263238;
    }

    /* ---Animation--- */
    @-webkit-keyframes elm_o {
      0% {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
      }

      100% {
        -webkit-transform: translateX(15px);
        transform: translateX(15px);
      }
    }

    @keyframes elm_o {
      0% {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
      }

      100% {
        -webkit-transform: translateX(15px);
        transform: translateX(15px);
      }
    }


    .element_one {
      position: absolute;
      top: 0px;
      left: 10px;
      -webkit-animation: elm_o 1s infinite ease-in-out;
      animation: elm_o 1s infinite ease-in-out;
      animation-direction: alternate-reverse;
      /* z-index: 1; */
    }

    .element_two {
      position: absolute;
      bottom: 0px;
      right: 25px;
      -webkit-animation: elm_o 1s infinite ease-in-out;
      animation: elm_o 1s infinite ease-in-out;
      animation-direction: alternate-reverse;
      /* z-index: 1; */
    }

    .element_two img {
      -webkit-transform: scale(1, -1);
      transform: scale(1, -1);
    }

    .element_three {
      position: absolute;
      bottom: 150px;
      left: -15px;
      -webkit-animation: elm_o 1s infinite ease-in-out;
      animation: elm_o 1s infinite ease-in-out;
      animation-direction: alternate-reverse;
    }

    .element_four {
      position: absolute;
      bottom: 150px;
      right: 0px;
      -webkit-animation: elm_o 1s infinite ease-in-out;
      animation: elm_o 1s infinite ease-in-out;
      animation-direction: alternate-reverse;
    }

    .element_four img {
      -webkit-transform: scale(-1, 1);
      transform: scale(-1, 1);
    }

    /* Whatsapp Blinking */
    .pulse-button {
      border-radius: 9999px;
      text-decoration: none;
      font-weight: 400;
      display: inline-block;
      color: #f5f6fd;
      position: relative;
      border: none;
      box-shadow: 0 0 0 0 #07f11a;
      background-color: #13dc23;
      cursor: pointer;
      animation: pulse 2s infinite cubic-bezier(0.66, 0, 0, 1);
    }

    .pulse-button:hover {
      animation: none;
    }

    @keyframes pulse {
      to {
        box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);
      }
    }

    .counter-wrap .counter-logo img {
      width: 50px;
    }

    .counter-wrap .counter-content {
      padding-left: 20px;
    }

    /* consultation-section */

    .consultation_section .contact-area-bg {
      background-color: #fff;
      position: relative;
      -webkit-box-shadow: 0 0 15px rgb(0 0 0 / 10%);
      box-shadow: 0 0 15px rgb(0 0 0 / 10%);
      border-radius: 10px;
      z-index: 2;
    }

    .consultation_section {
      background-image: url('../d1s2d2wdgl8dqe.cloudfront.net/static/img/consultant-bg-wave.png');
      background-repeat: no-repeat;
      padding-top: 95px;
    }

    .consultation_section .contact-form {
      padding: 25px;
      max-width: 600px;
      position: relative;
      z-index: 1;
    }

    .consultation_section .contact-form .section-title {
      margin-bottom: 30px;
    }

    #lp-pom-button-336 {
      display: block;
      border-style: none;
      border-radius: 5px;
      z-index: 49;
      width: 300px;
      height: 60px;

      background-color: #01b0f8;
      background: -webkit-linear-gradient(#69b0cc, #46788b);
      background: -moz-linear-gradient(#588091, #3a9ec5);
      background: -ms-linear-gradient(#5b90a5, #5b90a5);
      background: -o-linear-gradient(#5b90a5, #5b90a5);
      background: linear-gradient(#5b90a5, #5b90a5);
      box-shadow: none;
      text-shadow: none;
      color: #ffffff;
      font-size: 18px;
      line-height: 22px;
      font-weight: 600;
      font-family: inherit;
      font-style: normal;
      text-align: center;
      background-repeat: no-repeat;
      padding-top: 19px;
    }

    #lp-pom-button-336:hover {
      background-color: #0baff0;
      background: -webkit-linear-gradient(#5b90a5, #0ec2aa);
      background: -moz-linear-gradient(#66cec0, #0ec2aa);
      background: -ms-linear-gradient(#66cec0, #0ec2aa);
      background: -o-linear-gradient(#66cec0, #0ec2aa);
      background: linear-gradient(#66cec0, #0ec2aa);
      box-shadow: none;
      color: #ffffff;
    }

    .consultation_card {
      background: rgba(255, 255, 255, 255);
      border-radius: 10px;
      /* padding: 33px; */
      z-index: 46;

      align-items: center;
      box-shadow: 8px 8px 30px 30px rgb(42 67 113 / 15%);
      padding: 80px 40px 40px 40px;
    }

    .consulation_text {
      font-weight: 600;
      font-family: inherit;
      font-size: 36px;
      color: rgb(73, 80, 87);
      font-style: normal;
    }

    .consulation_para {
      font-weight: 400;
      font-family: inherit;
      font-size: 18px;
      color: rgb(173, 181, 189);
      background-color: rgba(0, 0, 0, 0);
      font-style: normal;
    }

    .consultation_btn {
      background-color: #01b0f8;
      background: -webkit-linear-gradient(#01b0f8, #5fb1b1);
      background: -moz-linear-gradient(#01b0f8, #5fb1b1);
      background: -ms-linear-gradient(#01b0f8, #5fb1b1);
      background: -o-linear-gradient(#01b0f8, #5fb1b1);
      background: linear-gradient(#01b0f8, #5fb1b1);
      border: none;
      outline: none;
      width: 110px;
      border-radius: 25px;
    }

    .consultation_container:before {
      background: inherit;
      top: 0;
      content: '';
      display: block;
      height: 100%;
      left: 0;
      position: absolute;
      right: 0;
      transform: skewY(-8.75deg);
      transform-origin: 0;
      z-index: 1;
    }

    .img_section {
      position: absolute;
      bottom: -100px;
      right: 0;
    }

    #contactForm .form-control {
      padding: 7px 0.5rem;
    }

    .consulting_bg {
      background: #effadf;
    }

    .consulting_title {
      font-weight: 600;
    }

    .form-group input::placeholder {
      color: #495057 !important;
      font-weight: 500;
    }

    @media only screen and (max-width: 600px) {
      .consultation_card {
        padding: 15px;
        width: auto;
      }

      .consulation_text {
        font-size: 20px;
      }

      #lp-pom-button-336 {
        height: 50px;
        padding-top: 12px;
      }

      .img_section {
        display: none;
      }

      .consulting_img_mb {
        display: none;
      }

      .consulting_title {
        font-size: 16px;
      }

      .consulting_form {
        padding-top: 0px !important;
      }
    }
  </style>

  <style>
    .wrapper .btn--close {
      background-color: #fff;
      position: absolute;
      top: 1em;
      right: 1em;
      cursor: pointer;
      border: #FCF1F5 1px solid;
      border-radius: 50%;
      padding: 0.4em 0.8em;
    }


    .wrapper .img__container {
      padding: 0.7em;
      border-radius: 100%;
      margin-bottom: 1.5em;
    }


    .wrapper .img--fire {
      background-color: #FFF;
      border: 4px solid #FCF1F5;
    }

    .wrapper .pop__img {
      width: 60px;
    }

    .wrapper .pop__title {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 0.4em;
      line-height: 1.2;
    }


    .icon-bx-wraper .icon-bx-md {
      position: relative;
      margin: 20px;
      min-width: 100px;
      transition: all .5s;
      z-index: 1;
    }

    .icon-bx-md {
      display: inline-block;
      text-align: center;
      border-radius: 3px;
      width: 100px;
      height: 100px;
      line-height: 100px;
    }

    .text-red {
      color: #ff586e;
    }

    .bg-white {
      background-color: #fff !important;
    }

    .icon-bx-md.radius.bg-white.text-red.circle_img:before {
      content: "";
      position: absolute;
      width: 125px;
      height: 125px;
      left: calc(50% - 63px);
      top: calc(50% - 92px);
      background-size: contain;
      z-index: -1;
      background-repeat: no-repeat;
      background-image: url('{{ asset('frontend/Assets/static/paid_marketing/images/acknowledgement_error.png')}}');
      -webkit-animation: rotate360 5s infinite;
      animation: rotate360 5s infinite;

    }

    .icon-bx-wraper .icon-bx-md {
      position: relative;
      margin: 20px;
      margin-bottom: 0;
      min-width: 100px;
      transition: all .5s;
      z-index: 1;
    }

    .icon-bx-wraper .icon-bx-md .icon-cell {
      font-size: 50px;
      color: #fff;
      z-index: 2;
      position: relative;
    }

    .icon-bx-md i {
      font-size: 30px;
      vertical-align: middle;
      margin-top: -70px;
    }

    .icon-bx-wraper:hover {
      background-color: transparent !important;
    }

    @keyframes rotate360 {
      0% {
        -webkit-transform: rotate(0);
        transform: rotate(0)
      }

      to {
        -webkit-transform: rotate(-1turn);
        transform: rotate(-1turn)
      }
    }
  </style>

  <style>
    .wrapper .btn--close {
      background-color: #fff;
      position: absolute;
      top: 1em;
      right: 1em;
      cursor: pointer;
      border: #FCF1F5 1px solid;
      border-radius: 50%;
      padding: 0.4em 0.8em;
    }

    /*  .wrapper .fa-times {
            color: gray;
        }*/

    .wrapper .img__container {
      padding: 0.7em;
      border-radius: 100%;
      margin-bottom: 1.5em;
    }

    /*   .wrapper .img--phone {
            background-color: #FCF1F5;
            border: 4px solid #F3F3FB;
                width: 90px;
    margin: 0 auto;
        }*/

    .wrapper .img--fire {
      background-color: #FFF;
      border: 4px solid #FCF1F5;
    }

    .wrapper .pop__img {
      width: 60px;
    }

    .wrapper .pop__title {
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 0.4em;
      line-height: 1.2;
    }

    .wrapper .pop__text {
      font-weight: 500;
    }


    .icon-bx-wraper .icon-bx-md {
      position: relative;
      margin: 20px;
      min-width: 100px;
      transition: all .5s;
      z-index: 1;
    }

    .icon-bx-md {
      display: inline-block;
      text-align: center;
      border-radius: 3px;
      width: 100px;
      height: 100px;
      line-height: 100px;
    }

    .text-red {
      color: #ff586e;
    }

    .bg-white {
      background-color: #fff !important;
    }

    #myModal_successful_image.icon-bx-md.radius.bg-white.text-red.circle_img:before {
      content: "";
      position: absolute;
      width: 125px;
      height: 125px;
      left: calc(50% - 63px);
      top: calc(50% - 92px);
      background-size: contain;
      z-index: -1;
      background-repeat: no-repeat;
      background-image: url({{ asset('frontend/Assets/static/paid_marketing/images/acknowledgement_success.png')}});
      -webkit-animation: rotate360 5s infinite;
      animation: rotate360 5s infinite;

    }

    .icon-bx-wraper .icon-bx-md {
      position: relative;
      margin: 20px;
      margin-bottom: 0;
      min-width: 100px;
      transition: all .5s;
      z-index: 1;
    }

    .icon-bx-wraper .icon-bx-md .icon-cell {
      font-size: 50px;
      color: #fff;
      z-index: 2;
      position: relative;
    }

    .icon-bx-md i {
      font-size: 30px;
      vertical-align: middle;
      margin-top: -70px;
    }

    .icon-bx-wraper:hover {
      background-color: transparent !important;
    }

    @keyframes rotate360 {
      0% {
        -webkit-transform: rotate(0);
        transform: rotate(0)
      }

      to {
        -webkit-transform: rotate(-1turn);
        transform: rotate(-1turn)
      }
    }
  </style>


</head>

<body>

@yield('content')



    <!-- Footer -->
    <footer id="footer" >
      <div class="footer-top" style="background: #053281;">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <a href="{{ route('customer.index') }}">
                <img src="{{ asset('image/sitesettings/'.$setting->favicon)}}" alt="{{$setting->site_title}}" style="width: 100px; height: 100px;"
                  class="img-fluid"></a>
              <p>
                  {{$setting->address_1}}
                  <br>
                  {{$setting->address_2}}
                <br><br>
                <strong>Phone:</strong> +977 {{$setting->contact_phone}}<br>
                <strong>Email:</strong> {{$setting->contact_email}}<br>
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4 style="color: #dee2e6;">Useful Links</h4>
              <ul>
                <li><i class="las la-angle-right"></i> <a href="{{ route('customer.index') }}">Home</a></li>
                <li><i class="las la-angle-right"></i> <a href="{{ route('customer.services') }}">Services</a></li>
                <li><i class="las la-angle-right"></i> <a href="{{ route('customer.faqs')}}">FAQ</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4 style="color: #dee2e6;">Get Started</h4>
              <ul>
                <li><i class="las la-angle-right"></i> <a href="{{ route('customer.contact') }}">Contact Us</a></li>
                <li><i class="las la-angle-right"></i> <a href="{{ route('customer.career')}}">Career</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4 style="color: #dee2e6;">Our Social Networks</h4>
              <div class="social-links mt-3">

                <a href="{{$setting->social_profile_fb}}" class="facebook" target="_blank"><i class="lab la-facebook-f"></i></a>
                <a href="{{$setting->social_profile_insta}}" class="instagram" target="_blank"><i class="lab la-instagram"></i></a>
                <a href="{{$setting->social_profile_linkedin}}" class="linkedin" target="_blank"><i class="lab la-linkedin-in"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="footer-bottom" style="background: #052d72;">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-lg-6 text-lg-left text-center">
              <div class="copyright">
                Copyright © 2021 <strong>iCare. </strong> All Rights Reserved. Designed and Developed by:  <a href="#">Prabidhi Enterpriese.</a> 
              </div>
            </div>
            <div class="col-lg-6">
              <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">

                <a href="{{ route('customer.privacy') }}">Privacy Policy</a>
                <a href="{{ route('customer.conditions') }}">Terms & Conditions</a>
              </nav>
            </div>
          </div>
        </div>
      </div>

    </footer>
    <div class="modal fade custom_modal wrapper" id="myModal_something_wrong" role="dialog" style="top: 25%;">
      <div class="modal-dialog">
        <div class="card">
          <div class="card">
            <!-- <div class="text-right cross pb-2" style="cursor: pointer;"> <i class="la la-times-circle" ></i> </div> -->
          </div>
          <div class="card-body text-center pt-0">
            <button class="btn--close" style="cursor: pointer;" data-dismiss="modal"><i
                class="fa fa-times"></i></button>
            <div class=" icon-bx-wraper  mt-5">
              <div class="icon-bx-md radius bg-white text-red circle_img">
                <a href="javascript:void(0);" class="icon-cell">
                  <i class="la la-times"></i>
                </a>
              </div>
            </div>
            <p class="pop__title ">Something Wrong Has Happened!!!</p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade custom_modal wrapper" id="myModal_successful" role="dialog" style="top: 25%;">
      <div class="modal-dialog">
        <div class="card">
          <div class="card">
            <!-- <div class="text-right cross pb-2" style="cursor: pointer;"> <i class="la la-times-circle" ></i> </div> -->
          </div>
          <div class="card-body text-center pt-0">
            <button class="btn--close" style="cursor: pointer;" data-dismiss="modal"><i
                class="fa fa-times"></i></button>
            <div class=" icon-bx-wraper  mt-5">
              <!-- <img src="https://image.flaticon.com/icons/png/512/753/753345.png
                        " alt="Phone" class="pop__img img--phone"> -->
              <div class="icon-bx-md radius bg-white text-red circle_img" id="myModal_successful_image">
                <a href="javascript:void(0);" class="icon-cell">
                  <i class="la la-check-circle"></i>
                </a>
              </div>
            </div>
            <p class="pop__title ">Successfully Submited</p>
            <p class="pop__text">You have successfully booked your free consultation.Someone from our end will get it
              touch soon.</p>
          </div>
        </div>
      </div>
    </div>

    <!--  JS Files -->

    <script src="{{ asset('frontend/Assets/static/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/Assets/static/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/Assets/static/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('frontend/Assets/static/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/Assets/static/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/Assets/static/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
    <script src="{{ asset('frontend/Assets/static/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/Assets/static/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/Assets/static/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{ asset('frontend/Assets/static/vendor/aos/aos.js')}}"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        dots: false,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }


      })
    </script>


    <!-- new js -->
    <script src="{{ asset('frontend/Assets/static/vendor/typewriter/typewriter.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('frontend/Assets/static/js/main/main.js')}}"></script>

    <script>
      $(window).scroll(function () {
        var header_ofset = $('#header').offset().top - $(window).scrollTop();

        if (header_ofset < 1) {
          $('#header').addClass('header-scrolled');
          $('#header .logo img').attr('src', "{{ asset('frontend/Assets/static/img/logo/icare_logo.png')}}");
          $('#header ul li a').removeClass('text-white');
        }
        else {
          $('#header').removeClass('header-scrolled');
          $('#header .logo img').attr('src', "{{ asset('frontend/Assets/static/img/logo/icare_logo_white.png')}}");
          $('#header ul li a').addClass('text-white ');
        }
      })

      // for whatsApp  Button
      myID = document.getElementById("wa-id");

      var myScrollFunc = function () {
        var y = window.scrollY;
        if (y >= 800) {
          myID.className = "wa-float wa-show aos-init aos-animate"
        } else {
          myID.className = "wa-float wa-hide"
        }
      };

      window.addEventListener("scroll", myScrollFunc);

    </script>
</body>

</html>