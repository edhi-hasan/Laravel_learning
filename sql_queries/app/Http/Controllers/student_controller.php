<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class student_controller extends Controller
{
    function showdata(){
        $students = DB::select('select * from student');
        return view('student',['students' => $students]);
    }
}
