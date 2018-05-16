<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\StatusParkir;

use Waktu;

class JsonController extends Controller
{
  public function Status(){
    $MaxParkir = StatusParkir::all()
                             ->max('parkir_id');
    for ($i=1; $i <= $MaxParkir; $i++) {
      $StatusParkir = StatusParkir::where('parkir_id', $i)
                                  ->get();
      $Parkir[$i]['data'] = $StatusParkir->last();
      $Lastjam            = $StatusParkir->last()
                                         ->created_at;
      $Parkir[$i]['lastjam'] = Carbon::parse($Lastjam)->format('h:i A');
      $Parkir[$i]['elapse']  = Carbon::parse($Lastjam)->diffInMinutes(Carbon::now());
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

  public function StatistikDataParkir(){
    $MaxDate = Carbon::parse(StatusParkir::max('created_at'));
    $MaxMonth = $MaxDate->format('n');
    $MaxParkir = StatusParkir::all()
                             ->max('parkir_id');

    for ($JumlahParkir=1; $JumlahParkir <= $MaxParkir ; $JumlahParkir++) {
      for ($Month=1; $Month <= $MaxMonth ; $Month++) {
        $Parkir['Data'][$JumlahParkir][$Month] = StatusParkir::whereMonth('created_at', $Month)
                                                     ->where('parkir_id', $JumlahParkir)
                                                     ->where('status', 1)
                                                     ->get()
                                                     ->count();
      }
    }
    $Parkir['LastDate'] = $MaxDate;
    return $Parkir;
  }
}
