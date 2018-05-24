<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\StatusParkir;

use Crypter;
use Parkir;
use Waktu;
use PDF;

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

    $MaxParkir = StatusParkir::max('parkir_id');

    return view('DataParkir', ['Parkir' => $Parkir->get(), 'MaxParkir' => $MaxParkir, 'request' => $request]);
  }

  public function PrintDataParkir($tanggalawal, $tanggalakhir, $nomorparkir, $statusparkir){
    $tanggalawal = Crypter::Decrypt($tanggalawal);
    $tanggalakhir = Crypter::Decrypt($tanggalakhir);
    $nomorparkir = Crypter::Decrypt($nomorparkir);
    $statusparkir = Crypter::Decrypt($statusparkir);

    $Parkir = StatusParkir::whereDate('created_at', '>=', $tanggalawal)
                          ->whereDate('created_at', '<=', $tanggalakhir);

    if ($nomorparkir != '01012011') {
      $Parkir = $Parkir->where('parkir_id', $nomorparkir);
    }
    if ($statusparkir != '01012011') {
      $Parkir = $Parkir->where('status', $statusparkir);
    }

    $pdf = PDF::loadview('print.DataParkir', ['Parkir' => $Parkir->get()]);
    return $pdf->stream();
  }

  public function StatistikParkir(){
    return view('StatistikParkir');
  }
}
