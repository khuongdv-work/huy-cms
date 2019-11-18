<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    public static function getSliders(){
        return self::all();
    }
}
