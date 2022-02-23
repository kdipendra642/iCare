<div id="sidebar"  class="nav-collapse ">
<!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
        <li>
            <a class="{{ 'dashboard' == request()->path() ? 'active' : '' }}" href="/dashboard">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sub-menu  ">
            <a href="javascript:;" class="{{ ((request()->is('admin/service*')) || (request()->is('admin/technology*')) || (request()->is('admin/client*')) )  ? 'active open ' : '' }}">
                <i class="fa fa-rocket"></i>
                <span>Contents</span>
            </a>
            <ul class="sub">
                <li class="{{ 'admin/service' == request()->path() ? 'active' : '' }}"><a  href="{{ route('admin.service') }}" > <i class="fa fa-arrows-h"></i>  Services</a></li>
                <li class="{{ 'admin/technology' == request()->path() ? 'active' : '' }}"><a  href="{{ route('admin.technology') }}" > <i class="fa fa-anchor"></i>  Technology</a></li>
                <li class="{{ 'admin/client' == request()->path() ? 'active' : '' }}"><a  href="{{ route('admin.client') }}" > <i class="fa fa-building-o"></i>  Clients</a></li>
            </ul>
           
        </li>
        <li class="sub-menu  ">
            <a href="javascript:;" class="{{ ((request()->is('admin/banner*')) || (request()->is('admin/faq*')) || (request()->is('admin/career*')))  ? 'active open ' : '' }}">
                <i class="fa fa-shopping-cart"></i>
                <span>Accessories</span>
            </a>
            <ul class="sub">
                <li class="{{ 'admin/banner' == request()->path() ? 'active' : '' }}"><a  href="{{ route('admin.banner') }}" > <i class="fa fa-arrows-h"></i>  Sliders</a></li>
                <li class="{{ 'admin/faq' == request()->path() ? 'active' : '' }}"><a  href="{{ route('admin.faq') }}" > <i class="fa fa-glass"></i>  FAQ's</a></li>
                <li class="{{ 'admin/career' == request()->path() ? 'active' : '' }}"><a  href="{{ route('admin.career') }}" > <i class="fa fa-suitcase"></i> Vacancy</a></li>
            </ul>
           
        </li>
        <li class="sub-menu ">
            <a href="javascript:;" class="{{ ((request()->is('admin/register*')) || (request()->is('admin/testimonials*')))  ? 'active open ' : '' }}">
                <i class="fa fa-users"></i>
                <span>Users and Testimonies</span>
            </a>
            <ul class="sub" >
                <li class="{{ 'admin/register' == request()->path() ? 'active' : '' }}"><a href="{{ route('admin.register') }}"><i class="fa fa-user"></i><span>Users</span></a></li>
                <li class="{{ 'admin/testimonials' == request()->path() ? 'active' : '' }}"><a href="{{ route('admin.testimonials') }}"><i class="fa fa-user"></i><span>Testimonies</span></a></li>
            </ul>
        </li>
        <li class="sub-menu ">
            <a href="javascript:;" class="{{ ((request()->is('admin/contact*')) || (request()->is('admin/vacancy*')) )  ? 'active open ' : '' }}">
                <i class="fa fa-mobile"></i>
                <span>Messages</span>
            </a>
            <ul class="sub" >
                <li><a class="{{ 'admin/contact' == request()->path() ? 'active' : '' }}" href="{{ route('admin.contact') }}"><i class="fa fa-mobile"></i><span>Messages</span></a></li>
                <li><a class="{{ 'admin/vacancy' == request()->path() ? 'active' : '' }}" href="{{ route('admin.vacancy') }}"><i class="fa fa-suitcase"></i><span>Applications</span></a></li>
            </ul>
        </li>
       
        <li>
            <a class="{{ 'admin/settings' == request()->path() ? 'active' : '' }}" href="{{ route('admin.settings')}}">
                <i class="fa fa-gears"></i>
                <span>Settings</span>
            </a>
        </li>
        
    </ul>
       
<!-- sidebar menu end-->
</div>