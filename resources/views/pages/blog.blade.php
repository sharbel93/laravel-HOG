@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix" style="background-color:#333">
        <div class="page-header-overlay" style="background-image:url({{ asset('files/images/ph4.jpg') }});"></div>
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Standard Blog</h2>
                <hr class="sm">
                <span class="subtitle">Way to show what is going on in our church</span>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Blog</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="posts-listing">
                            <article class="post-list-item format-standard">
                                <div class="post-media">
                                    <a href="{{ url('/blog-post') }}" class="media-box"><img src="{{ asset('files/images/slide1.jpg') }}" alt="" class="post-thumb"></a>
                                </div>
                                <div class="post-excerpt">
                                    <span class="meta-data"><i class="fa fa-calendar"></i> Sep 20, 2014 by <a href="#">imithemes</a></span>
                                    <h3 class="post-title"><a href="{{ url('/blog-post') }}">Standard Post Format</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel...</p>
                                    <span class="meta-data post-cats"><a href="#">General</a> | <a href="#">Featured</a><a href="#">2 <i class="fa fa-comments"></i></a></span>
                                    <a href="{{ url('/blog-post') }}" class="basic-link">Continue reading</a>
                                </div>
                            </article>
                            <article class="post-list-item format-audio">
                                <div class="post-media">
                                    <audio class="audio-player" src="{{ asset('files/media/Miaow-02-Hidden.mp3') }}" type="audio/mp3" controls></audio>
                                </div>
                                <div class="post-excerpt">
                                    <span class="meta-data"><i class="fa fa-calendar"></i> Sep 20, 2014 by <a href="#">imithemes</a></span>
                                    <h3 class="post-title"><a href="{{ url('/blog-post') }}">Self hosted audio post example</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel...</p>
                                    <span class="meta-data post-cats"><a href="#">General</a> | <a href="#">Featured</a><a href="#">2 <i class="fa fa-comments"></i></a></span>
                                    <a href="{{ url('/blog-post') }}" class="basic-link">Continue reading</a>
                                </div>
                            </article>
                            <article class="post-list-item format-gallery">
                                <div class="post-media">
                                    <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="slide" data-pause="yes">
                                        <ul class="slides">
                                            <li class="item"><img src="{{ asset('files/images/slide2.jpg') }}" alt=""></li>
                                            <li class="item"><img src="{{ asset('files/images/slide1.jpg"') }}" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-excerpt">
                                    <span class="meta-data">Sep 20, 2014 by <a href="#">imithemes</a></span>
                                    <h3 class="post-title"><a href="{{ url('/blog-post') }}">Gallery Post Format</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel...</p>
                                    <span class="meta-data post-cats"><a href="#">General</a> | <a href="#">Featured</a><a href="#">2 <i class="fa fa-comments"></i></a></span>
                                    <a href="{{ url('/blog-post') }}" class="basic-link">Continue reading</a>
                                </div>
                            </article>
                            <article class="post-list-item format-audio">
                                <div class="post-media">
                                    <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/21136687&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                                </div>
                                <div class="post-excerpt">
                                    <span class="meta-data">Sep 20, 2014 by <a href="#">imithemes</a></span>
                                    <h3 class="post-title"><a href="{{ url('/blog-post') }}">Soundcloud audio post</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel...</p>
                                    <span class="meta-data post-cats"><a href="#">General</a> | <a href="#">Featured</a><a href="#">2 <i class="fa fa-comments"></i></a></span>
                                    <a href="{{ url('/blog-post') }}" class="basic-link">Continue reading</a>
                                </div>
                            </article>
                            <article class="post-list-item format-video">
                                <div class="post-media">
                                    <object width="560" height="315"><param name="movie" value="https://www.youtube.com/v/gjOzmz4KYho?hl=en_GB&amp;version=3&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="{{ asset('files/') }}https://www.youtube.com/v/gjOzmz4KYho?hl=en_GB&amp;version=3&amp;rel=0" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
                                </div>
                                <div class="post-excerpt">
                                    <span class="meta-data">Sep 20, 2014 by <a href="#">imithemes</a></span>
                                    <h3 class="post-title"><a href="{{ url('/blog-post') }}">A Youtube video post</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel...</p>
                                    <span class="meta-data post-cats"><a href="#">General</a> | <a href="#">Featured</a><a href="#">2 <i class="fa fa-comments"></i></a></span>
                                    <a href="{{ url('/blog-post') }}" class="basic-link">Continue reading</a>
                                </div>
                            </article>
                            <article class="post-list-item format-video">
                                <div class="post-media">
                                    <video width="640" height="360" id="player2" poster="{{ asset('files/media/echo-hereweare.jpg') }}" class="video-player" controls preload="none">
                                        <!-- MP4 source must come first for iOS -->
                                        <source type="video/mp4" src="{{ asset('files/media/echo-hereweare.mp4') }}" />
                                        <!-- WebM for Firefox 4 and Opera -->
                                        <source type="video/webm" src="{{ asset('files/media/echo-hereweare.webm') }}" />
                                        <!-- OGG for Firefox 3 -->
                                        <source type="video/ogg" src="{{ asset('files/media/echo-hereweare.ogv') }}" />
                                        <!-- Fallback flash player for no-HTML5 browsers with JavaScript turned off -->
                                        <object width="640" height="360" type="application/x-shockwave-flash" data="{{ asset('files/vendor/mediaelement/flashmediaelement.swf') }}">
                                            <param name="movie" value="{{ asset('files/vendor/mediaelement/flashmediaelement.swf') }}" />
                                            <param name="flashvars" value="controls=true&amp;file={{ asset('files/media/echo-hereweare.mp4') }}" />
                                            <!-- Image fall back for non-HTML5 browser with JavaScript turned off and no Flash player installed -->
                                            <img src="{{ asset('files/media/echo-hereweare.jpg') }}" width="640" height="360" alt="Here we are"
                                                 title="No video playback capabilities" />
                                        </object>
                                    </video>
                                </div>
                                <div class="post-excerpt">
                                    <span class="meta-data">Sep 20, 2014 by <a href="#">imithemes</a></span>
                                    <h3 class="post-title"><a href="{{ url('/blog-post') }}">Self Hosted video post example</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel...</p>
                                    <span class="meta-data post-cats"><a href="#">General</a> | <a href="#">Featured</a><a href="#">2 <i class="fa fa-comments"></i></a></span>
                                    <a href="{{ url('/blog-post') }}" class="basic-link">Continue reading</a>
                                </div>
                            </article>
                            <article class="post-list-item format-video">
                                <div class="post-media">
                                    <iframe src="https://player.vimeo.com/video/37540860?title=0&amp;byline=0&amp;portrait=0" width="500" height="281"></iframe>
                                </div>
                                <div class="post-excerpt">
                                    <span class="meta-data">Sep 20, 2014 by <a href="#">imithemes</a></span>
                                    <h3 class="post-title"><a href="{{ url('/blog-post') }}">A Vimeo video post</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel...</p>
                                    <span class="meta-data post-cats"><a href="#">General</a> | <a href="#">Featured</a><a href="#">2 <i class="fa fa-comments"></i></a></span>
                                    <a href="{{ url('/blog-post') }}" class="basic-link">Continue reading</a>
                                </div>
                            </article>
                        </div>
                        <!-- Pagination -->
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="widget sidebar-widget search-form-widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts...">
                                <span class="input-group-btn">
                            		<button class="btn btn-primary" type="button"><i class="fa fa-search fa-lg"></i></button>
                            	</span>
                            </div>
                        </div>
                        <div class="widget sidebar-widget widget_categories">
                            <h3 class="widgettitle">Post Categories</h3>
                            <ul>
                                <li><a href="#">Featured</a> (9)</li>
                                <li><a href="#">General</a> (24)</li>
                                <li><a href="#">Events</a> (13)</li>
                                <li><a href="#">Videos</a> (23)</li>
                                <li><a href="#">Unity</a> (65)</li>
                            </ul>
                        </div>
                        <div class="widget sidebar-widget">
                            <h3 class="widgettitle">Post Tags</h3>
                            <div class="tag-cloud">
                                <a href="#">Baptism</a>
                                <a href="#">Faith</a>
                                <a href="#">Love</a>
                                <a href="#">Storms</a>
                                <a href="#">Anxiety</a>
                                <a href="#">Life</a>
                            </div>
                        </div>
                        <div class="widget sidebar-widget upcoming_events_widget">
                            <h3 class="widgettitle">Upcoming Events</h3>
                            <div class="events-listing-content smaller-cont">
                                <div class="event-list-item">
                                    <div class="event-list-item-date">
                                    	<span class="event-date">
                                        	<span class="event-day">22</span>
                                        	<span class="event-month">Sep, 14</span>
                                        </span>
                                    </div>
                                    <div class="event-list-item-info">
                                        <div class="lined-info event-title">
                                            <h4><a href="#">Water Baptism</a></h4>
                                        </div>
                                        <span class="meta-data"><i class="fa fa-clock-o"></i> Monday, 10:00 AM</span>
                                        <span class="meta-data"><i class="fa fa-map-marker"></i> State Route, Madison US</span>
                                    </div>
                                </div>
                                <div class="event-list-item">
                                    <div class="event-list-item-date">
                                    	<span class="event-date">
                                        	<span class="event-day">27</span>
                                        	<span class="event-month">Sep, 14</span>
                                        </span>
                                    </div>
                                    <div class="event-list-item-info">
                                        <div class="lined-info event-title">
                                            <h4><a href="#">Sunday Meet Up</a></h4>
                                        </div>
                                        <span class="meta-data"><i class="fa fa-clock-o"></i> Sunday, 05:00 PM</span>
                                        <span class="meta-data"><i class="fa fa-map-marker"></i> <span class="event-location-address">55 Warren Street, New York</span></span>
                                    </div>
                                </div>
                                <div class="event-list-item">
                                    <div class="event-list-item-date">
                                    	<span class="event-date">
                                        	<span class="event-day">06</span>
                                        	<span class="event-month">Feb, 15</span>
                                        </span>
                                    </div>
                                    <div class="event-list-item-info">
                                        <div class="lined-info event-title">
                                            <h4><a href="http://www.google.com">Holy shift: Strategic think</a></h4>
                                        </div>
                                        <span class="meta-data"><i class="fa fa-clock-o"></i> Monday, 10:00 AM</span>
                                        <span class="meta-data"><i class="fa fa-map-marker"></i> <span class="event-location-address">123 Broadway, New York, NY</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@endsection
