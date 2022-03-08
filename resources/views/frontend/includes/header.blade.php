<header id="header" class="fixed-top d-flex align-items-center" >
    <div class="container d-flex align-items-center" >

      <div class="logo mr-auto">

        <a href="{{ route('customer.index') }}"><img src="{{ asset('image/sitesettings/'.$setting->favicon)}}" alt="{{ $setting->site_title }}" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block" >
        <ul>
          <li><a href="{{ route('customer.index') }}" class="hello-btn text-white " style="color: #000 !important;"  >iCare</a></li>
          <li><a href="{{ route('customer.about') }}" class="hello-btn text-white " style="color: #000 !important;">About</a></li>
          <li><a href="{{ route('customer.career') }}" class="hello-btn text-white " style="color: #000 !important;">Career</a></li>
          <li><a href="{{ route('customer.contact')}}" class="hello-btn text-white " style="color: #000 !important;">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>

  <!-- text-white hello-btn post-project-btn -->