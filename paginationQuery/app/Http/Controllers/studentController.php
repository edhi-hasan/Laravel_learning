<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function showlist(){
        // $student = DB::table('student')->paginate(4);
        $student = DB::table('student')->simplePaginate(4);
        return view('student',['students'=>$student]);
    }
}
