@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('files/images/ph8.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Sermon Series</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Sermon series</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <ul class="isotope-grid">
                        <li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">
                            <div class="grid-item-inner">
                                <a href="{{ url('/sermon-list') }}" class="media-box">
                                    <img src="{{ asset('files/images/img_sermon4.jpg') }}" alt="">
                                </a>
                                <div class="grid-content">
                                    <span class="sermon-series-date">5/16/14 – 6/6/14</span>
                                    <h3><a href="{{ url('/sermon-list') }}">Baptism - Take the next step in your journey</a></h3>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. </p>
                                    <a href="{{ url('/sermon-list') }}" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">
                            <div class="grid-item-inner">
                                <a href="{{ url('/sermon-list') }}" class="media-box">
                                    <img src="{{ asset('files/images/img_sermon5.jpg') }}" alt="">
                                </a>
                                <div class="grid-content">
                                    <span class="sermon-series-date">7/6/14 – 7/27/14</span>
                                    <h3><a href="{{ url('/sermon-list') }}">The temple of the holy spirit</a></h3>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. </p>
                                    <a href="{{ url('/sermon-list') }}" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">
                            <div class="grid-item-inner">
                                <a href="{{ url('/sermon-list') }}" class="media-box">
                                    <img src="{{ asset('files/images/img_sermon2.jpg') }}" alt="">
                                </a>
                                <div class="grid-content">
                                    <span class="sermon-series-date">8/3/14 – 9/7/14</span>
                                    <h3><a href="{{ url('/sermon-list') }}">Worship God’s Way</a></h3>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. </p>
                                    <a href="{{ url('/sermon-list') }}" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">
                            <div class="grid-item-inner">
                                <a href="{{ url('/sermon-list') }}" class="media-box">
                                    <img src="{{ asset('files/images/img_sermon1.jpg') }}" alt="">
                                </a>
                                <div class="grid-content">
                                    <span class="sermon-series-date">Current Series</span>
                                    <h3><a href="{{ url('/sermon-list') }}">Joy &amp; Generosity</a></h3>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. </p>
                                    <a href="{{ url('/sermon-list') }}" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">
                            <div class="grid-item-inner">
                                <a href="{{ url('/sermon-list') }}" class="media-box">
                                    <img src="{{ asset('files/images/img_sermon3.jpg') }}" alt="">
                                </a>
                                <div class="grid-content">
                                    <span class="sermon-series-date">7/6/14 – 7/27/14</span>
                                    <h3><a href="{{ url('/sermon-list') }}">What God Really Wants</a></h3>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. </p>
                                    <a href="{{ url('/sermon-list') }}" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 sermon-item grid-item format-standard">
                            <div class="grid-item-inner">
                                <a href="{{ url('/sermon-list') }}" class="media-box">
                                    <img src="{{ asset('files/images/img_sermon6.jpg') }}" alt="">
                                </a>
                                <div class="grid-content">
                                    <span class="sermon-series-date">7/6/14 – 7/27/14</span>
                                    <h3><a href="{{ url('/sermon-list') }}">Days like this</a></h3>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. </p>
                                    <a href="{{ url('/sermon-list') }}" class="btn btn-primary">View series <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@endsection
