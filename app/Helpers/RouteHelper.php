<?php
namespace App\Helpers;

use Request;

class RouteHelper{
  public static function ActiveRoute($RouteName){
    $CurrentRouteName = Request::route()->getName();
    if ($RouteName == $CurrentRouteName) {
      return 'class=active';
    }
  }

  public static function JudulRoute(){
    $CurrentRouteName = Request::route()->getName();
    return title_case(str_slug($CurrentRouteName, ' ', '-'));
  }
}
