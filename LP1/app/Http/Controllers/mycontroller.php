<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    //controller show method
    function show($nm){
        return "Hello ". $nm;
    }
}
