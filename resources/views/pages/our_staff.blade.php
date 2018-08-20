@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('files/images/ph2.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Meet our staff</h2>
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
                <h3>Church Members</h3>
                <hr class="sm">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="grid-item staff-item format-standard">
                            <div class="grid-item-inner">
                                <img src="{{ asset('files/images/staff1.jpg') }}" alt="">
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
                                <img src="{{ asset('files/images/staff2.jpg') }}" alt="">
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
                                <img src="{{ asset('files/images/staff5.jpg') }}" alt="">
                                <div class="grid-content">
                                    <div class="staff-item-name">
                                        <h5>Riley Wilson</h5>
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
                </div>
                <div class="spacer-40"></div>
                <h3>Ministries</h3>
                <hr class="sm">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="grid-item staff-item format-standard">
                            <div class="grid-item-inner">
                                <img src="{{ asset('files/images/staff6.jpg') }}" alt="">
                                <div class="grid-content">
                                    <div class="staff-item-name">
                                        <h5>Ethan Walker</h5>
                                        <span class="meta-data">Men's Ministries</span>
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
                    <div class="col-md-3 col-sm-6">
                        <div class="grid-item staff-item format-standard">
                            <div class="grid-item-inner">
                                <img src="{{ asset('files/images/staff2.jpg') }}" alt="">
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
                    <div class="col-md-3 col-sm-6">
                        <div class="grid-item staff-item format-standard">
                            <div class="grid-item-inner">
                                <img src="{{ asset('files/images/staff3.jpg') }}" alt="">
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
                    <div class="col-md-3 col-sm-6">
                        <div class="grid-item staff-item format-standard">
                            <div class="grid-item-inner">
                                <img src="{{ asset('files/images/staff4.jpg') }}" alt="">
                                <div class="grid-content">
                                    <div class="staff-item-name">
                                        <h5>Kyleigh Lam</h5>
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
                <div class="spacer-40"></div>
                <h3>Speakers</h3>
                <hr class="sm">
                <ul class="members-list row">
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <img src="{{ asset('files/images/speaker1.jpg') }}" alt="" width="100" height="100">
                        <h5>Elizabeth Hart</h5>
                        <span class="meta-data">Event Manager</span>
                        <ul class="social-icons-colored">
                            <li class="facebook"><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </li>
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <img src="{{ asset('files/images/speaker2.jpg') }}" alt="" width="100" height="100">
                        <h5>Riley Wilson</h5>
                        <span class="meta-data">Pastor</span>
                        <ul class="social-icons-colored">
                            <li class="facebook"><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </li>
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <img src="{{ asset('files/images/speaker3.jpg') }}" alt="" width="100" height="100">
                        <h5>Ethan Walker</h5>
                        <span class="meta-data">Men's Ministry</span>
                        <ul class="social-icons-colored">
                            <li class="facebook"><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </li>
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <img src="{{ asset('files/images/speaker4.jpg') }}" alt="" width="100" height="100">
                        <h5>Kyleigh Lam</h5>
                        <span class="meta-data">Events Manager</span>
                        <ul class="social-icons-colored">
                            <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </li>
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <img src="{{ asset('files/images/speaker5.jpg') }}" alt="" width="100" height="100">
                        <h5>Brandon Dean</h5>
                        <span class="meta-data">Pastor</span>
                        <ul class="social-icons-colored">
                            <li class="facebook"><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </li>
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <img src="{{ asset('files/images/speaker6.jpg') }}" alt="" width="100" height="100">
                        <h5>Melina Mironescu</h5>
                        <span class="meta-data">Connections Coordinator</span>
                        <ul class="social-icons-colored">
                            <li class="twitter"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@endsection