@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Gallery 4 Cols Filter</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Gallery 4 Cols Filter</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <ul class="sort-destination isotope-grid" data-sort-id="gallery">
                        <li class="col-md-3 col-sm-3 grid-item format-image">
                            <div class="grid-item-inner"> <a href="{{ asset('files/images/gallery_img1.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('files/images/gallery_img1.jpg') }}" alt=""> </a> </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-image">
                            <div class="grid-item-inner"> <a href="{{ asset('files/images/gallery_img2.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('files/images/gallery_img2.jpg') }}" alt=""> </a> </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-video">
                            <div class="grid-item-inner"> <a href="https://vimeo.com/19564018" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('files/images/event_img5.jpg') }}" alt=""> </a> </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-gallery">
                            <div class="grid-item-inner">
                                <div class="media-box">
                                    <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="yes" data-arrows="no" data-style="slide" data-pause="yes">
                                        <ul class="slides">
                                            <li class="item"><a href="{{ asset('files/images/gallery_img3.jpg') }}" data-rel="prettyPhoto[postname]"><img src="{{ asset('files/images/gallery_img3.jpg') }}" alt=""></a></li>
                                            <li class="item"><a href="{{ asset('files/images/gallery_img4.jpg') }}" data-rel="prettyPhoto[postname]"><img src="{{ asset('files/images/gallery_img4.jpg') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-link">
                            <div class="grid-item-inner"> <a href="http://www.google.com" target="_blank" class="media-box"> <img src="{{ asset('files/images/gallery_img5.jpg') }}" alt=""> </a> </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-image">
                            <div class="grid-item-inner"> <a href="{{ asset('files/images/event_img4.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('files/images/event_img4.jpg') }}" alt=""> </a> </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-image">
                            <div class="grid-item-inner"> <a href="{{ asset('files/images/gallery_img1.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('files/images/gallery_img1.jpg') }}" alt=""> </a> </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-image">
                            <div class="grid-item-inner"> <a href="{{ asset('files/images/gallery_img2.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('files/images/gallery_img2.jpg') }}" alt=""> </a> </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-video">
                            <div class="grid-item-inner"> <a href="https://vimeo.com/19564018" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('files/images/event_img5.jpg') }}" alt=""> </a> </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-gallery">
                            <div class="grid-item-inner">
                                <div class="media-box">
                                    <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="slide" data-pause="yes">
                                        <ul class="slides">
                                            <li class="item"><a href="{{ asset('files/images/gallery_img3.jpg') }}" data-rel="prettyPhoto[postname]"><img src="{{ asset('files/images/gallery_img3.jpg') }}" alt=""></a></li>
                                            <li class="item"><a href="{{ asset('files/images/gallery_img4.jpg') }}" data-rel="prettyPhoto[postname]"><img src="{{ asset('files/images/gallery_img4.jpg') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-link">
                            <div class="grid-item-inner"> <a href="http://www.google.com" target="_blank" class="media-box"> <img src="{{ asset('files/images/gallery_img5.jpg') }}" alt=""> </a> </div>
                        </li>
                        <li class="col-md-3 col-sm-3 grid-item format-image">
                            <div class="grid-item-inner"> <a href="{{ asset('files/images/event_img4.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('files/images/event_img4.jpg') }}" alt=""> </a> </div>
                        </li>
                    </ul>
                </div>
                <!-- Pagination -->
                <ul class="pagination">
                    <li><a href="{{ url('/media')}}#"><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="{{ url('/media')}}#">1</a></li>
                    <li class="active"><a href="{{ url('/media')}}#">2</a></li>
                    <li><a href="{{ url('/media')}}#">3</a></li>
                    <li><a href="{{ url('/media')}}#">4</a></li>
                    <li><a href="{{ url('/media')}}#">5</a></li>
                    <li><a href="{{ url('/media')}}#"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Body Content -->

@endsection
