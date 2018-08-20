@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('files/images/slide7.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>About our church</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">About Us</li>
            </ol>
        </div>
    </div>

    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <h2>Welcome to House Of Grace Church</h2>
                <hr class="sm">
                <h4>Aenean vulputate eleifend tellus</h4>
                <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                    arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                    Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus. Nulla consequat massa quis enim.
                    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                <div class="spacer-50"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="icon-box icon-box-style1">
                            <div class="icon-box-head">
                                <span class="ico"><i class="icon-happy-drop"></i></span>
                                <h4>Be happy</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="icon-box icon-box-style1">
                            <div class="icon-box-head">
                                <span class="ico"><i class="icon-umbrella"></i></span>
                                <h4>Help others</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="icon-box icon-box-style1">
                            <div class="icon-box-head">
                                <span class="ico"><i class="icon-tshirt"></i></span>
                                <h4>Shop for a cause</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        </div>
                    </div>
                </div>
                <hr class="fw">
                <h3>Our Staff</h3>
                <div class="spacer-10"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="grid-item staff-item format-standard">
                            <div class="grid-item-inner">
                                <a href="{{ url('/staff') }}" class="media-box">
                                    <img src="{{ asset('files/images/staff1.jpg') }}" alt="">
                                </a>
                                <div class="grid-content">
                                    <div class="staff-item-name">
                                        <h5>Melina Mironescu</h5>
                                        <span class="meta-data">Connections Coordinator</span>
                                    </div>
                                    <ul class="social-icons-colored">
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                                        <li class="vimeo"><a href="https://www.vimeo.com/"><i class="fab fa-vimeo-square"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li class="googleplus"><a href="https://plus.google.com/"><i class="fab fa-google-plus"></i></a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="grid-item staff-item format-standard">
                            <div class="grid-item-inner">
                                <a href="{{ url('/staff') }}staff.html" class="media-box">
                                    <img src="{{ asset('files/images/staff2.jpg') }}" alt="">
                                </a>
                                <div class="grid-content">
                                    <div class="staff-item-name">
                                        <h5>Brandon Dean</h5>
                                        <span class="meta-data">Pastor</span>
                                    </div>
                                    <ul class="social-icons-colored">
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                                        <li class="vimeo"><a href="https://www.vimeo.com/"><i class="fab fa-vimeo-square"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li class="googleplus"><a href="https://plus.google.com/"><i class="fab fa-google-plus"></i></a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="grid-item staff-item format-standard">
                            <div class="grid-item-inner">
                                <a href="{{ url('/staff') }}staff.html" class="media-box">
                                    <img src="{{ asset('files/images/staff3.jpg') }}" alt="">
                                </a>
                                <div class="grid-content">
                                    <div class="staff-item-name">
                                        <h5>Elizabeth Hart</h5>
                                        <span class="meta-data">Events Manager</span>
                                    </div>
                                    <ul class="social-icons-colored">
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                                        <li class="vimeo"><a href="https://www.vimeo.com/"><i class="fab fa-vimeo-square"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li class="googleplus"><a href="https://plus.google.com/"><i class="fab fa-google-plus"></i></a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer-20"></div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@endsection
