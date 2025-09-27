<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\mycontroler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',function() {
    return view('home',['name'=>'Edhi']);
});

Route::get('product',[mycontroler::class,'show']);
