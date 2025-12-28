<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home21Controller extends Controller
{
    function show(){
        return "Student list";
    }
    function add(){
        return "add new student";
    }
}
