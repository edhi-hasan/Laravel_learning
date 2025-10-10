<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [studentController::class,'index'])->name('index');
Route::post('/', [studentController::class,'create'])->name('create');
Route::get('/edit/{id}', [studentController::class,'edit'])->name('edit');
Route::put('/edit/{id}', [studentController::class,'update'])->name('update');
Route::get('/delete/{id}', [studentController::class,'destroy'])->name('delete');
