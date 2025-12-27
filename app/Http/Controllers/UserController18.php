<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;

class UserController18 extends Controller
{
    public function showForm()
    {
        return view('user-form18');
    }

    public function handleForm(Request $request)
    {
        $request->validate([
            'userName' => ['required', 'min:3', 'max:10', new Uppercase()],
            'Email' => 'required|email',
            'City' => 'required|max:20',
            'skill' => 'required|array|min:1',
        ]);

        // For demo, just return validated data
        return back()->with('success', 'Form submitted successfully!')->withInput();
    }
}
