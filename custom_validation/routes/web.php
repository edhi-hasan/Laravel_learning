<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stutend_registration;

Route::get('/', [stutend_registration::class,'showData'] );
Route::post('/', [stutend_registration::class,'signup'] );
