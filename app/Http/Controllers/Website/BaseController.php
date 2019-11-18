<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $h1 = "Tín dụng 24/7";
    public $h2 = "Tín dụng 24/7";
    public $title = "Tín dụng 247";
    public $meta_title = "Tín dụng 24/7";
    public $meta_keyword = "Tín dụng 24/7";
    public $meta_description = "Tín dụng 24/7";

    protected function getSeo(){
        return [
            'h1' => $this->h1,
            'h2' => $this->h2,
            'title' => $this->title,
            'meta_title' => $this->meta_title,
            'meta_keyword' => $this->meta_keyword,
            'meta_description' => $this->meta_description,
            'meta_url' => url()->current(),
            'meta_image' => '',
            'meta_type' => 'article',
            'copyright' => 'Copyright © 2019 by khuongdv',
            'canonical' => url()->current(),
        ];
    }
}
