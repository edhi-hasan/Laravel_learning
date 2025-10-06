<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('student')->get();
        return view('home',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('student')->insert([
            'name'=> $request->name,
            'roll'=> $request->roll,
            'email'=> $request->email,
            'city'=> $request->city,
        ]);

        return redirect(route('index'))->with('status','Student added successfully..!');
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = DB::table('student')->find($id);
        return view('editform',['student'=>$students]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('student')->where('id',$id)->update([
            'name'=> $request->name,
            'roll'=> $request->roll,
            'email'=> $request->email,
            'city'=> $request->city,
        ]);

        return redirect(route('index'))->with('status','Student updated successfully..!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('student')->where('id',$id)->delete();
        return redirect(route('index'))->with('status','Student deleted successfully..!');
    }
}
