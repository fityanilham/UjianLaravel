<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('calculator');
});

// Route::get('/forms', 'formController@index');
// Route::post('/proses', 'formController@proses');

Route::post('jawab', 'calculatorController@index');
// Route::post('hasil', 'calculatorController@hasil');