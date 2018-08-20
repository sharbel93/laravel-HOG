@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('files/images/slide7.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Departments</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Departments</li>
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
                       
                        <h4>Praise &amp; Worship Department</h4>
                    <p>
                        The worship ministry is one of the main pillars in HOG Rongai church. Currently, it comprises of one main team that plays both roles as a worship team and church choir. It also has a full band. Currently led by full time Pastor Charles J. Muiruri, all the members are young people who are either students or working in various professionals.
                        It is a dynamic team that thrives on loyalty, prayer, welfare for each other and excellence in musical skills. The team leads the church in powerful dynamic praises and worship and leads all into the presence of our Lord Jesus. It is a team that engages the church with a mix of both modern and traditional styles and songs of praise and worship.
                        The team is in charge of the singing ministry in all Sunday services, Women of Excellence meetings, all week meetings and conferences that the church may engage itself in.
                        With more people joining, the team is set to grow in numbers and ministry impact. Those who feel called to this ministry are free to join us, to grow and serve our Lord Jesus Christ.
                    </p>
                    </div>
                    <div class="col-md-5">
                        <div class="fw-video">
                            <img  src="{{ asset('files/images/worship.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="spacer-50"></div>
                <div class="row">
                    <div class="col-md-7">
                        <h4>Protocol Department</h4>
                        <p>
                            Protocol department is basically about order and security. In our line of duty/service we;
                            We keep our eyes open and ensure participants are at peace and comfortable whenever there is a church gathering.
                            We ensure church meetings start in time and people are screened for security reasons.
                            Ensure cars are securely and orderly parked within the church compound
                            We watch over church equipment and facilities.
                            We work towards ensuring visiting ministers as well as other guests are safe within our environment.
                            Protocol team is made up of dedicated men and women some of whom are professionally security personnel, others are well trained in management and handling of automobiles.
                            Our vision is “Working towards a secure and orderly church environment thus facilitating the smooth delivery of the ministry God has put in the man of God”.
                            To ensure delivery of quality service as a department we take time to build our spiritual lives through prayer and study of God’s word. Our desire is to equip members both spiritually and with appropriate skills to deliver our service in excellence
                        </p>
                          </div>
                    <div class="col-md-5">
                        <div class="fw-video">
                            <img  src="{{ asset('files/images/protocal.png') }}" alt="">
                           </div>
                    </div>
                </div>
                <div class="spacer-50"></div>
                <div class="row">
                    <div class="col-md-7">
                        <h4>Ushering Department</h4>
                        <p>
                            Proverbs 8:34
                            ‘Blessed is the Man that heareth me, watching daily at my Gates, Waiting at the posts of my doors”
                            We as the ushering department are given to create a conducive environment for worship. In so doing we,

                            •Prepare for the arrival of worshippers by making the sanctuary neat and well arranged
                            •Serving in any capacity as deemed necessary by the Pastor for the smooth and orderly flow of the worship service.
                            •Meeting & greeting the congregation:- we are public relations representing the church to every new visitor
                            •Maintaining order
                            •Taking attendance
                            •Receiving offering.
                            •Provision of required information to the congregation.
                        </p>
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
                        <h4>Media Department</h4>
                       <p>
                           Our vision as a church is reaching out to the lost through our witness and as the media department we use our gifts and talents to spread the word of God. We are a vibrant department and dedicated to capture moments and show the world the experience our members have in church. We are involved in:
                           •Managing our social media sites
                           •Production- video and audio
                           •Missions coverage
                           •Weekly news update
                           •Church branding
                           •Distribution of messages
                           •Photography

                       </p>
                         </div>
                    <div class="col-md-5">
                        <div class="fw-video">
                            <img  src="{{ asset('files/images/men.png') }}" alt=""> </div>
                    </div>
                </div>
                <div class="spacer-50"></div>

                <!-- Expand Departments from the commented rows Below -->

                <div class="row">
                <div class="col-md-7">
                <h4>Hospitality Department</h4>
                <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                </div>
                <div class="col-md-5">
                <div class="fw-video">
                    <img  src="{{ asset('files/images/hospitality.png') }}" alt=""> </div>
                </div>
                </div>
                <div class="spacer-50"></div>
                <div class="row">
                <div class="col-md-7">
                <h4>Greeters Department</h4>
                <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                </div>
                <div class="col-md-5">
                <div class="fw-video">
                    <img  src="{{ asset('files/images/men.png') }}" alt="">  </div>
                </div>
                </div>
                <div class="spacer-50"></div>
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