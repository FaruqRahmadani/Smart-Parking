<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\StatusParkir;

class JsonController extends Controller
{
  public function Status(){
    $MaxParkir = StatusParkir::all()
                             ->max('parkir_id');
    for ($i=1; $i <= $MaxParkir; $i++) {
      $Parkir[$i] = StatusParkir::where('parkir_id', $i)
                               ->get()
                               ->last();
    }
    return $Parkir;
  }

  public function Update($IdParkir, $Status){
    $Parkir = new StatusParkir;
    $Parkir->parkir_id = $IdParkir;
    $Parkir->status    = $Status;
    $Parkir->save();
    if ($Parkir) {
      return "Berhasil";
    }
  }
}
