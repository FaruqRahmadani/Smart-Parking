<?php
namespace App\Helpers;

use Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class CrypterHelper{
  public static function Encrypt($string){
    return Crypt::Encryptstring($string);
  }

  public static function Decrypt($string){
    try {
      return Crypt::Decryptstring($string);
    } catch (DecryptException $e) {
      return dd('Apa nang ikam cari?');
    }
  }
}
