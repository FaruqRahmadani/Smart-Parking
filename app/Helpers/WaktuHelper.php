<?php
namespace App\Helpers;

use Carbon\Carbon;

class WaktuHelper{
  public static function Tanggal($tanggal){
    $return = Carbon::parse($tanggal)->format('d-m-Y');
    return $return;
  }

  public static function Jam($waktu){
    $return = Carbon::parse($waktu)->format('h:i A');
    return $return;
  }

  public static function TanggalNow(){
    $return = Carbon::now()->format('Y-m-d');
    return $return;
  }

  public static function Bulan($index){
    $Bulan = [
      'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    ];

    return $Bulan[$index];
  }
}
