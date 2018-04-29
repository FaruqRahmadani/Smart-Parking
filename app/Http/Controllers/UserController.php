<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\StatusParkir;

use Parkir;

class UserController extends Controller
{
  public function Parkir(){
    $StatusParkir = StatusParkir::all();

    return view('Parkir');
  }
}
