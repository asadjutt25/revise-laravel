<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class student30controller extends Controller
{
    function getstudent(){
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('student30',['data'=>json_decode($response)]);
    }
}
