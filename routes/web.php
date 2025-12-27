<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController14;
use App\Http\Controllers\UserController15;
use App\Http\Controllers\UserController16;
// use PhpParser\Node\Name;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/student','student');

Route::get('/student/{name}', function ($name) {
    return view('student',['name'=>$name]);
});
// Route::get('/home', function()  {
//     return view('home');
// });


Route::get('/about/{name}', function($name) {
    echo $name;
    return view('about',['name'=>$name]);
});


// redirect route
// route::redirect('/home','/about/asad');

// for controller
Route::get('user',[UserController::class,'getuser']);

Route::get('name/{name}',[UserController::class,'getusername']);
 
// view page to controler then web
Route::get('view',[UserController::class,'getview']);

// getuser of view to controler then web

Route::get('user/{name}',[UserController::class,'getuserame']);

// view.admin.login to controller then web 
Route::get('admin-login',[UserController::class,'adminlogin']);


// lecture#10 view in laravel
Route::view('/home','home');


#lec#11 
Route::get('home',[UserController::class,'home']);

#lec#12 :- include sub-view files in view files 
 //  Route::get('user-dout',[UserController::class,'userdout']);

// lec#13 
Route::get('home13',[UserController::class,'home13']);
// Route::view('home13','home13');
Route::get('about13',[UserController::class,'about13']);

// lec#14  
Route::view('user-form14','user-form14');
Route::post('user-form14',[UserController::class,'adduser'] );

// lec#15  
Route::view('user-form15','user-form15');
Route::post('user-form15',[UserController::class,'adduser'] );

// // lec#16  

// Route::view('user-form16','user-form16');
// Route::post('user-form16',[UserController::class,'adduser'] );

// use App\Http\Controllers\UserController16;

Route::view('user-form16','user-form16');
Route::post('adduser',[UserController16::class,'adduser']);



// Route::view('user-form16', 'user-form16');
// Route::post('/adduser', [UserController16::class, 'adduser'])->name('adduser');
 

//lecture 17
use App\Http\Controllers\UserController17;

Route::get('user-form17', [UserController17::class, 'showForm']);
Route::post('user-form17', [UserController17::class, 'submitForm']);
