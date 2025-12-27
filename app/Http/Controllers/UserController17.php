<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController17 extends Controller
{
    public function showForm()
    {
        return view('user-form17');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'userName' => 'required|string|min:3|max:20',
            'Email'    => 'required|email',
            'City'     => 'required|string|max:30',
            'skill'    => 'required|array|min:1',
            'skill.*'  => 'string|in:php,node,java,python',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
        }

        return back()->with('success', 'User added successfully!');
    }
}
