<?php

if (!function_exists('get_image_from_field')) {
    function get_image_from_field($data, $field ='image')
    {
        $field = isset($data[$field]) ? $data[$field]: null;
        if (!$field){
            return '';
        }
        $image = (json_decode($field))[0]->download_link;
        return $image;
    }
}


