<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function front()
  {
    return view('front.index');
  }


  public function sobre()
  {
    return view('front.sobre');
  }


}
