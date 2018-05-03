<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\StatusParkir;

class JsonController extends Controller
{
  public function Status(){
    $Parkir[1] = StatusParkir::where('parkir_id', 1)
                             ->get()
                             ->last();
    $Parkir[2] = StatusParkir::where('parkir_id', 2)
                             ->get()
                             ->last();
    $Parkir[3] = StatusParkir::where('parkir_id', 3)
                             ->get()
                             ->last();

    return $Parkir;
  }
}
