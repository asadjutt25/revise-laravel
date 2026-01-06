<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upload38controller extends Controller
{
    // function upload(Request $request){
    //     // echo "upload the file successfully";
    //     $path = $request->file('file')->store('public');
    //     // return $path;
    //     $fileNameArray=explode("/",$path);
    //     $fileName=$fileNameArray[1];
    //     return view('display38',['path'=>$fileName]);

    // }


    function upload(Request $request)
    {
        // file get karo
        $file = $request->file('file');

        // unique filename
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        // file save in storage/app/public
        $file->storeAs('public', $fileName);

        // view return
    //     return view('display38', ['path' => $fileName]);
    $path = $request->file('file')->store('uploads', 'public');
return view('display38', compact('path'));

    }
}
