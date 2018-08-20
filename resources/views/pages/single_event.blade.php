@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix">
        <div class="page-header-overlay" style="background-image:url({{ asset('files/images/event.jpg') }});"></div>
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>06 feb, 2015</h2>
                <div class="header-event-time">From 11 AM to 4 PM</div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/event') }}">Events</a></li>
                <li class="active">Holy shift: Strategic think</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="single-event-content event-list-item event-dynamic">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <h2 class="event-title">Holy shift: Strategic think</h2>
                            <span class="event-date hidden">06 feb, 2015</span>
                            <span class="hidden">From <span class="event-time">11 AM</span> to 4 PM</span>
                            <span class="meta-data event-location-address"><i class="fa fa-map-marker"></i> 123 Broadway, New York, NY</span>
                            <hr class="sm">
                            <a href="{{ url('/single-event') }}" class="event-title hidden"></a>
                            <ul class="list-group">
                                <li class="list-group-item"> <span class="badge">1800.785.876</span> Call </li>
                                <li class="list-group-item">
                                    <ul class="action-buttons">
                                        <li title="Share event"><a href="{{ url('/single-event') }}#" data-trigger="focus" data-placement="top" data-content="" data-toggle="popover" data-original-title="Share Event" class="event-share-link"><i class="icon-share"></i></a></li>
                                        <li title="Get directions" class="hidden-xs"><a href="{{ url('/single-event') }}#" class="cover-overlay-trigger"><i class="icon-compass"></i></a></li>
                                        <li title="Contact event manager"><a href="{{ url('/single-event') }}#" data-toggle="modal" data-target="#Econtact" class="event-contact-link"><i class="icon-mail"></i></a></li>
                                        <li title="Contact event manager"><a href="javascript:window.print()"><i class="icon-printer"></i></a></li>
                                    </ul></li>
                            </ul>
                            <a href="{{ url('/single-event') }}#" class="btn btn-primary btn-block btn-lg  event-tickets event-register-button">Book Tickets</a>
                        </div>
                        <div class="col-md-9 col-sm-8">
                            <div class="event-details">
                                <div class="event-details-left">
                                    <img src="{{ asset('files/images/event_img4.jpg') }}" alt="" class="temp-thumbnail">
                                    <div class="clearfix"></div>
                                    <div class="col-md-12">
                                        <p><strong>Nulla consequat massa quis enim.</strong> Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
                                    </div>
                                </div>
                                <div class="event-details-right">
                                    <h3 class="heading-wbg">The Schedule</h3>
                                    <div class="event-schedule">
                                        <div class="timeline"></div>
                                        <div class="event-prog">
                                            <span class="timeline-stone"></span>
                                            <div class="event-prog-content">
                                                <div class="event-pro-tag label-warning" data-appear-animation="fadeInRight"><i class="icon icon-coffee"></i></div>
                                                <strong><i class="fa fa-clock-o"></i> 11:00 - 11:30</strong>
                                                <span>Tea time</span>
                                            </div>
                                        </div>
                                        <div class="event-prog">
                                            <span class="timeline-stone"></span>
                                            <div class="event-prog-content">
                                                <strong><i class="fa fa-clock-o"></i> 11:30 - 12:00</strong>
                                                <span>Welcome</span>
                                            </div>
                                        </div>
                                        <div class="event-prog">
                                            <span class="timeline-stone"></span>
                                            <div class="event-prog-content">
                                                <strong><i class="fa fa-clock-o"></i> 12:00 - 12:30</strong>
                                                <span>Speech by our lead organizer</span>
                                            </div>
                                        </div>
                                        <div class="event-prog">
                                            <span class="timeline-stone"></span>
                                            <div class="event-prog-content">
                                                <strong><i class="fa fa-clock-o"></i> 12:30 - 02:00</strong>
                                                <span>Thinking message by Jishua</span>
                                            </div>
                                        </div>
                                        <div class="event-prog">
                                            <span class="timeline-stone"></span>
                                            <div class="event-prog-content">
                                                <div class="event-pro-tag label-info" data-appear-animation="fadeInRight"><i class="icon icon-dish-fork"></i></div>
                                                <strong><i class="fa fa-clock-o"></i> 02:00 - 03:00</strong>
                                                <span>Lunch time</span>
                                            </div>
                                        </div>
                                        <div class="event-prog">
                                            <span class="timeline-stone"></span>
                                            <div class="event-prog-content">
                                                <strong><i class="fa fa-clock-o"></i> 03:00 - 04:00</strong>
                                                <span>Closing lesson by Philipino</span>
                                            </div>
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

        <!-- Start site footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-top">
                    <div class="row">
                        <div class="col-md-4 widget footer_widget text_widget">
                            <h4>About our church</h4>
                            <hr class="sm">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra.</p>
                        </div>
                        <div class="col-md-4 widget footer_widget twitter_widget">
                            <h4>Twitter feeds</h4>
                            <hr class="sm">
                            <ul class="twitter-widget"></ul>
                        </div>
                        <div class="col-md-4 widget footer_widget newsletter_widget">
                            <h4>News subscription</h4>
                            <hr class="sm">
                            <p>Subscribe to our newsletter in order to receive the latest new &amp; articles. We promise we won't spam your inbox!</p>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <!-- Quick Info -->
                    <div class="quick-info">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <h4><i class="fa fa-clock-o"></i> Service Times</h4>
                                <p>Sundays @ 10:00 am<br>Starting October 1</p>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h4><i class="fa fa-map-marker"></i> Our Location</h4>
                                <p>777, Path to God<br>United States of America</p>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h4><i class="fa fa-envelope"></i> Contact Info</h4>
                                <p>11 - 00 - 653240<br>email@adorechurch.com</p>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h4><i class="fa fa-clock-o"></i> Socialize with us</h4>
                                <ul class="social-icons-colored inversed">
                                    <li class="facebook"><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li class="vimeo"><a href="http://www.vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li class="twitter"><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer-bottom">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 copyrights-coll">
                                &copy; 2014 Adore Church. All Rights Reserved
                            </div>
                            <div class="col-md-6 col-sm-6 copyrights-colr">
                                <nav class="footer-nav" role="navigation">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/donate') }}">Donate now</a></li>
                                        <li><a href="{{ url('/new-here') }}">New here?</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End site footer -->
        <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Event Directions Popup -->
    <div class="quick-info-overlay">
        <div class="quick-info-overlay-left accent-bg">
            <a href="{{ url('/single-event') }}#" class="btn-close"><i class="icon-delete"></i></a>
            <div class="event-info">
                <h3 class="event-title"></h3>
                <div class="event-address"></div>
                <a href="{{ url('/single-event') }}" class="btn btn-default btn-transparent btn-permalink">Full details</a>
            </div>
        </div>
        <div class="quick-info-overlay-right">
            <div id="event-directions"></div>
        </div>
    </div>
    <!-- Event Contact Modal Window -->
    <div class="modal fade" id="Econtact" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="Econtact" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Contact Event Manager <span class="accent-color"></span></h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="fname" class="form-control" placeholder="First name (Required)">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lname" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Your email (Required)">
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="phone" class="form-control" placeholder="Your phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea rows="3" cols="5" class="form-control" placeholder="Additional notes"></textarea>
                            </div>
                        </div>
                        <input type="submit" name="donate" class="btn btn-primary btn-lg btn-block" value="Contact Now">
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="small short">If you would prefer to call in for inquiries, please call 1800.785.876</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Register Tickets -->
    <div class="ticket-booking-wrapper">
        <a href="{{ url('/single-event') }}#" class="ticket-booking-close label-danger"><i class="icon icon-delete"></i></a>
        <div class="ticket-booking">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3><strong>Book your</strong> <span>tickets</span></h3>
                    </div>
                    <div class="col-md-9">
                        <div class="event-ticket ticket-form">
                            <div class="event-ticket-left">
                                <div class="ticket-handle"></div>
                                <div class="ticket-cuts ticket-cuts-top"></div>
                                <div class="ticket-cuts ticket-cuts-bottom"></div>
                            </div>
                            <div class="event-ticket-right">
                                <div class="event-ticket-right-inner">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9">
                                            <span class="meta-data">Your ticket for</span>
                                            <h4 id="dy-event-title"></h4>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <span class="meta-data">Tickets count</span>
                                            <select class="form-control input-sm">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="event-ticket-info">
                                        <div class="row">
                                            <div class="col">
                                                <p class="ticket-col" id="dy-event-date"></p>
                                            </div>
                                            <div class="col">
                                                <a href="{{ url('/single-event') }}#" class="btn btn-warning btn btn-block ticket-col">Book</a>
                                            </div>
                                            <div class="col">
                                                <p id="dy-event-time">Starts </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="event-location" id="dy-event-location"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection