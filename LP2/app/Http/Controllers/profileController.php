<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    //
    function profileShow(){
        $name='laravel';
        return view('admin.profile',['nm'=>$name]);
    }
}
