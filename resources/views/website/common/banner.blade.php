<?php
    $sliders = \App\Slider::getSliders();
?>
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE -->
            @foreach($sliders as $k => $slider)
                <?php
                    $image = get_image_from_field($slider,'image');
                ?>
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000"	data-title="Slide 1">
                <!-- MAIN IMAGE -->
                <img src="{{ Voyager::image($image) }}"
                     alt="darkblurbg"
                     data-bgfit="cover"
                     data-bgposition="left top"
                     data-bgrepeat="no-repeat">

                @if($slider->name != null)
                <div class="tp-caption revolution-ch1 sft start"
                     data-x="center"
                     data-hoffset="0"
                     data-y="100"
                     data-speed="1500"
                     data-start="500"
                     data-easing="Back.easeInOut"
                     data-endeasing="Power1.easeIn"
                     data-endspeed="300">
                    {!! $slider->name !!}
                </div>
                @endif
                <!-- LAYER -->
                @if($slider->summary != null)
                <div class="tp-caption revolution-ch2 sft"
                     data-x="center"
                     data-hoffset="0"
                     data-y="190"
                     data-speed="1400"
                     data-start="2000"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off"
                     style="z-index: 6">
                    {!! $slider->summary !!}
                </div>
                @endif
                @if($slider->link != null)
                <!-- LAYER -->
                <div class="tp-caption sft"
                     data-x="center"
                     data-hoffset="0"
                     data-y="310"
                     data-speed="1600"
                     data-start="2800"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off"
                     style="z-index: 6">
                    <a href="{{ $banner->link ? $banner->link : '#' }}"
                       class="btn-u btn-brd btn-brd-hover btn-u-light">Đăng ký ngay</a>
                </div>
                @endif
            </li>
            @endforeach
            <!-- END SLIDE -->
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>

@section('scripts')
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="{{ asset('sliders/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sliders/plugins/jquery/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sliders/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('sliders/plugins/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sliders/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sliders/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sliders/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sliders/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- JS Customization -->
    <!-- JS Page Level -->
    <script type="text/javascript" src="{{ asset('sliders/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sliders/js/plugins/fancy-box.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sliders/js/plugins/owl-carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sliders/js/plugins/revolution-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sliders/js/plugins/style-switcher.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            App.initParallaxBg();
            FancyBox.initFancybox();
            OwlCarousel.initOwlCarousel();
            StyleSwitcher.initStyleSwitcher();
            RevolutionSlider.initRSfullWidth();
        });
    </script>

@stop
