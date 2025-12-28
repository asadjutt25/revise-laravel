<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student22Controller extends Controller
{
     function show(){
        return "Students list";
    }
    function add(){
        return "add new students";
    }
     function delect(){
        return "delect Student from list";
    }
     function about($name){
        return $name;
    }
}
