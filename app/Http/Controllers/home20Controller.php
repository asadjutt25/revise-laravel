<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home20Controller extends Controller
{
    function show(){
        // return redirect()->to('home20/profile/home');
        return to_route('hm');
    }
        function user(){
        
        return to_route('user',["name"=>'asad']);
    }
}
