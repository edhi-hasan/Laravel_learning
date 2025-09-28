<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\UpperCase;
use App\Rules\bangladeshiPhone;

class stutend_registration extends Controller
{
    function showData(){

        return view('registration');
    }

    function signup(Request $request){
        $request->validate([
            'name' => ['required', new UpperCase],
            'phone' => ['required', new BangladeshiPhone],
        ]);

        print_r('Form validated');
        $input = $request->except('_token');
        return view('registration',['data'=>$input]);
    }
}
