<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user36controller extends Controller
{
// function login(Request $request){

// $request->session()->put('name',$request ->input('name'));
// return redirect ('profile36');
//     // return $request ->input('name');

//     // saved data show karyo
//     echo session ('name');

// }
// function logout(){
//     session()->pull('name');
//     return redirect('/profile36');
// }

 public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        session()->put('name', $request->name);

        return redirect()->route('profile36');
    }

    public function profile()
    {
        // You can add logic here if needed, e.g., redirect if no session
        if (!session()->has('name')) {
            return redirect()->route('login36')->with('error', 'Please login first!');
        }

        return view('profile36');
    }

    public function logout()
    {
        session()->forget('name');

        return redirect()->route('login36');
    }

} 
