<?php
$settings = setting('site');
$siteName = $settings['name'] ? $settings['name'] : '';
$siteEmail = $settings['email'] ? $settings['email'] : '';
$sitePhone = $settings['phone'] ? $settings['phone'] : '';
$sitePerson = $settings['person'] ? $settings['person'] : '';
$siteAddress = $settings['address'] ? $settings['address'] : '';
$siteTime = $settings['time'] ? $settings['time'] : '';
$siteLogo = $settings['logo'] ? $settings['logo'] : '';
?>

<div class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <p>
                    <span class="top-icon">
                        <i class="fas fa-map-marker-alt"></i>
                          <?=$siteName?>: <?=$siteAddress?>
                    </span>
                    <span class="top-icon">
                        &nbsp; &nbsp;
                        <i class="fas fa-clock"></i>
                         <?=$siteTime?>
                    </span>
                    <span class="top-icon">
                        &nbsp;&nbsp;&nbsp;
                        <i class="fas fa-phone-volume"></i>
                         <?=$sitePhone?> - <?=$sitePerson?>
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ Voyager::image($siteLogo) }}" class="logo" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                {!! menu('website', 'website.common.menu') !!}
            </div>
        </div>
    </nav>
</div>
