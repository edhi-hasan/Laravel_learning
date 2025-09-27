<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',function(){
    return view('index');
});

Route::get('about',function(){
    return view('about.about',['name'=>'Saad']);
});

Route::get('controller/{name}',[mycontroller::class,'show']);

