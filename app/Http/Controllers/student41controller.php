<?php
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Student41;
// class student41controller extends Controller
// { 
//   function add41(Request $request){
// $student= new Student41();
// $student->name=$request->name;
// $student->email=$request->email;
// $student->phone=$request->phone;
// $student->save();
// if($student){
//     echo "new student is added";
// }else{
//     echo "new student is not added";
// }
  // return "add function from controller is working";
  // }

//   function list42(){
//   $studentList = Student41::all();
//     return view('list-student42',['student41'=>$studentList]);
//   }
// } 



// edited code 



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student41;

class student41controller extends Controller
{
    public function add41(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:30',
        ]);

        try {
            $student = new Student41();
            $student->name  = $validated['name'];
            $student->email = $validated['email'];
            $student->phone = $validated['phone'];
            $student->save();

            // success message + list page par redirect
            return redirect()->route('list42')->with('success', 'Student successfully added!');
        } catch (\Throwable $e) {
            return back()
                ->withInput()
                ->with('error', 'Student add nahi hua. Please try again.');
        }
    }

    public function list42()
    {
        $studentList = Student41::latest()->get();
        return view('list-student42', ['student41' => $studentList]);
    }
}