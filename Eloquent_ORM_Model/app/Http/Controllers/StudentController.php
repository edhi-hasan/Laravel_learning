<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    function showData(){
        $student = [];
        // $students = Student::all();
        $students = Student::where('city',"Cox's Bazar")->orderBy('name')->get();
        return view('home',['students'=>$students]);
    }
}
