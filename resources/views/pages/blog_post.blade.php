@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Blog</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Blog Post</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <article class="single-post format-standard">
                            <div class="title-row">
                                <a href="{{ url('/blog-post') }}#comments" class="comments-go" title="10 comments"><i class="icon-dialogue-text"></i></a>
                                <h2>Standard Post Format</h2>
                            </div>
                            <div class="meta-data">
                                <span><i class="fa fa-calendar"></i> Sep 20, 2014 by <a href="{{ url('/blog-post') }}#">imithemes</a></span>
                                <span><i class="fa fa-archive"></i> <a href="{{ url('/blog-post') }}#">General</a>, <a href="{{ url('/blog-post') }}#">Uncategorized</a></span>
                            </div>
                            <div class="post-media">
                                <a href="{{ url('/blog-post') }}" class="media-box"><img src="{{ asset('files/images/slide1.jpg')}}" alt="" class="post-thumb"></a>
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.

                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                            </div>
                            <div class="meta-data post-tags"><i class="fa fa-tags"></i> <a href="{{ url('/blog-post') }}#">Baptism</a>, <a href="{{ url('/blog-post') }}#">Featured</a></div>
                            <div class="social-share-bar">
                                <h4><i class="fa fa-share-alt"></i> Share</h4>
                                <ul class="social-icons-colored">
                                    <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li class="vimeo"><a href="https://www.vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </article>
                        <!-- Post Comments -->
                        <section class="post-comments" id="comments">
                            <h4 class="title">Comments (4)</h4>
                            <ol class="comments">
                                <li>
                                    <div class="post-comment-block">
                                        <div class="img-thumbnail"> <img src="{{ asset('files/images/img_avatar.png')}}" alt="avatar"> </div>
                                        <a href="{{ url('/blog-post') }}#" class=" pull-right" title="Reply to comment"><i class="fa fa-reply"></i></a>
                                        <h5>John Doe says</h5>
                                        <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                        <div class="comment-text">
                                            <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-comment-block">
                                        <div class="img-thumbnail"> <img src="{{ asset('files/images/img_avatar.png')}}" alt="avatar"> </div>
                                        <a href="{{ url('/blog-post') }}#" class=" pull-right" title="Reply to comment"><i class="fa fa-reply"></i></a>
                                        <h5>John Doe says</h5>
                                        <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                        <div class="comment-text">
                                            <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo.</p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="post-comment-block">
                                                <div class="img-thumbnail"> <img src="{{ asset('files/images/img_avatar.png')}}" alt="avatar"> </div>
                                                <a href="{{ url('/blog-post') }}#" class=" pull-right" title="Reply to comment"><i class="fa fa-reply"></i></a>
                                                <h5>John Doe says</h5>
                                                <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                                <div class="comment-text">
                                                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-comment-block">
                                                <div class="img-thumbnail"> <img src="{{ asset('files/images/img_avatar.png')}}" alt="avatar"> </div>
                                                <a href="{{ url('/blog-post') }}#" class=" pull-right" title="Reply to comment"><i class="fa fa-reply"></i></a>
                                                <h5>John Doe says</h5>
                                                <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                                <div class="comment-text">
                                                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="post-comment-block">
                                        <div class="img-thumbnail"> <img src="{{ asset('files/images/img_avatar.png')}}" alt="avatar"> </div>
                                        <a href="{{ url('/blog-post') }}#" class=" pull-right" title="Reply to comment"><i class="fa fa-reply"></i></a>
                                        <h5>John Doe says</h5>
                                        <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                        <div class="comment-text">
                                            <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </section>
                        <section class="post-comment-form">
                            <h4 class="title">Post a comment</h4>
                            <form>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control" placeholder="Your name">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="email" class="form-control" placeholder="Your email">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="url" class="form-control" placeholder="Website (optional)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <textarea cols="8" rows="4" class="form-control" placeholder="Your comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-lg">Submit your comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
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
                                <li><a href="{{ url('/blog-post') }}#">Featured</a> (9)</li>
                                <li><a href="{{ url('/blog-post') }}#">General</a> (24)</li>
                                <li><a href="{{ url('/blog-post') }}#">Events</a> (13)</li>
                                <li><a href="{{ url('/blog-post') }}#">Videos</a> (23)</li>
                                <li><a href="{{ url('/blog-post') }}#">Unity</a> (65)</li>
                            </ul>
                        </div>
                        <div class="widget sidebar-widget">
                            <h3 class="widgettitle">Post Tags</h3>
                            <div class="tag-cloud">
                                <a href="{{ url('/blog-post') }}#">Baptism</a>
                                <a href="{{ url('/blog-post') }}#">Faith</a>
                                <a href="{{ url('/blog-post') }}#">Love</a>
                                <a href="{{ url('/blog-post') }}#">Storms</a>
                                <a href="{{ url('/blog-post') }}#">Anxiety</a>
                                <a href="{{ url('/blog-post') }}#">Life</a>
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
                                            <h4><a href="{{ url('/blog-post') }}#">Water Baptism</a></h4>
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
                                            <h4><a href="{{ url('/blog-post') }}#">Sunday Meet Up</a></h4>
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