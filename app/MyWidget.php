<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MyWidget extends Model
{
    public static $position = [
      'HOME' => 'HOME',
      'SIDEBAR' => 'SIDEBAR',
      'FOOTER' => 'FOOTER',
    ];

    public static $type = [
        "TEXT" => "TEXT",
        "FORMCONTACT" => "FORMCONTACT",
        "GOOGLE_MAP" => "GOOGLE_MAP",
        "BOX_INFO" => "BOX_INFO",
    ];

    public static function getWidgets($type)
    {
        $widgets =  MyWidget::where('active', 1)->where('position', $type)->orderBy('order','DESC')->get();
        $newWidgets= $widgets->map(function($e, $key){
            $e['fileBlade'] = self::getBladeWidget($e->type, $e->position);
            return $e;
        });
        return $newWidgets;
    }

    public static function getBladeWidget($type, $position){
        switch ($type){
            case self::$type['TEXT']: {
                return "website.widgets.".strtolower($position).".html";
            }
            case self::$type['FORMCONTACT']:{
                return "website.widgets.".strtolower($position).".formContact";
            }
            case self::$type['BOX_INFO']: {
                return "website.widgets.".strtolower($position).".info";
            }
            case self::$type['GOOGLE_MAP']: {
                return "website.widgets.".strtolower($position).".gmap";
            }
        }
    }
}
