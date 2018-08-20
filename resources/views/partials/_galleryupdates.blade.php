<div class="gallery-updates cols5 clearfix">
    <ul>
        <li class="format-image"><a href="{{ asset('files/images/medium.png') }}" data-rel="prettyPhoto" class="media-box">
                <img src="{{ asset('files/images/medium.png') }}" alt=""></a></li>
        <li class="format-standard">
            <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="yes" data-arrows="no" data-style="slide" data-pause="yes">
                <ul class="slides">
                    <li class="item"><a href="{{ asset('files/images/medium.png') }}" data-rel="prettyPhoto[postname1]"
                        ><img src="{{ asset('files/images/medium.png') }}" alt=""></a></li>
                    <li class="item"><a href="{{ asset('files/images/medium1.png') }}" data-rel="prettyPhoto[postname1]">
                            <img src="{{ asset('files/images/medium2.png') }}" alt=""></a></li>
                </ul>
            </div>
        </li>
        <li class="format-image"><a href="{{ asset('files/images/smallpic.png') }}" data-rel="prettyPhoto" class="media-box">
                <img src="{{ asset('files/images/smallpic.png') }}" alt=""></a></li>
        <li class="format-standard">
            <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="yes" data-arrows="no" data-style="fade" data-speed="4000" data-pause="yes">
                <ul class="slides">
                    <li class="item"><a href="{{ asset('files/images/medium1.png') }}" data-rel="prettyPhoto[postname2]">
                            <img src="{{ asset('files/images/medium1.png') }}" alt=""></a></li>
                    <li class="item"><a href="{{ asset('files/images/medium.png') }}" data-rel="prettyPhoto[postname2]">
                            <img src="{{ asset('files/images/medium2.png') }}" alt=""></a></li>
                </ul>
            </div>
        </li>
        <li class="item"><a href="{{ asset('files/images/medium.png') }}" data-rel="prettyPhoto[postname2]">
                <img src="{{ asset('files/images/medium2.png') }}" alt=""></a></li>
        {{--<li class="format-video"><a href="http://vimeo.com/37540860" data-rel="prettyPhoto" class="media-box">--}}
                {{--<img src="{{ asset('files/images/gallery_img4.jpg') }}" alt=""></a></li>--}}
    </ul>
    <div class="gallery-updates-overlay">
        <div class="container">
            <i class="icon-multiple-image"></i>
            <h2>Updates from our gallery</h2>
        </div>
    </div>
</div>