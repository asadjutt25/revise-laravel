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
    function home(){
        #lec#11 
        $name="Sikander";
        $users=['Asad','Sikander','sultan'];
        return view('home', ["name"=>$name , "users"=>$users]);
    } 
        #lec#11


    function adminlogin(){
        if (View::exists('admin.login')){
            return view('admin.login');
        }
        else{
            echo "no view fount";
        }
    }
}


    #lec#12     
// function userabout(){
// return view('dout');
// 
// }



    #lec#12  
