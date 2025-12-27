<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController15 extends Controller {




    function userform14(Request $request){
    
echo "user city is ". $request->city ;
 echo "<br>";
echo "gender is  $request->gender"; 
echo "<br>";
print_r ($request->skill);
}
}

