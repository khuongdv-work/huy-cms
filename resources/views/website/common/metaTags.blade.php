<?php
    $seo  = isset($seo) ? $seo : [];
    $title = isset($title) ? $title : '';
    $meta_title = isset($seo['meta_title']) ? $seo['meta_title'] : '';
    $meta_keyword = isset($seo['meta_keyword']) ? $seo['meta_keyword'] : '';
    $meta_description = isset($seo['meta_description']) ? $seo['meta_description'] : '';
    $meta_url = isset($seo['meta_url']) ? $seo['meta_url'] : '';
    $meta_image = isset($seo['meta_image']) ? $seo['meta_image'] : '';
    $meta_copyright = isset($seo['copyright']) ? $seo['copyright'] : '';
    $meta_canonical = isset($seo['canonical']) ? $seo['canonical'] : '';
?>

<title>{{ $title }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="{{ $meta_description }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="{{ $title }}" name="WT.ti"/>
<meta itemprop="name" content="{{ $title }}">
<meta itemprop="image" content="{{ $meta_image }}">
<meta property="og:title" content="{{ $title }}"/>
<meta property="og:url" content="{{ $meta_url }}" />
<meta property="og:image" content="{{ $meta_image }}" />
<meta property="og:type" content="article" />
<meta property="og:description" content="{{ $meta_description }}" />
<meta property="og:image:width" content="720" />
<meta property="og:image:height" content="378" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="{{ $title }}" />
<meta name="twitter:description" content="{{ $meta_description }}" />
<meta name="twitter:site" content="taichinh247vn.com" />
<meta name="twitter:url" content="{{ $meta_url }}" />
<meta name="twitter:image" content="{{ $meta_image }}" />
<meta name="copyright" content="{{ $meta_copyright }}" />
<meta name="robots" content="index,follow,noodp,noarchive" />
<meta name="Googlebot" content="index,follow" />
