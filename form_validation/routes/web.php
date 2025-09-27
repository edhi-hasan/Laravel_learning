<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/studentform',[student_controller::class, 'showForm'])->name('student');
Route::post('/studentform', [student_controller::class, 'signup']);
