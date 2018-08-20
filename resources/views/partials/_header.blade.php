<header class="site-header">
    <div class="container-fluid for-navi">

        <div class="site-logo col-md-4 col-sm-12 col-12">

            <h1>
                <a href="{{ url('/') }}">
                    {{--<img src="{{ asset('files/images/logo.png') }}" width="70px" height="70px" style="top: 0px;" alt="">--}}
             <span class="logo-icon">   <img src="{{ asset('files/images/hog_logo.png') }}" width="70px" height="70px" style="top: 0px;" alt=""></span>
                    {{--<span class="logo-icon"><i class="fa fa-heart"></i></span>--}}
                    <span class="logo-text">House Of Grace Church <br><span class="text-center">Eldoret</span></span>
                    <span class="logo-tagline"></span>
                </a>
            </h1>
        </div>
        <!-- Main Navigation -->

        <nav class="main-navigation" role="navigation">
            <ul class="sf-menu">
                <li><a href="{{ url('/') }}">Home</a>
                </li>
                <li><a href="javascript:void(0)">About us</a>
                    <ul class="dropdown">
                        <li><a href="{{ url('/about') }}">Overview</a></li>
                        <li><a href="{{ url('/new-here') }}">New Here?</a></li>
                        <li><a href="{{ url('/staff') }}">Our Staff</a></li>
                        <li><a href="{{ url('/departments') }}">Our Departments</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/ministries') }}">Ministries</a></li>
                <li><a href="{{ url('/sermon') }}">Sermons</a></li>
                <li><a href="{{ url('/media') }}">Media</a>
                </li>
                <li><a href="{{ url('/event') }}">Events</a>
                </li>
                <li><a href="{{ url('/blog') }}">Blog</a>

                </li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/donate') }}">Donate</a></li>
            </ul>
        </nav>
        <a href="{{ url('/') }}" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
    </div>
</header>