<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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