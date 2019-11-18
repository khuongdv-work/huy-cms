<?php
    $sliders = \App\Slider::getSliders();
?>


<div id="main-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($sliders as $k => $slider)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $k }}" class="{{ $k == 0 ? 'active': '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($sliders as $k => $slider)
            <div class="carousel-item {{ $k == 1 ? 'active': '' }}">
                <img class="d-block w-100" src="{{ Voyager::image(get_image_from_field($slider,'image')) }}" alt="First slide">
                <div class="carousel-caption d-md-block">
                    <h2 class="slider-title">{{ $slider->name }}</h2>
                    <div class="slider-caption">
                        {!! $slider->description !!}
                    </div>
                    <a href="#form-contact" class="btn btn-primary" >Đăng ký ngay</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



{{--0--}}
