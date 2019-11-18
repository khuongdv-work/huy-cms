<?php
    $settings = setting('site');
    $phone = isset($settings['phone']) ? $settings['phone'] : '';
    $zalo = isset($settings['zalo']) ? $settings['zalo'] : '';
    $facebook = isset($settings['facebook']) ? $settings['facebook'] : '';
?>

<div id="toolbar">
    <ul>
        <li>
            <a ref="nofollow" href="tel:{{ $phone }}" title="phone">
                <img src="<?= asset('images/toolbar/phone.png') ?>" alt="phone"> <br>Gọi điện
            </a>
        </li>
        <li>
            <a ref="nofollow" href="sms:{{ $phone }}" title="sms">
                <img src="<?= asset('images/toolbar/message.png') ?>" alt="message"> <br>Tin nhắn
            </a>
        </li>
        <li>
            <a ref="nofollow" href="https://zalo.me/{{ $zalo }}" title="zalo">
                <img src="<?= asset('images/toolbar/zalo.png') ?>" alt="zalo"> <br>Zalo
            </a>
        </li>
        <li>
            <a ref="nofollow" href="{{ $facebook }}" title="facebook">
                <img src="<?= asset('images/toolbar/message.png') ?>" alt="facebook"> <br>Facebook
            </a>
        </li>
        <div class="clearfix"></div>
    </ul>
</div>
