@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('files/images/baptism.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>It’s Time for a Comeback</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/sermon') }}">Sermon Series</a></li>
                <li><a href="{{ url('/sermon-list') }}">Baptism - Take the next step in your journey</a></li>
                <li class="active">It’s Time for a Comeback</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <a href="{{ url('/sermon-list') }}" class="basic-link backward">Back to series</a>
                        <div class="sermon-media clearfix">
                            <div class="sermon-media-left sermon-links">
                                <ul class="action-buttons">
                                    <li class="link"><a href="{{ url('/single-sermon') }}#self-video" data-toggle="tooltip" data-placement="right" data-original-title="Self Hosted Video"><i class="icon-video-cam"></i></a></li>
                                    <li class="link"><a href="{{ url('/single-sermon') }}#vimeo-video" data-toggle="tooltip" data-placement="right" data-original-title="Vimeo Video"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li class="link"><a href="{{ url('/single-sermon') }}#youtube-video" data-toggle="tooltip" data-placement="right" data-original-title="Youtube Video"><i class="fa fa-youtube-play"></i></a></li>
                                    <li class="link"><a href="{{ url('/single-sermon') }}#self-audio" data-toggle="tooltip" data-placement="right" data-original-title="Self Hosted Audio"><i class="icon-headphones"></i></a></li>
                                    <li class="link"><a href="{{ url('/single-sermon') }}#soundcloud-audio" data-toggle="tooltip" data-placement="right" data-original-title="SoundCloud Audio"><i class="fa fa-soundcloud"></i></a></li>
                                    <li><a href="{{ url('/single-sermon') }}#" data-toggle="tooltip" data-placement="right" data-original-title="Download PDF"><i class="icon-cloud-download"></i></a></li>
                                </ul>
                            </div>
                            <div class="sermon-media-right">
                                <div class="sermon-media-content">
                                    <div class="sermon-tabs" id="self-video">
                                        <video width="640" height="360" id="player2" poster="{{ asset('files/media/echo-hereweare.jpg') }}" class="video-player" controls preload="none">
                                            <!-- MP4 source must come first for iOS -->
                                            <source type="video/mp4" src="{{ asset('files/media/echo-hereweare.mp4') }}" />
                                            <!-- WebM for Firefox 4 and Opera -->
                                            <source type="video/webm" src="{{ asset('files/media/echo-hereweare.webm') }}" />
                                            <!-- OGG for Firefox 3 -->
                                            <source type="video/ogg" src="{{ asset('files/media/echo-hereweare.ogv') }}" />
                                            <!-- Fallback flash player for no-HTML5 browsers with JavaScript turned off -->
                                            <object width="640" height="360" type="application/x-shockwave-flash" data="{{ asset('files/vendor/mediaelement/flashmediaelement.swf') }}">
                                                <param name="movie" value="vendor/mediaelement/flashmediaelement.swf" />
                                                <param name="flashvars" value="controls=true&amp;file={{ asset('files/media/echo-hereweare.mp4') }}" />
                                                <!-- Image fall back for non-HTML5 browser with JavaScript turned off and no Flash player installed -->
                                                <img src="{{ asset('files/media/echo-hereweare.jpg') }}" width="640" height="360" alt="Here we are"
                                                     title="No video playback capabilities" />
                                            </object>
                                        </video>
                                    </div>
                                    <div class="video-container fw-video sermon-tabs" id="vimeo-video">
                                        <iframe src="{{ asset('files/') }}https://player.vimeo.com/video/37540860?title=0&amp;byline=0&amp;portrait=0" width="500" height="281"></iframe>
                                    </div>
                                    <div class="video-container fw-video sermon-tabs" id="youtube-video">
                                        <object width="560" height="315"><param name="movie" value="https://www.youtube.com/v/gjOzmz4KYho?hl=en_GB&amp;version=3&amp;rel=0"></param><param name="allowFullScreen" value="true"></param>
                                            <param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube.com/v/gjOzmz4KYho?hl=en_GB&amp;version=3&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
                                    </div>
                                    <div class="audio-container sermon-tabs" id="self-audio">
                                        <audio class="audio-player" src="{{ asset('files/media/Miaow-02-Hidden.mp3') }}" type="audio/mp3" controls></audio>
                                        <blockquote>
                                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
                                        </blockquote>
                                    </div>
                                    <div class="audio-container sermon-tabs" id="soundcloud-audio">
                                        <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/21136687&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                                    </div>
                                </div>
                                <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                                <div class="social-share-bar">
                                    <h4><i class="fa fa-share-alt"></i> Share</h4>
                                    <ul class="social-icons-colored">
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="vimeo"><a href="https://www.vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="googleplus"><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget sidebar-widget widget_categories">
                            <h3 class="widgettitle">Sermon Categories</h3>
                            <ul>
                                <li><a href="{{ url('/single-sermon') }}#">Suicide</a> (9)</li>
                                <li><a href="{{ url('/single-sermon') }}#">Family</a> (24)</li>
                                <li><a href="{{ url('/single-sermon') }}#">Depression</a> (13)</li>
                                <li><a href="{{ url('/single-sermon') }}#">Storms</a> (23)</li>
                                <li><a href="{{ url('/single-sermon') }}#">Anxiety</a> (65)</li>
                            </ul>
                        </div>
                        <div class="widget sidebar-widget">
                            <h3 class="widgettitle">Sermon Tags</h3>
                            <div class="tag-cloud">
                                <a href="{{ url('/single-sermon') }}#">Baptism</a>
                                <a href="{{ url('/single-sermon') }}#">Faith</a>
                                <a href="{{ url('/single-sermon') }}#">Love</a>
                                <a href="{{ url('/single-sermon') }}#">Storms</a>
                                <a href="{{ url('/single-sermon') }}#">Anxiety</a>
                                <a href="{{ url('/single-sermon') }}#">Life</a>
                            </div>
                        </div>
                        <div class="widget sidebar-widget widget_sermon_speakers">
                            <h3 class="widgettitle">Sermon Speakers</h3>
                            <ul>
                                <li>
                                    <img src="{{ asset('files/images/speaker1.jpg') }}" alt="" width="100" height="100">
                                    <h5>Elizabeth Hart</h5>
                                    <span class="meta-data">Event Speaker</span>
                                </li>
                                <li>
                                    <img src="{{ asset('files/images/speaker3.jpg') }}" alt="" width="100" height="100">
                                    <h5>Ethan Walker</h5>
                                    <span class="meta-data">Men's Ministries</span>
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