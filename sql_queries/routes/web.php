<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_controller;

Route::get('/',[student_controller::class,'showdata']);
