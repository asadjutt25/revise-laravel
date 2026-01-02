<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user35controller extends Controller
{

       // --- OLD login function for reference ---


//     function login(Request $request){

//         // use for show data that is inputed
//         // return $request;

//         echo "Request method is : ".$request->method();
//         echo "<br>";
//          echo "Request path is : ".$request->path();
//          echo "<br>";
//           echo "Request url is : ".$request->url();
//           echo "<br>";
//            echo "email is : ".$request->input('email');
//            echo "<br>";
//            echo "password is : ".$request->input('password');
//            echo "<br>"; echo "<br>"; echo "<br>";
//            print_r($request->input());
//            echo "<br>";
//            print_r($request->collect());
//            echo "<br>";
// echo "<br>";echo "<br>";
//            if($request->isMethod('post')){
//             echo "excute code for post request";
//            } else {
//             echo "excute code for other request";
//            } echo "<br>";echo "<br>";
//             if($request->isMethod('user35')){
//             echo "excute code for user path";
//            } else {
//             echo "excute code for other path";
//            }
//            echo "<br>";echo "<br>";
//             echo "ip address is : ".$request->ip();
//         echo "<br>";
//     }


     // Prepare data array with request information
      function login(Request $request){
        // Prepare data array
        $data = [
            'method' => $request->method(),
            'path' => $request->path(),
            'url' => $request->url(),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'input_array' => $request->input(),
            'input_collection' => $request->collect()->all(),
            'is_post' => $request->isMethod('post') ? 'Execute code for POST request' : 'Execute code for other request',
            'is_user35' => $request->isMethod('user35') ? 'Execute code for user35 path' : 'Execute code for other path',
            'ip' => $request->ip(),
        ];

        // Pass data to a new blade view
         // Pass data to a Blade view for a nicer display
        return view('user35_result', compact('data'));
    }
}
