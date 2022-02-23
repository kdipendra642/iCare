<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">

        <a href="{{ route('customer.index') }}"><img src="{{ asset('image/sitesettings/'.$setting->favicon)}}" alt="{{ $setting->site_title }}" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ route('customer.index') }}" class="text-white hello-btn post-project-btn">iCare</a></li>
          <li><a href="{{ route('customer.about') }}" class="text-white hello-btn post-project-btn">About Us</a></li>
          <li><a href="{{ route('customer.contact')}}" class="hello-btn post-project-btn ">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>