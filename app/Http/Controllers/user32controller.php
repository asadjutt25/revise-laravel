<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user32;
class user32controller extends Controller
{
function queries(){

    // use see all data 
    // $response = user32::all();

    // use for special line data 
// $response = user32::where('phone','7773')->get();

 // use for firstl line data 
// $response = user32::where('phone','7773')->first();
//$response = [$response];

 // use for first id  line data 
// $response = user32::find(3);
// $response = [$response];

//insert  data
// $response = user32::insert([
//   'name'=>'key',
//   'email'=>'kay@test.com',
//     'phone'=>'7773',
// ]);
// if($response){
//     return "data inserted";
// }else{
//     return "data is not inserted";
// }

//update the selected  data
$response = user32::where('name','key')->update(['phone'=>'9999']);
if($response){
    return "data updated";
}else{
    return "data is not updated";
}

//update the selected  data
// $response = user32::where('name','key')->delete(['phone'=>'9999']);
// if($response){
//     return "data delete";
// }else{
//     return "data is not delete";
// }

// all data view
    // return  view('user32',['users'=>$response]);
}
}
