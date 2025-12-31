<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class users31controller extends Controller
{
    function queries(){

        // use for show all data from database
        $result = DB::table('users')->get();

// use for show special data
        // $result = DB::table('users')->where('phone','123')->get();

// use for first line data 
//  $result = DB::table('users')->first();
// $result = [$result];


//  // insert data into the database by query
//  $result = DB::table('users')->insert([
//     'name'=>'ali',
//     'email'=>'ali@gmail',
//     'phone'=>'123',
//  ]);
//  if($result){
//     return "Data inserted";
//  }else{
//     return "data is not inserted";
//  }

 // update data into the database by query
//  $result = DB::table('users')->where('name','ali')->update(['phone'=>'737373']);
//  if($result){
//     return "Data is updated";
//  }else{
//     return "data is not updated";
//  }


  // delect data into the database by query
//  $result = DB::table('users')->where('name','ali')->delete();
//  if($result){
//     return "Data is delected";
//  }else{
//     return "data is not delected";
//  }


 // // over comand
 return  view('users31',['users'=>$result]);
    }
}

