<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\StatusParkir;

use Parkir;
use Waktu;

class UserController extends Controller
{
  public function Parkir(){
    return view('Parkir');
  }

  public function DataParkir(){
    $Parkir    = StatusParkir::all();
    $MaxParkir = $Parkir->max('parkir_id');

    return view('DataParkir', ['Parkir' => $Parkir, 'MaxParkir' => $MaxParkir]);
  }

  public function FilterDataParkir(Request $request){
    $Parkir = StatusParkir::whereDate('created_at', '>=', $request->tanggalawal)
                          ->whereDate('created_at', '<=', $request->tanggalakhir);

    if ($request->nomorparkir != '01012011') {
      $Parkir = $Parkir->where('parkir_id', $request->nomorparkir);
    }
    if ($request->statusparkir != '01012011') {
      $Parkir = $Parkir->where('status', $request->statusparkir);
    }

    $MaxParkir = $Parkir->max('parkir_id');

    return view('DataParkir', ['Parkir' => $Parkir->get(), 'MaxParkir' => $MaxParkir, 'request' => $request]);
  }
}
