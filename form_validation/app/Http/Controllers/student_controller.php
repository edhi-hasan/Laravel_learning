<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student_controller extends Controller
{
        function showForm(){
        return view('studentForm');
    }

    function signup(Request $request){
        // $validate = $request -> validate([
        //     'name' => 'required',           (এটাতে সিঙ্গেল রোলস ডিফাইন করা হয়েছে ভেলিডেশন এর জন্য)
        //     'email' => 'required',
        // ]);

        $validate = $request -> validate([
            'name' => 'required',        //(এটাতে multiple রোলস ডিফাইন করা হয়েছে ভেলিডেশন এর জন্য)
            'email' => 'required|min:20',
        ]);

        print_r('Form validated');
        $input = $request->except('_token');
        return view('studentForm',['data'=>$input]);
    }
}
