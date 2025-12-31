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



// lecture no 18
use App\Http\Controllers\UserController18;

Route::get('user-form18', [UserController18::class, 'showForm']);
Route::post('user-form18', [UserController18::class, 'handleForm']);

//lec 19
Route::view('/home19','home19');
Route::view('/home19/{name}','home19');
Route::view('/about19','about19');

//lec 20
Route::view('/home20/profile/home','home20')->name('hm');
Route::view('/home20/profile/{name}','home20')->name('user');


use App\Http\Controllers\home20Controller;
Route::get('show',[home20Controller::class,'show']);
Route::get('user',[home20Controller::class,'user']);

// lecture 21


use App\Http\Controllers\home21Controller;
// Route::view('/boy/home21','home21');

// Route::get('/boy/show',[home21Controller::class,'show']);
// Route::get('/boy/add',[home21Controller::class,'add']);

//prefix group

Route::prefix('boy')->group(function(){
Route::view('/home21','home21');


Route::get('/show',[home21Controller::class,'show']);
Route::get('/add',[home21Controller::class,'add']);
});


Route::prefix('boy/pak')->group(function(){
Route::view('/home21','home21');


Route::get('/show',[home21Controller::class,'show']);
Route::get('/add',[home21Controller::class,'add']);
});

//lec22
use App\Http\Controllers\student22Controller;
// Route::get('/show22',[student22Controller::class,'show']);
// Route::get('/add22',[student22Controller::class,'add']);
// Route::get('/delect22',[student22Controller::class,'delect']);


// group of the student22controller

Route::controller(student22Controller::class)->group(function(){
Route::get('/show22','show');
Route::get('/add22','add');
Route::get('/delect22','delect');
Route::get('/about22/{name}','about');
});

// Route::get('/about22/{name}',[student22Controller::class,'about']);

// lecture 
// Route::view('/home24','home24')->middleware('check1');
// Route::view('/about24','about24');

// group of middle ware
Route::middleware('check1')->group(function(){
Route::view('/about24','about24');
Route::view('/home24','home24');

});

//lecture 25 _ assiging middleware to route
use App\Http\Middleware\age25check;
use App\Http\Middleware\country25check;

Route::view('/about25','about25')->middleware([age25check::class,country25check::class]);
Route::view('/home25','home25')->middleware(country25check::class);

//lecture 26 _ Connect to MySQL Database
use App\Http\Controllers\user26controller;
Route::get('users26',[user26controller::class,'users']);

//Lecture 28 eloquent model in laravel
use App\Http\Controllers\student28controller;
Route::get('students28',[student28controller::class,'getstudent']);

//Lecture 30 http clients in laravel down
use App\Http\Controllers\student30controller;

Route::get('student30',[student30controller::class,'getstudent']);