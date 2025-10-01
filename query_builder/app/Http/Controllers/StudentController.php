<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function ShowData(){
        // DB::table('student')->insert([
        //     [
        //         'name'=>'Maha',
        //         'email' => 'maha@gmail.com',
        //         'city' => 'coxBazar'
        //     ],
        //     [
        //         'name'=>'izaan',
        //         'email' => 'izaan@gmail.com',
        //         'city' => 'coxBazar'
        //     ]
        // ]);
        $student = DB::Table('student')->get();
        $singleStu = DB::Table('student')->where('city','Chittagong')->first();
        return view('student',['students'=>$student,'singlestu'=>$singleStu]);
    }
}
