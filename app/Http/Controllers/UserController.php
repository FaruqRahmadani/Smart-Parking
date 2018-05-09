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
    $Parkir = StatusParkir::all();

    return view('DataParkir', ['Parkir' => $Parkir]);
  }
}
