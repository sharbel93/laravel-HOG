@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('files/images/slide7.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>I'm New Here</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">New Here</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Get to know about House Of Grace Church, Eldoret</h2>
                        <hr class="sm">
                        <h4>Welcome to House of Grace Church Eldoret</h4>
                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="fw-video">
                            <img  src="{{ asset('files/images/men.png') }}" alt="">
                            {{--<iframe src="https://player.vimeo.com/video/84103278?title=0&amp;byline=0&amp;color=9bc8ce" width="500" height="281"></iframe>--}}
                        </div>
                    </div>
                </div>
                <div class="spacer-50"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3>Sunday Gatherings</h3>
                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                        <h3>Time &amp; Location</h3>
                        <p>Our Sunday morning services are at 9 and 11am. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10734.780918233124!2d-122.17319399999998!3d47.729164000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54900dbffbaf6e79%3A0x9227e8ea0f0a8f30!2sNE+142nd+Ln%2C+Kirkland%2C+WA+98034!5e0!3m2!1sen!2s!4v1411050755339" width="100%" height="auto" style="border:0"></iframe>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3>Our Weekly Service Programs</h3>
                        <!-- Start Accordion -->
                        <div class="accordion" id="accordionArea">
                            <div class="accordion-group panel">
                                <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="{{ url('/new-here')}}#oneArea"> Sunday Service<i class="fa fa-angle-down"></i> </a> </div>
                                <div id="oneArea" class="accordion-body collapse">
                                    <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui.</div>
                                </div>
                            </div>
                            <div class="accordion-group panel">
                                <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="{{ url('/new-here')}}#twoArea"> Wednesday Service<i class="fa fa-angle-down"></i> </a> </div>
                                <div id="twoArea" class="accordion-body collapse">
                                    <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui.</div>
                                </div>
                            </div>
                            <div class="accordion-group panel">
                                <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="{{ url('/new-here')}}#threeArea"> Thursday Grace Group <i class="fa fa-angle-down"></i> </a> </div>
                                <div id="threeArea" class="accordion-body collapse">
                                    <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui.</div>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion -->
                        <h3>What to expect</h3>
                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                        <h3>Get connected</h3>
                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@endsection