<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\profileController;

Route::get('/', function () {
    return view('welcome');
})->name('home');;

Route::get('about',[mycontroller::class,'show'])->name('aboutme');;
Route::get('profile',[profileController::class,'profileShow'])->name('myprofile');;
