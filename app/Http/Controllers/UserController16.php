<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController16 extends Controller
{
    public function adduser(Request $request)
    {
        $request->validate([
            'userName' => 'required|min:3|max:10',
            'Email'    => 'required|email',
            'City'     => 'required|max:20',
            'skill'    => 'required|array|min:1',
        ]);

        // Agar validation pass ho jaye to yahan ap apka logic likh sakte hain
        // Filhal bas request data return kar dete hain

        return back()->with('success', 'User added successfully!')->withInput();
    }
}
