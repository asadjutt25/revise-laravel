<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user37controller extends Controller
{
    function adduser(Request $request){
        // return "add new user";
// your db code
             $request->session()->flash('message','user has been added successfuly');
        return redirect('user37');

    }
}
