@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('files/images/baptism.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2><a href="https://vimeo.com/37540860" data-rel="prettyPhoto" data-toggle="tooltip" data-placement="bottom" data-original-title="Watch Trailer" class="sermon-series-trailer"><i class="icon icon-music-play"></i></a></h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/sermon') }}">Sermons Series</a></li>
                <li class="active">Baptism - Take the next step in your journey</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <span class="label label-primary">Current Series</span>
                        <div class="sermon-series-description">
                            <h2 style="text-transform:uppercase;">Baptism - Take the next step in your journey</h2>
                            <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                        </div>
                        <ul class="sermons-list">
                            <li class="sermon-item format-standard">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a href="{{ url('/single-sermon') }}" class="media-box"><img src="{{ asset('files/images/img_sermon4.jpg') }}" alt=""></a>
                                        <a href="{{ url('/single-sermon') }}" class="basic-link">Watch Sermon</a>
                                    </div>
                                    <div class="col-md-7">
                                        <h3><a href="{{ url('/single-sermon') }}">It’s Time for a Comeback</a></h3>
                                        <span class="meta-data"><i class="fa fa-calendar"></i> July 20th, 2014</span>
                                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo...</p>
                                    </div>
                                </div>
                            </li>
                            <li class="sermon-item format-standard">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a href="{{ url('/single-sermon') }}" class="media-box"><img src="{{ asset('files/images/img_sermon4.jpg') }}" alt=""></a>
                                        <a href="{{ url('/single-sermon') }}" class="basic-link">Watch Sermon</a>
                                    </div>
                                    <div class="col-md-7">
                                        <h3><a href="{{ url('/single-sermon') }}">3 Areas All of Us Struggle to Trust God With</a></h3>
                                        <span class="meta-data"><i class="fa fa-calendar"></i> July 05th, 2014</span>
                                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo...</p>
                                    </div>
                                </div>
                            </li>
                            <li class="sermon-item format-standard">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a href="{{ url('/single-sermon') }}" class="media-box"><img src="{{ asset('files/images/img_sermon4.jpg') }}" alt=""></a>
                                        <a href="{{ url('/single-sermon') }}" class="basic-link">Watch Sermon</a>
                                    </div>
                                    <div class="col-md-7">
                                        <h3><a href="{{ url('/single-sermon') }}">The Difference Maker</a></h3>
                                        <span class="meta-data"><i class="fa fa-calendar"></i> June 22th, 2014</span>
                                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo...</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="sermon-pastors sidebar-widget widget">
                            <h3>Speakers</h3>
                            <hr class="sm">
                            <ul class="members-list">
                                <li>
                                    <img src="{{ asset('files/images/speaker1.jpg') }}" alt="" width="100" height="100">
                                    <h5>Elizabeth Hart</h5>
                                    <span class="meta-data">Event Speaker</span>
                                </li>
                                <li>
                                    <img src="{{ asset('files/images/speaker2.jpg') }}" alt="" width="100" height="100">
                                    <h5>Riley Wilson</h5>
                                    <span class="meta-data">Pastor</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->

@endsection