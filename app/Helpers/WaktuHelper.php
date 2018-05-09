<?php
namespace App\Helpers;

use Carbon\Carbon;

class WaktuHelper{
  public static function Tanggal($tanggal){
    $return = Carbon::parse($tanggal)->format('d-m-Y');
    return $return;
  }

  public static function Jam($waktu){
    $return = Carbon::parse($waktu)->format('H:i A');
    return $return;
  }
}
