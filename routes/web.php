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


//Lecture 31 database queries buildes in laravel down
use App\Http\Controllers\users31controller;
Route::get('user31',[users31controller::class,'queries']);


//Lecture 32 eloquent model queries buildes in laravel down
use App\Http\Controllers\user32controller;
Route::get('user32',[user32controller::class,'queries']);

//Lecture 33  
use App\Http\Controllers\user33controller;
//  // method is use for get
// Route::get('user33',[user33controller::class,'get']);
//  // method is use for post
// Route::post('user33',[user33controller::class,'post']);

//         // method is use for put
// // Route::put('user33',[user33controller::class,'put']);
// Route::put('user33', [user33controller::class, 'put']);
//  // method is use for delect
// Route::delete('user33',[user33controller::class,'delete']);

Route::view('form33','user33');

Route::get('user33', [user33controller::class, 'get']);
Route::post('user33', [user33controller::class, 'post']);
Route::put('user33', [user33controller::class, 'put']);
Route::delete('user33', [user33controller::class, 'delete']);


// lecture no 34 any and match route function



use App\Http\Controllers\user34controller;


// Route::get('user34', [user34controller::class, 'any']);
// Route::post('user34', [user34controller::class, 'any']);
// Route::put('user34', [user34controller::class, 'any']);
// Route::delete('user34', [user34controller::class, 'any']);


// Route::any('user34', [user34controller::class, 'any']);

Route::match(['post','get'],'/user34',[user34controller::class, 'group1']);

Route::match(['put','delete'],'/user34',[user34controller::class, 'group2']);
Route::view('form34','user34');

// lecture no 35 

use App\Http\Controllers\user35controller;
Route::view('form35','user35');
Route::post('user35', [user35controller::class, 'login']);


// lecture no 36

// use App\Http\Controllers\user36controller;
// Route::post('login36',[user36controller::class,'login']);
// Route::get('logout36',[user36controller::class,'logout']);
// Route::view('/login36','login36');

// Route::view('/profile36','profile36');


use App\Http\Controllers\user36controller;

// Show login form
Route::view('/login36', 'login36')->name('login36');

// Handle login form submission
Route::post('/login36', [user36controller::class, 'login'])->name('login36.post');

// Show profile page (using controller)
Route::get('/profile36', [user36controller::class, 'profile'])->name('profile36');

// Logout route
Route::get('/logout36', [user36controller::class, 'logout'])->name('logout36');

// lecture no 37

use App\Http\Controllers\user37controller;
Route::view('/user37', 'user37');
Route::post('adduser37', [user37controller::class, 'adduser']);


// lecture no 38
Route::view('/upload38', 'upload38');
use App\Http\Controllers\upload38controller;
Route::post('/upload38', [upload38controller::class,'upload']);


// lecture no 39
// Route::view('/about39','about39');
use Illuminate\Support\Facades\App;

Route::get('/about39/{lang}',function($lang){
    App::setLocale($lang);
return view('about39');
});

// lecture no 40

// Route::get('setlang/{lang}',function($lang){
//     Session::put('lang',$lang);
// return redirect('/');
// });
use Illuminate\Support\Facades\Session;


// Route::middleware('SetLang')->group(function(){
// Route::get('SetLang/{lang}',function($lang){
//     session()->put('lang',$lang);
// return redirect('/');
// });

// Route::get('/about39/{lang}',function($lang){
//     app()->setLocale($lang);
// return view('about39');
// });
 
// });

Route::middleware('setlang')->group(function () {
    Route::get('setlang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return redirect('/');
    });

    Route::get('/about39', function () {
        return view('about39');
    });
});


// lecture no 41
// Route::view('add41','add-student41');
// use App\Http\Controllers\student41controller;
// Route::post('add4',[student41controller::class,'add41']);



// code my me
// use App\Http\Controllers\student41controller;

// Route::view('add41','add-student41');

// Route::post('add4',[student41controller::class,'add41'])->name('add4');

// Route::get('list42',[student41controller::class,'list42'])->name('list42');


// code edit
use App\Http\Controllers\student41controller;

Route::view('add41', 'add-student41')->name('add41');

Route::post('add4', [student41controller::class, 'add41'])->name('add4');

Route::get('list42', [student41controller::class, 'list42'])->name('list42');

Route::get('delect43/{id}', [student41controller::class, 'delect43'])->name('delect43');

//LECTURE44
Route::get('edit/{id}', [student41controller::class, 'edit44'])->name('edit44');

