<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user34controller extends Controller
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
    public function any(Request $req)
    {
        return "any route method working";
    }
    public function group1(Request $req)
    {
        return "this group1 match (post and get)  route method working";
    }

     public function group2(Request $req)
    {
        return "this group2 match (put and delete)  route method working";
    }
}

