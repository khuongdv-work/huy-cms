<?php
$settings = setting('site');
$siteName = $settings['name'] ? $settings['name'] : '';
$siteEmail = $settings['email'] ? $settings['email'] : '';
$sitePhone = $settings['phone'] ? $settings['phone'] : '';
$sitePerson = $settings['person'] ? $settings['person'] : '';
$siteLogo = $settings['logo'] ? $settings['logo'] : '';
?>


<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget-info">
                    <img src="{{ Voyager::image($siteLogo) }}" class="footer-logo" alt="">
                    <div class="widget-content">
                        <p>
                            <span class="phone-number"><?=$sitePhone?> - <?=$sitePerson?></span><br/>
                            <span class="email">
                                    <?php echo $siteEmail?>
                                </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget-link">
                    <h4 class="title">Các gói vay</h4>
                    <div class="widget-content">
                        <p><a href="">Vay theo lương</a></p>
                        <p><a href="">Vay theo bảo hiểm nhân thọ</a></p>
                        <p><a href="">Vay theo hạn mức tính dụng</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- copyright -->
        <div class="row">
            <div class="col-md-12">
                <hr class="footer-hr">
            </div>
            <div class="col-md-6">
                <p class="copy-right">
                    <a href="" class="ref"><?= $siteName?></a>
                    - Copyright © 2019. Powered by
                    <a href="#" class="ref"><?=$sitePerson?></a>
                </p>
            </div>
            <div class="col-md-6">
                <p class="social-icon text-right">
                    <i class="fab fa-facebook fa-2x"></i>
                    <i class="fab fa-twitter fa-2x"></i>
                    <i class="fab fa-linkedin fa-2x"></i>
                </p>
            </div>
        </div>
    </div>
</div>
