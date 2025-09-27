<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
    function showform(){
        return view('registration');
    }

    function signup(Request $request){
        print_r($request->all());
        return view('registration');
    }
};
