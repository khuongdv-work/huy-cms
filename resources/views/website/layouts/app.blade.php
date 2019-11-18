<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.common.metaTags')
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/toolbar.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/toastr.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/articles.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/html-widget.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/_slider.css') ?>">
</head>
<body>
<div id="app">
    <h1 class="seo-primary"><?= isset($h1) ? $h1 : '' ?></h1>
    @include('website.common.navbar')
    @yield('content')
    @include('website.common.toolbar')
    @include('website.common.footer')
</div>
<script src="<?= asset('js/jquery-3.4.1.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/cf9c5346fe.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="<?= asset('js/toastr.min.js') ?>"></script>
<script src="<?php echo asset('js/index.js') ?>"></script>
<script src="<?php echo asset('js/validation.js') ?>"></script>
@include('website.common.toastr')
@yield('scripts')
</body>
</html>
