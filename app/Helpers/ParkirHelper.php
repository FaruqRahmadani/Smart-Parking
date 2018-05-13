<?php
namespace App\Helpers;

use Crypter;
use Waktu;

class ParkirHelper{
  public static function LinkPrintData($request){
    $tanggalawal = $request ? $request->tanggalawal : '2011-01-01';
    $tanggalakhir = $request ? $request->tanggalakhir : Waktu::TanggalNow();
    $nomorparkir = $request ? $request->nomorparkir : '01012011';
    $statusparkir = $request ? $request->statusparkir : '01012011';
    $link = Route('Print-Data-Parkir', ['tanggalawal' => Crypter::Encrypt($tanggalawal), 'tanggalakhir' => Crypter::Encrypt($tanggalakhir), 'nomorparkir' => Crypter::Encrypt($nomorparkir), 'statusparkir' => Crypter::Encrypt($statusparkir)]);
    return $link;
  }
}
