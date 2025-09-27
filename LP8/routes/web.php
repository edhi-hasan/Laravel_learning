<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reportcontroller;
use App\Http\Middleware\underconstruction;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contact',function(){
    return view('contact');
})->name('contact');

Route :: get('report',[reportcontroller::class, 'show'])->name('report');

Route::get('dashboard',function(){
    return view('dashboard');
})->name('dashboard')->middleware(underconstruction::class);

