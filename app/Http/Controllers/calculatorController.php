<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorController extends Controller
{

  // public function index() {
  //   return view('calculator');
  // }

  public function index(Request $request) {
    $opt = $request->input('operasi');
    $ang1 = $request->input('ke1');
    $ang2 = $request->input('ke2');
    $hasil = 0;

    if ($opt == 'tambah') {
      $hasil = $ang1 + $ang2;
    }elseif ($opt == 'kurang') {
     $hasil = $ang1 - $ang2; 
    }elseif ($opt == 'kali') {
      $hasil = $ang1 * $ang2;
    }elseif ($opt) {
      $hasil = $ang1 / $ang2;
    }else {
      $hasil = 0;
    }
    
    return redirect('/')->with('info', 'Hasilnya ' . $hasil);

  }
}
