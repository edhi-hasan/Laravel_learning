<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationcontroller;



Route::get('/',[registrationcontroller::class,'showform'] );
Route::post('/',[registrationcontroller::class,'signup'] );