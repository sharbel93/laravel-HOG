@extends('layouts.app')
@section('content')

    <!-- Start Hero Slider -->
    @include('partials._slider')
    <!-- End Hero Slider -->
    <!-- Lead Content -->
    @include('partials._leadcontent')
    <!-- Start Body Content -->
    @include('partials._mainbody')
    <!-- End Body Content -->
    <!-- Gallery updates -->
    @include('partials._galleryupdates')

    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
@endsection