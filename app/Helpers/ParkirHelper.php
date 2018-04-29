<?php
namespace App\Helpers;

class ParkirHelper{
  public static function Status($status){
    $warna = $status ? 'panel-yellow' : 'panel-teal';
    return $warna;
  }
}
