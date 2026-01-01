<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user33controller extends Controller
{
    public function get(Request $req)
    {
        return "GET route method working";
    }

    public function post(Request $req)
    {
        return "POST route method working";
    }

    public function put(Request $req)
    {
        return "PUT route method working";
    }

    public function delete(Request $req)
    {
        return "DELETE route method working";
    }
}

