<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController14 extends Controller
{
     // lec#14 
    function adduser(Request $request){
    //    return $request;
echo "user name is  $request->userName ";
 echo "<br>";
echo $request->City; 
echo "<br>";
echo $request->Email;
 }

}
   