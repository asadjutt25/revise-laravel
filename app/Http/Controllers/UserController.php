<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\view;
class UserController extends Controller
{
    function getuser(){
        return "Asad shabbir";  
    }
    function getusername($name){
        return "hello ".$name;  
    }
     function getview(){
        return view('user');  
    }
    function getuserame($name){
        // return "hello ".$name;  
        return view('getuser',['name'=>$name]);
    }

    // function adminlogin(){
    //     return view('admin.login');
    // }


    // home page call
    function userhome(){
        return view('home');
    } 

    function adminlogin(){
        if (View::exists('admin.login')){
            return view('admin.login');
        }
        else{
            echo "no view fount";
        }
    }
}
