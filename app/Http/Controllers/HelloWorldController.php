<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// function index

class HelloWorldController extends Controller {
  public function index() {
    return "Lagi nyoba laravel 12";
  }
  public function ambilfile() {
    return view('ambilfile');
  }
}
