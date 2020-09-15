<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorController extends Controller
{

  public function tabung(Request $request) {
    $alas = $request->input('alas');
    $tinggi = $request->input('tinggi');
    $result = 0;
    
    $result= $alas * $tinggi;        
    
    return redirect('')->with('jtabung','Volume Tabung adalah: ' . $result);       
  }

  public function bola(Request $request) {
    $jari = $request->input('jari');       
    $phi = 3.14;
    $result = 0;

    $result = 4/3 * $phi * $jari * $jari * $jari;
    
    return redirect('')->with('jbola','Volume Bola adalah: ' . $result);       
  }

  public function kerucut(Request $request) {
    $phi = 3.14;
    $jari = $request->input('jari');
    $tinggi = $request->input('tinggi');
    $result = 0;

    $result = 1/3 * $phi * $jari * $jari * $tinggi;

    return redirect('')->with('jkerucut','Volume Kerucut adalah: ' . $result);
  }
}
