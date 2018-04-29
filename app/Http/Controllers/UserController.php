<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\StatusParkir;

use Parkir;

class UserController extends Controller
{
  public function Parkir(){
    return view('Parkir');
  }
}
