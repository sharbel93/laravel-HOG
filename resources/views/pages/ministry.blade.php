@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('files/images/slide7.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Ministries</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Ministries</li>
            </ol>
        </div>
    </div>

    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <h2>Get to know about Our Ministries</h2>
                    <hr class="sm">
                </div>
                <div class="row">
                    <div class="col-md-7">

                        <h4>Men Ministry</h4>
                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="fw-video">

                            <img  src="{{ asset('files/images/men.png') }}" alt="">
                         </div>
                    </div>
                </div>
                <div class="spacer-50"></div>
                <div class="row">
                    <div class="col-md-7">
                        <h4>Women Ministry</h4>
                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="fw-video">
                            <img class="alignright" src="{{ asset('files/images/hospitality.png') }}" alt="">
                            </div>
                    </div>
                </div>
                <div class="spacer-50"></div>
                <div class="row">
                    <div class="col-md-7">
                        <h4>Youth Ministry</h4>
                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="fw-video">
                            <img class="alignright" src="{{ asset('files/images/youth.png') }}" alt="">
                          </div>
                    </div>
                </div>
                <div class="spacer-50"></div>
                <div class="row">
                    <div class="col-md-7">
                        <h4>Children Ministry</h4>
                       <p>
                           This is one most exciting department in our church. Children are a joy to us as a church and having a church for them is a privilege to us. This ministry has seen growth and currently we have over 350 children under our care, and over 50 teenagers. The number however increases with the closure of schools when many kids are at home and able to come to church. We engage the children on a one weekly program during every holiday dubbed Vocational Bible School.
                           We thank God that parents have entrusted to us their children. We have loving, tender and God fearing teachers who have taken up the burden of teaching these young champions in the making.
                           There are two services that run concurrently with our main services as parents drop their kids on their way to main church. These are 9:00 am and 11:30 am Kenyan time. Kids ages are from as from 3yrs to 19yrs and the classes cluster them appropriately with the age groups. This makes it easier in the running and teaching as well.
                           With the church having many young parents, we look forward to more children being brought to our services as well as many graduating to teen’s church.

                       </p>
                           </div>
                    <div class="col-md-5">
                        <div class="fw-video">
                            <img class="alignright" src="{{ asset('files/images/children.png') }}" alt="">
                           </div>
                    </div>
                </div>
                <div class="spacer-50"></div>

                <!-- Expand ministries from the commented rows Below -->

                {{--<div class="row">--}}
                    {{--<div class="col-md-7">--}}
                        {{--<h4>Aenean vulputate eleifend tellus</h4>--}}
                        {{--<p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5">--}}
                        {{--<div class="fw-video">--}}
                            {{--<iframe src="https://player.vimeo.com/video/84103278?title=0&amp;byline=0&amp;color=9bc8ce" width="500" height="281"></iframe>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="spacer-50"></div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-7">--}}
                        {{--<h4>Aenean vulputate eleifend tellus</h4>--}}
                        {{--<p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5">--}}
                        {{--<div class="fw-video">--}}
                            {{--<iframe src="https://player.vimeo.com/video/84103278?title=0&amp;byline=0&amp;color=9bc8ce" width="500" height="281"></iframe>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="spacer-50"></div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-7">--}}
                        {{--<h4>Aenean vulputate eleifend tellus</h4>--}}
                        {{--<p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5">--}}
                        {{--<div class="fw-video">--}}
                            {{--<iframe src="https://player.vimeo.com/video/84103278?title=0&amp;byline=0&amp;color=9bc8ce" width="500" height="281"></iframe>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="spacer-50"></div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-7">--}}
                        {{--<h4>Aenean vulputate eleifend tellus</h4>--}}
                        {{--<p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5">--}}
                        {{--<div class="fw-video">--}}
                            {{--<iframe src="https://player.vimeo.com/video/84103278?title=0&amp;byline=0&amp;color=9bc8ce" width="500" height="281"></iframe>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <!-- End Body Content -->
@endsection