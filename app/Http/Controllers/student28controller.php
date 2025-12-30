<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student28controller extends Controller
{
    function getstudent(){
        $data = new  \App\Models\student;
        echo $data ->testfun();
        $student = \App\Models\student::all();
       return view('student28',['data'=>$student]);
    }
}
