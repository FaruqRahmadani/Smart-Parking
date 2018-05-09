<?php
namespace App\Helpers;

class ParkirHelper{
  public static function Status($status){
    $warna = $status ? 'panel-yellow' : 'panel-teal';
    return $warna;
  }

  public static function Tanggal($tanggal){
    $return = Carbon\Carbon::parse($tanggal)->format('d-m-Y');
    return $return;
  }
}
