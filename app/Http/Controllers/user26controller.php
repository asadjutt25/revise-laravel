<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user26controller extends Controller
{
    // function users(){
    //     return DB::select('select * from users');
    // }

     function users(){
        $users= DB::select('select * from users');
        return view('users27',['users'=>$users]);
    }
}
