@extends('layouts.app')
@section('content')
    <!-- Start Page Header -->
    <div class="page-header parallax clearfix" style="background-image:url({{ asset('files/images/slide5.jpg') }});">
        <div class="title-subtitle-holder">
            <div class="title-subtitle-holder-inner">
                <h2>Donate</h2>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Breadcrumbs -->
    <div class="lgray-bg breadcrumb-cont">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Donate Now</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Here is how you can donate to our church</h2>
                        <hr class="sm">
                        <h4>Aenean vulputate eleifend tellus</h4>
                        <p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                        <h3>H3 heading style</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        <h4>H4 heading style</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </blockquote>
                    </div>
                    <div class="col-md-4">
                        <div class="widget sidebar-widget donate_form_widget">
                            <h3 class="widgettitle">Donate Now</h3>
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>How much would you like to donate?</label>
                                        <div class="input-group margin-20">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" name="fname" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="fname" class="form-control" placeholder="First name*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="lname" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Your email*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" name="phone" class="form-control" placeholder="Your phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea rows="3" cols="5" class="form-control" placeholder="Your Address"></textarea>
                                    </div>
                                </div>
                                <input type="submit" name="donate" class="btn btn-primary btn-lg btn-block" value="Donate Now">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@endsection
